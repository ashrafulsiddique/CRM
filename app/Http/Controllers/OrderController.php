<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Spatie\Permission\Models\Permission;

class OrderController extends Controller
{


         function __construct()

    {

         $this->middleware('permission:Order-list');

         $this->middleware('permission:Order-create', ['only' => ['create','store']]);

         $this->middleware('permission:Order-edit', ['only' => ['edit','update']]);

         $this->middleware('permission:Order-delete', ['only' => ['destroy']]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $orders = Order::orderBy('id','DESC')->paginate(5);

        return view('orders.index',compact('orders'))

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

        return view('orders.create',compact('permission'));
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

            'name' => 'required|unique:orders,name',

            'permission' => 'required',

        ]);


        $order = Order::create(['name' => $request->input('name')]);

        $order->syncPermissions($request->input('permission'));


        return redirect()->route('orders.index')

                        ->with('success','order created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::find($id);

        $orderPermissions = Permission::join("Order_has_permissions","Order_has_permissions.permission_id","=","permissions.id")

            ->where("Order_has_permissions.order_id",$id)

            ->get();


        return view('orders.show',compact('order','OrderPermissions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::find($id);

        $permission = Permission::get();

        $orderPermissions = DB::table("Order_has_permissions")->where("Order_has_permissions.invoice_id",$id)

            ->pluck('Order_has_permissions.permission_id','Order_has_permissions.permission_id')

            ->all();


        return view('orders.edit',compact('order','permission','orderPermissions'));
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


        $order = Order::find($id);

        $order->name = $request->input('name');

        $order->save();


        $order->syncPermissions($request->input('permission'));


        return redirect()->route('orders.index')

                        ->with('success','Order updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      DB::table("orders")->where('id',$id)->delete();

        return redirect()->route('orders.index')

                        ->with('success','Orders deleted successfully');
    }
}
