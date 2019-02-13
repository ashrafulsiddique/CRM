@extends('layouts.app')


@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Update Order</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('orders.index') }}"> Back</a>
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


    <form action="{{ route('orders.update', $orders->id) }}" method="POST">

        @csrf
        @method('PUT')
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Subject:</strong>
                    <input type="text" name="subject" value="{{$orders->subject}}" value="" class="form-control">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="customer">Choose Customer: </label>
                    <select name="customer" class="form-control">
                @foreach ($users as $user)
                        @if(old('customer',$orders->customer_id) == $user->id )
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
                    <strong>Date of Issue:</strong>
                    <input type="date" name="issue_date" value="{{$orders->issue_date}}" class="form-control">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Assign Staff:</strong>
                    <select name="staff" class="form-control">
                        @foreach ($staffs as $staff)
                            @if(old('staff',$orders->staff_id) == $staff->id )
                                <option value="{{ $staff->id }}" selected >{{ $staff->name }}</option>
                            @else
                                <option value="{{ $staff->id }}">{{ $staff->name }}</option>
                            @endif
                        @endforeach
                    </select> 
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">  
                    <strong>Status:</strong>
                    <input type="text" name="status" value="{{$orders->status}}" class="form-control">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Open Till:</strong>
                    <input type="date" name="open_till" value="{{$orders->open_till}}" class="form-control">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">  
                    <strong>Details:</strong>
                    <textarea rows="4" class="form-control" name="details" placeholder="Details">{{$orders->details}}</textarea>
                </div>
            </div>
  
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </div>

    </form>
    
@endsection