@extends('layouts.app')


@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Update Invoice</h2>
            </div>

            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('invoices.index') }}">Back</a>
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


    <form action="{{ route('invoices.update',$invoice->id) }}" method="POST">
        @csrf
        @method('PUT')
         <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="customer">Choose Customer: </label>
                            <select name="customer" class="form-control">
                        @foreach ($users as $user)
                                @if(old('customer',$invoice->customer_id) == $user->id )
                                <option value="{{ $user->id }}" selected >{{ $user->name }}</option>
                        @else
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endif
                                @endforeach
                            </select>   
                        </div>
                    </div>
        
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Serial Number:</strong>
                            <input type="number" name="ser_no" value="{{$invoice->serial_no}}" class="form-control" >
                        </div>
                    </div>
        
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Invoice Number:</strong>
                            <input type="number" name="inv_no" value="{{$invoice->invoice_no}}" class="form-control" >
                        </div>
                    </div>
                 
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Date of Issue:</strong>
                            <input type="date" name="issue_date" value="{{$invoice->issue_date}}" class="form-control" >
                        </div>
                    </div>
        
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">  
                            <strong>Due Note:</strong>
                            <input type="text" name="due_note" value="{{$invoice->due_note}}" class="form-control" >
                        </div>
                    </div>
        
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">  
                            <strong>Due Date:</strong>
                            <input type="date" name="due_date" value="{{$invoice->due_date}}" class="form-control" >
                        </div>
                    </div>
              
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
        
                </div>


    </form>


@endsection