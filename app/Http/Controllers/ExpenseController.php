<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expense;
use App\User;
use Spatie\Permission\Models\Permission;

class ExpenseController extends Controller
{


       function __construct()

    {
         $this->middleware('permission:Expense-list');
         $this->middleware('permission:Expense-create', ['only' => ['create','store']]);
         $this->middleware('permission:Expense-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:Expense-delete', ['only' => ['destroy']]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $expenses = Expense::orderBy('id','DESC')->paginate(5);

        return view('expenses.index',compact('expenses'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::whereHas('roles', function($q){$q->whereIn('roles.name', ['customer']);})->get();

        return view('expenses.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'amount' => 'required',
            'expense_date' => 'required',
            'category' => 'required',
            'customer' => 'required',
            'account' => 'required',
            'description' => 'required',
    ]);

        $expenses = new Expense;
        $expenses->title = $request->input('title');
        $expenses->amount = $request->input('amount');
        $expenses->expense_date = $request->input('expense_date');
        $expenses->category = $request->input('category');
        $expenses->customer_id = $request->input('customer');
        $expenses->account = $request->input('account');
        $expenses->description = $request->input('description');   
        $expenses->save();

        return redirect()->route('expenses.index')
                ->with('success','expense created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $expense = Expense::find($id);

        return view('expenses.show',compact('expense'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $expense = Expense::find($id);
        $users=User::whereHas('roles', function($q){$q->whereIn('roles.name', ['customer']);})->get();

        return view('expenses.edit',compact('expense','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [

            'title' => 'required',
            'amount' => 'required',
            'expense_date' => 'required',
            'category' => 'required',
            'customer' => 'required',
            'account' => 'required',
            'description' => 'required',

    ]);

    $expenses = Expense::find($id);
    $expenses->title = $request->input('title');
    $expenses->amount = $request->input('amount');
    $expenses->expense_date = $request->input('expense_date');
    $expenses->category = $request->input('category');
    $expenses->customer_id = $request->input('customer');
    $expenses->account = $request->input('account');
    $expenses->description = $request->input('description');   
    $expenses->save();

        return redirect()->route('expenses.index')
                        ->with('success','Expense updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $expense = Expense::find($id);
        $expense->delete();
        
        return redirect()->route('expenses.index')
                        ->with('success','Expense deleted successfully');
    }
}
