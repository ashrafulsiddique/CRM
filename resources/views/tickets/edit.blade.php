@extends('layouts.app')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit Ticket</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('tickets.index') }}"> Back</a>

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


    <form action="{{ route('tickets.update',$ticket->id) }}" method="POST">

    	@csrf

        @method('PUT')


         <div class="row">

		    <div class="col-xs-12 col-sm-12 col-md-12">

		        <div class="form-group">

		            <strong>Subject:</strong>

		            <input type="text" name="subject" value="{{ $ticket->subject }}" class="form-control" placeholder="Subject">

		        </div>

		    </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Customer:</strong>

                    <input type="text" name="customer_id" value="{{ $ticket->customer_id }}" class="form-control" placeholder="Customer">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Contact:</strong>

                    <input type="text" name="contact" value="{{ $ticket->contact }}" class="form-control" placeholder="Contact">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Department:</strong>

                    <input type="text" name="department" value="{{ $ticket->department }}" class="form-control" placeholder="Department">

                </div>

            </div>

		    <div class="col-xs-12 col-sm-12 col-md-12">

		        <div class="form-group">

		            <strong>Priority:</strong>

		            <input class="form-control" name="priority" value="{{ $ticket->priority }}" placeholder="Priority">

		        </div>

		    </div>
             <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Details:</strong>

                    <textarea class="form-control"  name="details" placeholder="Details">{{ $ticket->details }}</textarea>

                </div>

            </div>

		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

		      <button type="submit" class="btn btn-primary">Submit</button>

		    </div>

		</div>


    </form>


@endsection