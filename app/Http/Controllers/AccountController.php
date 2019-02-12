<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Account;
use Spatie\Permission\Models\Permission;
use Auth;

use DB;


class AccountController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    function __construct()

    {
         $this->middleware('permission:Account-list');
         $this->middleware('permission:Account-create', ['only' => ['create','store']]);
         $this->middleware('permission:Account-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:Account-delete', ['only' => ['destroy']]);
    }


    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(Request $request)

    {

        $Accounts = Account::orderBy('id','DESC')->paginate(5);

        return view('accounts.index',compact('Accounts'))

            ->with('i', ($request->input('page', 1) - 1) * 5);

    }


    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {
        return view('accounts.create');
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

            'account_name' => 'required|unique:accounts,account_name',
            'account_number' => 'required',
            'bank_name' => 'required',
            'branch_name' => 'required',
            'account_type' => 'required',
            'swift_code' => 'required',
        ]);

        $account = new Account;
        $account->user_id = Auth::user()->id;
        $account->account_name = $request->input('account_name');
        $account->account_no = $request->input('account_number');
        $account->bank_name = $request->input('bank_name');
        $account->branch = $request->input('branch_name');
        $account->type = $request->input('account_type');
        $account->swift_code = $request->input('swift_code');
        $account->save();

         return redirect()->route('accounts.index')
                        ->with('success','Account created successfully');

    }

    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {
        
        $Accounts = Account::find($id);

        return view('Accounts.show',compact('Accounts'));
    }


    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {

        $account = Account::find($id);

        return view('accounts.edit',compact('account'));

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

             'account_name' => 'required',
             'account_number' => 'required',
             'bank_name' => 'required',
             'branch_name' => 'required',
             'account_type' => 'required',
             'swift_code' => 'required',
         ]);

        $account = Account::find($id);
        $account->user_id = Auth::user()->id;
        $account->account_name = $request->input('account_name');
        $account->account_no = $request->input('account_number');
        $account->bank_name = $request->input('bank_name');
        $account->branch = $request->input('branch_name');
        $account->type = $request->input('account_type');
        $account->swift_code = $request->input('swift_code');
        $account->save();

        return redirect()->route('accounts.index')
                        ->with('success','Account updated successfully');

    }

    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)
    {
        $account = Account::find($id);
        $account->delete();
        
        return redirect()->route('accounts.index')
                        ->with('success','Account deleted successfully');

    }

}