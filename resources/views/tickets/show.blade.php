@extends('layouts.app')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Show Tickets</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('tickets.index') }}"> Back</a>

            </div>

        </div>

    </div>


    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Subject:</strong>

                {{ $ticket->subject }}

            </div>

        </div>
                <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Customer:</strong>

                {{ $ticket->customer_id }}

            </div>

        </div>
                <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Contact:</strong>

                {{ $ticket->contact }}

            </div>

        </div>
                <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Department:</strong>

                {{ $ticket->department }}

            </div>

        </div>
                <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Priority:</strong>

                {{ $ticket->priority }}

            </div>

        </div>
                
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Details:</strong>

                {{ $ticket->details }}

            </div>

        </div>

    </div>

@endsection