<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Spatie\Permission\Models\Customer;

use Spatie\Permission\Models\Permission;

use DB;


class CustomerController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    function __construct()

    {

         $this->middleware('permission:Customer-list');

         $this->middleware('permission:Customer-create', ['only' => ['create','store']]);

         $this->middleware('permission:Customer-edit', ['only' => ['edit','update']]);

         $this->middleware('permission:Customer-delete', ['only' => ['destroy']]);

    }


    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(Request $request)

    {

        $Customers = Customer::CustomerBy('id','DESC')->paginate(5);

        return view('Customers.index',compact('Customers'))

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

        return view('Customers.create',compact('permission'));

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

            'name' => 'required|unique:Customers,name',

            'permission' => 'required',

        ]);


        $Customer = Customer::create(['name' => $request->input('name')]);

        $Customer->syncPermissions($request->input('permission'));


        return redirect()->route('Customers.index')

                        ->with('success','Customer created successfully');

    }

    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        $Customer = Customer::find($id);

        $CustomerPermissions = Permission::join("Customer_has_permissions","Customer_has_permissions.permission_id","=","permissions.id")

            ->where("Customer_has_permissions.Customer_id",$id)

            ->get();


        return view('Customers.show',compact('Customer','CustomerPermissions'));

    }


    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {

        $Customer = Customer::find($id);

        $permission = Permission::get();

        $CustomerPermissions = DB::table("Customer_has_permissions")->where("Customer_has_permissions.Customer_id",$id)

            ->pluck('Customer_has_permissions.permission_id','Customer_has_permissions.permission_id')

            ->all();


        return view('Customers.edit',compact('Customer','permission','CustomerPermissions'));

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


        $Customer = Customer::find($id);

        $Customer->name = $request->input('name');

        $Customer->save();


        $Customer->syncPermissions($request->input('permission'));


        return redirect()->route('Customers.index')

                        ->with('success','Customer updated successfully');

    }

    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

        DB::table("Customers")->where('id',$id)->delete();

        return redirect()->route('Customers.index')

                        ->with('success','Customer deleted successfully');

    }

}