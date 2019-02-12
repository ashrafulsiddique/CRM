@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Accounts</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('accounts.index') }}"> Back</a>
        </div>
    </div>
</div>
<br>

<div class="row">
    
     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Customer Name:</strong>
            {{ $Accounts->user->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Account Name:</strong>
            {{ $Accounts->account_name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Account Number:</strong>
            {{ $Accounts->account_no }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Bank Name:</strong>
            {{ $Accounts->bank_name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Branch Name:</strong>
            {{ $Accounts->branch }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Branch Name:</strong>
            {{ $Accounts->type }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Swift Code:</strong>
            {{ $Accounts->swift_code }}
        </div>
    </div>
</div>
@endsection