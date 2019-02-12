<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lead;
use App\User;
use Spatie\Permission\Models\Permission;

class LeadController extends Controller
{

     function __construct()

    {
         $this->middleware('permission:Lead-list');
         $this->middleware('permission:Lead-create', ['only' => ['create','store']]);
         $this->middleware('permission:Lead-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:Lead-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $leads = Lead::orderBy('id','DESC')->paginate(5);

        return view('leads.index',compact('leads'))
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
            $staffs=User::whereHas('roles', function($q){$q->whereIn('roles.name', ['staff']);})->get();


        return view('leads.create',compact('staffs'));
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
                'name' => 'required',
                'com_name' => 'required',
                'assignrd' => 'required',
                'status' => 'required',
                'source' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'customer_web' => 'required',
                'country' => 'required',
                'state' => 'required',
                'city' => 'required',
                'zip' => 'required',
                'address' => 'required',
                'description' => 'required',
                'con_date' => 'required',
                'tags' => 'required',
                'type' => 'required',
        ]);

        $lead = new Lead;
        $lead->title = $request->input('title');
        $lead->name = $request->input('name');
        $lead->company_name = $request->input('com_name');
        $lead->user_id = $request->input('assignrd');
        $lead->status = $request->input('status');
        $lead->source = $request->input('source');
        $lead->phone = $request->input('phone');
        $lead->email = $request->input('email');
        $lead->customer_web = $request->input('customer_web');
        $lead->country = $request->input('country');
        $lead->state = $request->input('state');
        $lead->city = $request->input('city');
        $lead->zip = $request->input('zip');
        $lead->address = $request->input('address');
        $lead->description = $request->input('description');
        $lead->date_contacted = $request->input('con_date');
        $lead->lead_tags = $request->input('tags');
        $lead->lead_type = $request->input('type');       
        $lead->save();

        return redirect()->route('leads.index')
                        ->with('success','Lead created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lead = Lead::find($id);
 
        return view('leads.show',compact('lead'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $users= User::all();
        $staffs=User::whereHas('roles', function($q){$q->whereIn('roles.name', ['staff']);})->get();
        $lead = Lead::find($id);

        return view('leads.edit',compact('staffs', 'lead'));
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
            'name' => 'required',
            'com_name' => 'required',
            'assignrd' => 'required',
            'status' => 'required',
            'source' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'customer_web' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'zip' => 'required',
            'address' => 'required',
            'description' => 'required',
            'con_date' => 'required',
            'tags' => 'required',
            'type' => 'required',
    ]);

    $lead = Lead::find($id);
    $lead->title = $request->input('title');
    $lead->name = $request->input('name');
    $lead->company_name = $request->input('com_name');
    $lead->user_id = $request->input('assignrd');
    $lead->status = $request->input('status');
    $lead->source = $request->input('source');
    $lead->phone = $request->input('phone');
    $lead->email = $request->input('email');
    $lead->customer_web = $request->input('customer_web');
    $lead->country = $request->input('country');
    $lead->state = $request->input('state');
    $lead->city = $request->input('city');
    $lead->zip = $request->input('zip');
    $lead->address = $request->input('address');
    $lead->description = $request->input('description');
    $lead->date_contacted = $request->input('con_date');
    $lead->lead_tags = $request->input('tags');
    $lead->lead_type = $request->input('type');       
    $lead->save();

        return redirect()->route('leads.index')
                       ->with('success','Lead updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lead = Lead::find($id);
        $lead->delete();
        
        return redirect()->route('leads.index')
                        ->with('success','lead deleted successfully');
    }
}
