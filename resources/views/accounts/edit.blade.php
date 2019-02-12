@extends('layouts.app')


@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Update Account</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('accounts.index') }}"> Back</a>
            </div>
        </div>
    </div>


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


    <form action="{{ route('accounts.update', $account->id) }}" method="POST">

        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Account Name:</strong>
                    <input type="text" name="account_name" value="{{$account->account_name}}" class="form-control" >
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Account Number:</strong>
                    <input type="number" name="account_number" value="{{$account->account_no}}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Bank Name:</strong>
                    <input type="text" name="bank_name" value="{{$account->bank_name}}" class="form-control" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Branch Name:</strong>
                    <input type="text" name="branch_name" value="{{$account->branch}}" class="form-control" >
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Account Type:</strong>
                    <select name="account_type" class="form-control" id="gender">
                        <option value="Savings" @if ($account->type == "Savings" ) {{ 'selected' }} @endif>Savings</option>
                        <option value="Checking" @if ($account->type == "Checking" ) {{ 'selected' }} @endif>Checking</option>
                        <option value="Current" @if ($account->type == "Current" ) {{ 'selected' }} @endif>Current</option>
                    </select>
                </div>
            </div>
       
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Swift Code:</strong>
                    <input type="text" name="swift_code" value="{{$account->swift_code}}" class="form-control">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>


@endsection