@extends('layouts.app')


@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Order</h2>
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


    <form action="{{ route('orders.store') }}" method="POST">

        @csrf
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Subject:</strong>
                    <input type="text" name="subject" class="form-control" placeholder="Subject">
                </div>
            </div>

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
                    <strong>Date of Issue:</strong>
                    <input type="date" name="issue_date" class="form-control" placeholder="Date of issue">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Assign Staff:</strong>
                    <select name="staff" class="form-control">
                        <option style="display:none;"></option>
                        @foreach ($staffs as $staff)
                            <option value="{{$staff->id}}">{{$staff->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">  
                    <strong>Status:</strong>
                    <input type="text" name="status" class="form-control" placeholder="Status">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Open Till:</strong>
                    <input type="date" name="open_till" class="form-control" placeholder="Open till">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">  
                    <strong>Details:</strong>
                    <textarea rows="4" class="form-control" name="details" placeholder="Details"></textarea>
                </div>
            </div>
  
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </div>

    </form>
    
@endsection