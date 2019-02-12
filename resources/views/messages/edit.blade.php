@extends('layouts.app')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit Message</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('messages.index') }}"> Back</a>

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


    <form action="{{ route('messages.update',$message->id) }}" method="POST">

    	@csrf

        @method('PUT')


         <div class="row">

		    <div class="col-xs-12 col-sm-12 col-md-12">

		        <div class="form-group">

		            <strong>Ticket ID:</strong>

		            <input type="id" name="ticket_id" value="{{ $message->ticket_id }}" class="form-control" placeholder="Ticket ID">

		        </div>

		    </div>

		     <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>User ID:</strong>

                    <input type="id" name="user_id" value="{{ $message->user_id }}" class="form-control" placeholder="User ID">

                </div>

            </div>
             <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Message:</strong>

                    <input type="text" name="message" value="{{ $message->message }}" class="form-control" placeholder="Message">

                </div>

            </div>


		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

		      <button type="submit" class="btn btn-primary">Submit</button>

		    </div>

		</div>


    </form>


@endsection