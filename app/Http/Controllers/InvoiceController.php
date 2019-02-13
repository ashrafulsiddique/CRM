<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoice;
use App\User;
use Spatie\Permission\Models\Permission;

class InvoiceController extends Controller
{

        function __construct()
    {
         $this->middleware('permission:Invoice-list');
         $this->middleware('permission:Invoice-create', ['only' => ['create','store']]);
         $this->middleware('permission:Invoice-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:Invoice-delete', ['only' => ['destroy']]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $invoices = Invoice::orderBy('id','DESC')->paginate(5);

        return view('invoices.index',compact('invoices'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $users= User::all();
        $users=User::whereHas('roles', function($q){$q->whereIn('roles.name', ['customer']);})->get();


        return view('invoices.create',compact('users'));
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

            'customer' => 'required',
            'ser_no' => 'required',
            'inv_no' => 'required',
            'issue_date' => 'required',
            'due_note' => 'required',
            'due_date' => 'required',
    ]);

    $invoice = new Invoice;
    $invoice->customer_id = $request->input('customer');
    $invoice->serial_no = $request->input('ser_no');
    $invoice->invoice_no = $request->input('inv_no');
    $invoice->issue_date = $request->input('issue_date');
    $invoice->due_note = $request->input('due_note');
    $invoice->due_date = $request->input('due_date');   
    $invoice->save();

        return redirect()->route('invoices.index')
                        ->with('success','invoice created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invoice = Invoice::find($id);

        return view('invoices.show',compact('invoice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $invoice = Invoice::find($id);
        // $users= User::all();
        $users=User::whereHas('roles', function($q){$q->whereIn('roles.name', ['customer']);})->get();


        return view('invoices.edit',compact('invoice', 'users'));
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
            'customer' => 'required',
            'ser_no' => 'required',
            'inv_no' => 'required',
            'issue_date' => 'required',
            'due_note' => 'required',
            'due_date' => 'required',
    ]);

    $invoice = Invoice::find($id);
    $invoice->customer_id = $request->input('customer');
    $invoice->serial_no = $request->input('ser_no');
    $invoice->invoice_no = $request->input('inv_no');
    $invoice->issue_date = $request->input('issue_date');
    $invoice->due_note = $request->input('due_note');
    $invoice->due_date = $request->input('due_date');   
    $invoice->save();

        return redirect()->route('invoices.index')
                        ->with('success','Invoice updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $invoice = Invoice::find($id);
        $invoice->delete();

        return redirect()->route('invoices.index')
                        ->with('success','Invoice deleted successfully');
    }
}
