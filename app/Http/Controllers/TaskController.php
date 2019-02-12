<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use DB;
use App\Task;

class TaskController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    function __construct()

    {

         $this->middleware('permission:Task-list');

         $this->middleware('permission:Task-create', ['only' => ['create','store']]);

         $this->middleware('permission:Task-edit', ['only' => ['edit','update']]);

         $this->middleware('permission:Task-delete', ['only' => ['destroy']]);

    }


    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(Request $request)

    {

        $tasks = Task::orderBy('id','DESC')->paginate(5);

        return view('tasks.index',compact('tasks'))

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

        return view('tasks.create',compact('permission'));

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

            'type' => 'required',
            'project' => 'required',
            'customer_id' => 'required',
            'start_date' => 'required',
            'due_date' => 'required',
            'staff_id' => 'required',
            'priority' => 'required',
            'status' => 'required',
            'details' => 'required'
            
            

        ]);


        $task = Task::create(['type' => $request->input('type'),'project' => $request->input('project'),'customer_id' => $request->input('customer_id'),'start_date' => $request->input('start_date'),'due_date' => $request->input('due_date'),'staff_id' => $request->input('staff_id'),'priority' => $request->input('priority'),'status' => $request->input('status'),'details' => $request->input('details')]);


        return redirect()->route('tasks.index')

                        ->with('success','Task created successfully');

    }

    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        $task = Task::find($id);

        return view('tasks.show',compact('task'));

    }


    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {

        $task = Task::find($id);

        $permission = Permission::get();


        return view('tasks.edit',compact('task','permission','taskPermissions'));

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
            'type' => 'required',
            'project' => 'required',
            'customer_id' => 'required',
            'start_date' => 'required',
            'due_date' => 'required',
            'staff_id' => 'required',
            'priority' => 'required',
            'status' => 'required',
            'details' => 'required'

        ]);


        $task = Task::find($id);

        $task->type = $request->input('type');
        $task->project = $request->input('project');
        $task->customer_id = $request->input('customer_id');
        $task->start_date = $request->input('start_date');
        $task->due_date = $request->input('due_date');
        $task->staff_id = $request->input('staff_id');
        $task->priority = $request->input('priority');
        $task->status = $request->input('status');
        $task->details = $request->input('details');
        


        $task->save();

        return redirect()->route('tasks.index')

                        ->with('success','Task updated successfully');

    }

    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

        DB::table("tasks")->where('id',$id)->delete();

        return redirect()->route('tasks.index')

                        ->with('success','Task deleted successfully');

    }

}