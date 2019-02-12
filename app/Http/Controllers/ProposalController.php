<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proposal;
use Spatie\Permission\Models\Permission;
use DB;

class ProposalController extends Controller
{
    

    function __construct()

    {

         $this->middleware('permission:Proposal-list');

         $this->middleware('permission:Proposal-create', ['only' => ['create','store']]);

         $this->middleware('permission:Proposal-edit', ['only' => ['edit','update']]);

         $this->middleware('permission:Proposal-delete', ['only' => ['destroy']]);

    }/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         $proposals = Proposal::orderBy('id','DESC')->paginate(5);

        return view('proposals.index',compact('proposals'))

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

        return view('proposals.create',compact('permission'));
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
            'staff_id' => 'required',
            'status' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'details' => 'required'

        ]);


        $proposal = Proposal::create([
            'subject' => $request->input('subject'),
            'customer_id' => $request->input('customer_id'),
            'staff_id' => $request->input('staff_id'),
            'status' => $request->input('status'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'details' => $request->input('details')]);


        return redirect()->route('proposals.index')

                        ->with('success','proposal created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $proposal = Proposal::find($id);



        return view('proposals.show',compact('proposal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $proposal = Proposal::find($id);

        $permission = Permission::get();



        return view('proposals.edit',compact('proposal','permission','proposalPermissions'));
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
            'staff_id' => 'required',
            'status' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'details' => 'required'

        ]);


        $proposal = Proposal::find($id);

        $proposal->subject = $request->input('subject');
        $proposal->customer_id = $request->input('customer_id');
        $proposal->staff_id = $request->input('staff_id');
        $proposal->start_date = $request->input('start_date');
        $proposal->end_date = $request->input('end_date');
        $proposal->status = $request->input('status');
        $proposal->details = $request->input('details');

        $proposal->save();


        return redirect()->route('proposals.index')

                        ->with('success','Proposal updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("proposals")->where('id',$id)->delete();

        return redirect()->route('proposals.index')

                        ->with('success','Proposal deleted successfully');
    }
}
