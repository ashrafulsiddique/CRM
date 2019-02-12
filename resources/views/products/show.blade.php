@extends('layouts.app')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Show Products</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>

            </div>

        </div>

    </div>


    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Product Name:</strong>

                {{ $product->product_name }}

            </div>

        </div>
          <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Purchase Price:</strong>

                {{ $product->purchase_price }}

            </div>

        </div>
          <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Sales Price:</strong>

                {{ $product->sales_price }}

            </div>

        </div>
          <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Product Code:</strong>

                {{ $product->product_code }}

            </div>

        </div>
          <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Tax:</strong>

                {{ $product->tax }}

            </div>

        </div>
          <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>In Stock:</strong>

                {{ $product->in_stock }}

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Details:</strong>

                {{ $product->details }}

            </div>

        </div>

    </div>

@endsection