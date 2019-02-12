<?php
namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use DB;

class ProductController extends Controller
{


    function __construct()

    {

         $this->middleware('permission:Product-list');

         $this->middleware('permission:Product-create', ['only' => ['create','store']]);

         $this->middleware('permission:Product-edit', ['only' => ['edit','update']]);

         $this->middleware('permission:Product-delete', ['only' => ['destroy']]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::orderBy('id','DESC')->paginate(5);

        return view('products.index',compact('products'))

            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $permission = Permission::get();

        return view('products.create');
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

         'product_name' => 'required',
         'purchase_price' => 'required',
         'sales_price' => 'required',
         'sales_price' => 'required',
         'product_code' => 'required',
         'tax' => 'required',
         'in_stock' => 'required',
         'details' => 'required'

        ]);


        $product = Product::create([
            'product_name' => $request->input('product_name'),
            'purchase_price' => $request->input('purchase_price'),
            'sales_price' => $request->input('sales_price'),
            'product_code' => $request->input('product_code'),
            'tax' => $request->input('tax'),
            'in_stock' => $request->input('in_stock'),
            'details' => $request->input('details')]);

        return redirect()->route('products.index')

                        ->with('success','product created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        // $permission = Permission::get();

        return view('products.edit',compact('product'));
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

         'product_name' => 'required',
         'purchase_price' => 'required',
         'sales_price' => 'required',
         'sales_price' => 'required',
         'product_code' => 'required',
         'tax' => 'required',
         'in_stock' => 'required',
         'details' => 'required'


        ]);


        $product = Product::find($id);

        $product->product_name = $request->input('product_name');
        $product->purchase_price = $request->input('purchase_price');
        $product->sales_price = $request->input('sales_price');
        $product->product_code = $request->input('product_code');
        $product->tax = $request->input('tax');
        $product->in_stock = $request->input('in_stock');
        $product->details = $request->input('details');
        

        $product->save();

        return redirect()->route('products.index')

                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("products")->where('id',$id)->delete();

        return redirect()->route('products.index')

                        ->with('success','Product deleted successfully');
    }
}
