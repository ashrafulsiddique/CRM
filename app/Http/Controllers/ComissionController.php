<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Spatie\Permission\Models\Comission;

use Spatie\Permission\Models\Permission;

use DB;


class ComissionController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    function __construct()

    {

         $this->middleware('permission:Comission-list');

         $this->middleware('permission:Comission-create', ['only' => ['create','store']]);

         $this->middleware('permission:Comission-edit', ['only' => ['edit','update']]);

         $this->middleware('permission:Comission-delete', ['only' => ['destroy']]);

    }


    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(Request $request)

    {

        $Comissions = Comission::ComissionBy('id','DESC')->paginate(5);

        return view('Comissions.index',compact('Comissions'))

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

        return view('Comissions.create',compact('permission'));

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

            'name' => 'required|unique:Comissions,name',

            'permission' => 'required',

        ]);


        $Comission = Comission::create(['name' => $request->input('name')]);

        $Comission->syncPermissions($request->input('permission'));


        return redirect()->route('Comissions.index')

                        ->with('success','Comission created successfully');

    }

    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        $Comission = Comission::find($id);

        $ComissionPermissions = Permission::join("Comission_has_permissions","Comission_has_permissions.permission_id","=","permissions.id")

            ->where("Comission_has_permissions.Comission_id",$id)

            ->get();


        return view('Comissions.show',compact('Comission','ComissionPermissions'));

    }


    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {

        $Comission = Comission::find($id);

        $permission = Permission::get();

        $ComissionPermissions = DB::table("Comission_has_permissions")->where("Comission_has_permissions.Comission_id",$id)

            ->pluck('Comission_has_permissions.permission_id','Comission_has_permissions.permission_id')

            ->all();


        return view('Comissions.edit',compact('Comission','permission','ComissionPermissions'));

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


        $Comission = Comission::find($id);

        $Comission->name = $request->input('name');

        $Comission->save();


        $Comission->syncPermissions($request->input('permission'));


        return redirect()->route('Comissions.index')

                        ->with('success','Comission updated successfully');

    }

    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

        DB::table("Comissions")->where('id',$id)->delete();

        return redirect()->route('Comissions.index')

                        ->with('success','Comission deleted successfully');

    }

}