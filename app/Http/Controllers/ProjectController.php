<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Spatie\Permission\Models\Permission;
use DB;

class ProjectController extends Controller
{
    function __construct()

    {

         $this->middleware('permission:Project-list');

         $this->middleware('permission:Project-create', ['only' => ['create','store']]);

         $this->middleware('permission:Project-edit', ['only' => ['edit','update']]);

         $this->middleware('permission:Project-delete', ['only' => ['destroy']]);

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $projects = Project::orderBy('id','DESC')->paginate(5);

        return view('projects.index',compact('projects'))

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

        return view('projects.create',compact('permission'));
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

             'name' => 'required',
             'customer_id' => 'required',
             'start_date' => 'required',
             'end_date' => 'required',
             'details' => 'required'

        ]);


        $project = Project::create([
            'name' => $request->input('name'),
            'customer_id' => $request->input('customer_id'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'details' => $request->input('details')]);

        return redirect()->route('projects.index')

                        ->with('success','project created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);

        return view('projects.show',compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);

        $permission = Permission::get();

        return view('projects.edit',compact('project','permission','projectPermissions'));
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
             'customer_id' => 'required',
             'start_date' => 'required',
             'end_date' => 'required',
             'details' => 'required'


        ]);


        $project = Project::find($id);

        $project->name = $request->input('name');
        $project->customer_id = $request->input('customer_id');
        $project->start_date = $request->input('start_date');
        $project->end_date = $request->input('end_date');
        $project->details = $request->input('details');

        $project->save();

        return redirect()->route('projects.index')

                        ->with('success','Project updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("projects")->where('id',$id)->delete();

        return redirect()->route('projects.index')

                        ->with('success','Project deleted successfully');
    }
}
