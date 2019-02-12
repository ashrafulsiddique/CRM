<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expense;
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
        $permission = Permission::get();

        return view('expenses.create',compact('permission'));
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

            'name' => 'required|unique:expenses,name',

            'permission' => 'required',

        ]);


        $expense = Expense::create(['name' => $request->input('name')]);

        $expense->syncPermissions($request->input('permission'));


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

        $expensePermissions = Permission::join("Expense_has_permissions","Expense_has_permissions.permission_id","=","permissions.id")

            ->where("Expense_has_permissions.order_id",$id)

            ->get();


        return view('expenses.show',compact('expense','ExpensePermissions'));
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

        $permission = Permission::get();

        $expensePermissions = DB::table("Expense_has_permissions")->where("Expense_has_permissions.invoice_id",$id)

            ->pluck('Order_has_permissions.permission_id','Expense_has_permissions.permission_id')

            ->all();


        return view('expenses.edit',compact('expense','permission','expensePermissions'));
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

            'name' => 'required',

            'permission' => 'required',

        ]);


        $expense = Expense::find($id);

        $expense->name = $request->input('name');

        $expense->save();


        $expense->syncPermissions($request->input('permission'));


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
       DB::table("expenses")->where('id',$id)->delete();

        return redirect()->route('expenses.index')

                        ->with('success','Expense deleted successfully');
    }
}
