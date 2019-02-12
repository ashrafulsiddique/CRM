<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use DB;
use App\Message;

class MessageController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    function __construct()

    {

         $this->middleware('permission:Message-list');

         $this->middleware('permission:Message-create', ['only' => ['create','store']]);

         $this->middleware('permission:Message-edit', ['only' => ['edit','update']]);

         $this->middleware('permission:Message-delete', ['only' => ['destroy']]);

    }


    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(Request $request)

    {

        $messages = Message::orderBy('id','DESC')->paginate(5);

        return view('messages.index',compact('messages'))

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

        return view('messages.create',compact('permission'));

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

            'ticket_id' => 'required',
            'user_id' => 'required',
            'message' => 'required'
            
            
            

        ]);


        $message = Message::create(['ticket_id' => $request->input('ticket_id'),'user_id' => $request->input('user_id'),'message' => $request->input('message')]);


        return redirect()->route('messages.index')

                        ->with('success','Message created successfully');

    }

    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        $message = Message::find($id);

        return view('messages.show',compact('message'));

    }


    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {

        $message = Message::find($id);

        $permission = Permission::get();


        return view('messages.edit',compact('message','permission','messagePermissions'));

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
            'ticket_id' => 'required',
            'user_id' => 'required',
            'message' => 'required'

        ]);


        $message = Message::find($id);

        $message->ticket_id = $request->input('ticket_id');
        $message->user_id = $request->input('user_id');
        $message->message = $request->input('message');
        
        


        $message->save();

        return redirect()->route('messages.index')

                        ->with('success','Message updated successfully');

    }

    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

        DB::table("customer_message")->where('id',$id)->delete();

        return redirect()->route('messages.index')

                        ->with('success','Message deleted successfully');

    }

}