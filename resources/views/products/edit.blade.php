@extends('layouts.app')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit Product</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>

            </div>

        </div>

    </div>


    @if ($errors->any())

        <div class="alert alert-danger">

            <strong>Whoops!</strong> There were some problems with your input.<br><br>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif


    <form action="{{ route('products.update',$product->id) }}" method="POST">

    	@csrf

        @method('PUT')


         <div class="row">

		    <div class="col-xs-12 col-sm-12 col-md-12">

		        <div class="form-group">

		            <strong>Product Name:</strong>

		            <input type="text" name="product_name" value="{{ $product->product_name }}" class="form-control" placeholder="Product Name">

		        </div>

		    </div>
             <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Purchase Price:</strong>

                    <input type="text" name="purchase_price" value="{{ $product->purchase_price }}" class="form-control" placeholder="Purchase Price">

                </div>

            </div>
             <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Sales Price:</strong>

                    <input type="text" name="sales_price" value="{{ $product->sales_price }}" class="form-control" placeholder="Sales Price">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Product Code:</strong>

                    <input type="text" name="product_code" value="{{ $product->product_code }}" class="form-control" placeholder="Product Code">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Tax:</strong>

                    <input type="text" name="tax" value="{{ $product->tax }}" class="form-control" placeholder="Tax">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>In Stock:</strong>

                    <input type="text" name="in_stock" value="{{ $product->in_stock }}" class="form-control" placeholder="In Stock">

                </div>

            </div>

		    <div class="col-xs-12 col-sm-12 col-md-12">

		        <div class="form-group">

		            <strong>Details:</strong>

		            <textarea type="text" class="form-control" name="details" placeholder="Details">{{ $product->details }}
                    </textarea> 

		        </div>

		    </div>

		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

		      <button type="submit" class="btn btn-primary">Submit</button>

		    </div>

		</div>


    </form>


@endsection