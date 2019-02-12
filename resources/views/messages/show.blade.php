@extends('layouts.app')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show Messages</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('messages.index') }}"> Back</a>

            </div>

        </div>

    </div>


    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Ticket ID:</strong>

                {{ $message->ticket_id }}

            </div>

        </div>
         <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>User ID:</strong>

                {{ $message->user_id }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Message:</strong>

                {{ $message->message }}

            </div>

        </div>

    </div>

@endsection