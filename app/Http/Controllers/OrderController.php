<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\User;
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
        // $users= User::all();
        $users=User::whereHas('roles', function($q){$q->whereIn('roles.name', ['customer']);})->get();
        $staffs=User::whereHas('roles', function($q){$q->whereIn('roles.name', ['staff']);})->get();
        
        return view('orders.create',compact('users', 'staffs'));
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
            'subject' => 'required',
            'customer' => 'required',
            'issue_date' => 'required',
            'staff' => 'required',
            'status' => 'required',
            'open_till' => 'required',
            'details' => 'required',
    ]);

        $orders = new Order;
        $orders->subject = $request->input('subject');
        $orders->customer_id = $request->input('customer');
        $orders->issue_date = $request->input('issue_date');
        $orders->staff_id = $request->input('staff');
        $orders->status = $request->input('status');
        $orders->open_till = $request->input('open_till');
        $orders->details = $request->input('details');   
        $orders->save();

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
        
        return view('orders.show',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orders = Order::find($id);
        $users=User::whereHas('roles', function($q){$q->whereIn('roles.name', ['customer']);})->get();
        $staffs=User::whereHas('roles', function($q){$q->whereIn('roles.name', ['staff']);})->get();

        return view('orders.edit',compact('orders','users', 'staffs'));
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
            'subject' => 'required',
            'customer' => 'required',
            'issue_date' => 'required',
            'staff' => 'required',
            'status' => 'required',
            'open_till' => 'required',
            'details' => 'required',
    ]);

        $orders = Order::find($id);
        $orders->subject = $request->input('subject');
        $orders->customer_id = $request->input('customer');
        $orders->issue_date = $request->input('issue_date');
        $orders->staff_id = $request->input('staff');
        $orders->status = $request->input('status');
        $orders->open_till = $request->input('open_till');
        $orders->details = $request->input('details');   
        $orders->save();

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
        $orders = Order::find($id);
        $orders->delete();

        return redirect()->route('orders.index')
                ->with('success','Orders deleted successfully');
    }
}
