@extends('layouts.app')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Add New Tickets</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('tickets.index') }}"> Back</a>

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


    <form action="{{ route('tickets.store') }}" method="POST">

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

                    <strong>Customer:</strong>

                    <input type="text" name="customer_id" class="form-control" placeholder="Customer">

                </div>

            </div>
             <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Contact:</strong>

                    <input type="text" name="contact" class="form-control" placeholder="Contact">

                </div>

            </div>
             <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Department:</strong>

                    <input type="text" name="department" class="form-control" placeholder="Department">

                </div>

            </div>
             <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Priority:</strong>

                    <input type="text" name="priority" class="form-control" placeholder="Priority">

                </div>

            </div>

		    <div class="col-xs-12 col-sm-12 col-md-12">

		        <div class="form-group">

		            <strong>Detail:</strong>

		            <input type="text" class="form-control" name="details" placeholder="Detail">

		        </div>

		    </div>

		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

		            <button type="submit" class="btn btn-primary">Submit</button>

		    </div>

		</div>


    </form>


@endsection