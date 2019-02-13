@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Show Invoice</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('invoices.index') }}"> Back</a>
        </div>
    </div>
</div>
<br>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Customer:</strong>
            {{ $invoice->customer->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Serial Number:</strong>
            {{ $invoice->serial_no }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Invoice Number:</strong>
            {{ $invoice->invoice_no }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Date of Issue:</strong>
            {{ $invoice->issue_date }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Due Note:</strong>
            {{ $invoice->due_note }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Due Date:</strong>
            {{ $invoice->due_date }}
        </div>
    </div>
 
</div>
@endsection