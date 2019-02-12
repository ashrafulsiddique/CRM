<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Spatie\Permission\Models\Permission;

use DB;
use App\Ticket;

class TicketController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    function __construct()

    {

         $this->middleware('permission:Ticket-list');

         $this->middleware('permission:Ticket-create', ['only' => ['create','store']]);

         $this->middleware('permission:Ticket-edit', ['only' => ['edit','update']]);

         $this->middleware('permission:Ticket-delete', ['only' => ['destroy']]);

    }


    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(Request $request)

    {

        $tickets = Ticket::orderBy('id','DESC')->paginate(5);

        return view('tickets.index',compact('tickets'))

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

        return view('tickets.create',compact('permission'));

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
           'customer_id' => 'required',
           'contact' => 'required',
           'department' => 'required',
           'priority' => 'required',
           'details' => 'required'

        ]);


        $ticket = Ticket::create([
            'subject' => $request->input('subject'),
            'customer_id' => $request->input('customer_id'),
            'contact' => $request->input('contact'),
            'department' => $request->input('department'),
            'priority' => $request->input('priority'),
            'details' => $request->input('details')]);



        return redirect()->route('tickets.index')

                        ->with('success','Ticket created successfully');

    }

    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        $ticket = Ticket::find($id);

        return view('tickets.show',compact('ticket'));

    }


    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {

        $ticket = Ticket::find($id);

        $permission = Permission::get();

        return view('tickets.edit',compact('ticket','permission','ticketPermissions'));

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
           'customer_id' => 'required',
           'contact' => 'required',
           'department' => 'required',
           'priority' => 'required',
           'details' => 'required'

        ]);


        $ticket = Ticket::find($id);

        $ticket->subject = $request->input('subject');
        $ticket->customer_id = $request->input('customer_id');
        $ticket->contact = $request->input('contact');
        $ticket->department = $request->input('department');
        $ticket->priority = $request->input('priority');
        $ticket->details = $request->input('details');

        $ticket->save();




        return redirect()->route('tickets.index')

                        ->with('success','Ticket updated successfully');

    }

    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

        DB::table("tickets")->where('id',$id)->delete();

        return redirect()->route('tickets.index')

                        ->with('success','Ticket deleted successfully');

    }

}