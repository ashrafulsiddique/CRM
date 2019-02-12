@extends('layouts.app')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit Proposals</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('proposals.index') }}"> Back</a>

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


    <form action="{{ route('proposals.update',$proposal->id) }}" method="POST">

    	@csrf

        @method('PUT')


         <div class="row">

		    <div class="col-xs-12 col-sm-12 col-md-12">

		        <div class="form-group">

		            <strong>Subject:</strong>

		            <input type="text" name="subject" value="{{ $proposal->subject }}" class="form-control" placeholder="Subject">

		        </div>

		    </div>
              <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Customer:</strong>

                    <input type="text" name="customer_id" value="{{ $proposal->customer_id }}" class="form-control" placeholder="Customer">

                </div>

            </div>
              <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Assign Staff:</strong>

                    <input type="text" name="staff_id" value="{{ $proposal->staff_id }}" class="form-control" placeholder="Assign Staff">

                </div>

            </div>
              <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Status:</strong>

                    <input type="text" name="status" value="{{ $proposal->status }}" class="form-control" placeholder="Status">

                </div>

            </div>
              <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Start Date:</strong>

                    <input type="text" name="start_date" value="{{ $proposal->start_date }}" class="form-control" placeholder="Start Date">

                </div>

            </div>
              <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>End Date:</strong>

                    <input type="text" name="end_date" value="{{ $proposal->end_date }}" class="form-control" placeholder="End Date">

                </div>

            </div>

		    <div class="col-xs-12 col-sm-12 col-md-12">

		        <div class="form-group">

		            <strong>Details:</strong>

		            <textarea class="form-control" style="height:150px" name="details" placeholder="Details">{{ $proposal->details }}</textarea>

		        </div>

		    </div>

		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

		      <button type="submit" class="btn btn-primary">Submit</button>

		    </div>

		</div>


    </form>


@endsection