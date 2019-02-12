@extends('layouts.app')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Products</h2>

            </div>

            <div class="pull-right">

                @can('Product-create')

                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Products</a>

                @endcan

            </div>

        </div>

    </div>


    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif


    <table class="table table-bordered">

        <tr>

            <th>Product Name</th>
            <th>Purchase Price</th>
            <th>Sales Price</th>
            <th>Product Code</th>
            <th>Tax</th>
            <th>In Stock</th>
            <th>Details</th>

            <th width="280px">Action</th>

        </tr>

	    @foreach ($products as $product)

	    <tr>


            <td>{{ $product->product_name }}</td>
            <td>{{ $product->purchase_price }}</td>
            <td>{{ $product->sales_price }}</td>
            <td>{{ $product->product_code }}</td>
            <td>{{ $product->tax }}</td>
            <td>{{ $product->in_stock }}</td>
	        <td>{{ $product->details }}</td>


	        <td>

                <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>

                    @can('Product-edit')

                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>

                    @endcan


                    @csrf

                    @method('DELETE')

                    @can('Product-delete')

                    <button type="submit" class="btn btn-danger">Delete</button>

                    @endcan

                </form>

	        </td>

	    </tr>

	    @endforeach

    </table>


    {!! $products->links() !!}


@endsection