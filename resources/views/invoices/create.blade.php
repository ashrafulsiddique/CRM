@extends('layouts.app')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Add New Invoice</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('invoices.index') }}"> Back</a>

            </div>

        </div>

    </div>

<br>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong>There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('invoices.store') }}" method="POST">

        @csrf
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Choose Customer:</strong>
                    <select name="customer" class="form-control">
                        <option style="display:none;"></option>
                        @foreach ($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Serial Number:</strong>
                    <input type="number" name="ser_no" class="form-control" placeholder="Serial Number">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Invoice Number:</strong>
                    <input type="number" name="inv_no" class="form-control" placeholder="Invoice Number">
                </div>
            </div>
         
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date of Issue:</strong>
                    <input type="date" name="issue_date" class="form-control" placeholder="Date of Issue">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">  
                    <strong>Due Note:</strong>
                    <input type="text" name="due_note" class="form-control" placeholder="Due Note">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">  
                    <strong>Due Date:</strong>
                    <input type="date" name="due_date" class="form-control" placeholder="Due Date">
                </div>
            </div>
      
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </div>

    </form>
    
@endsection