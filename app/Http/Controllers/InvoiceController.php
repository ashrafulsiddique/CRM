<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoice;
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
        $permission = Permission::get();

        return view('invoices.create',compact('permission'));
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

            'name' => 'required|unique:invoices,name',

            'permission' => 'required',

        ]);


        $invoice = Invoice::create(['name' => $request->input('name')]);

        $invoice->syncPermissions($request->input('permission'));


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

        $invoicePermissions = Permission::join("Invoice_has_permissions","Invoice_has_permissions.permission_id","=","permissions.id")

            ->where("Invoice_has_permissions.role_id",$id)

            ->get();


        return view('invoices.show',compact('invoice','InvoicePermissions'));
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

        $permission = Permission::get();

        $invoicePermissions = DB::table("Invoice_has_permissions")->where("Invoice_has_permissions.invoice_id",$id)

            ->pluck('Invoice_has_permissions.permission_id','Invoice_has_permissions.permission_id')

            ->all();


        return view('invoices.edit',compact('invoice','permission','invoicePermissions'));
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


        $invoice = Invoice::find($id);

        $invoice->name = $request->input('name');

        $invoice->save();


        $invoice->syncPermissions($request->input('permission'));


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
         DB::table("invoices")->where('id',$id)->delete();

        return redirect()->route('invoices.index')

                        ->with('success','Invoice deleted successfully');
    }
}
