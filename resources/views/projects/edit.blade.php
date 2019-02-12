@extends('layouts.app')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit Project</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('projects.index') }}"> Back</a>

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


    <form action="{{ route('projects.update',$project->id) }}" method="POST">

    	@csrf

        @method('PUT')


         <div class="row">

		    <div class="col-xs-12 col-sm-12 col-md-12">

		        <div class="form-group">

		            <strong>Name:</strong>

		            <input type="text" name="name" value="{{ $project->name }}" class="form-control" placeholder="Name">

		        </div>

		    </div>
              <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Customer:</strong>

                    <input type="text" class="form-control" name="customer_id" value="{{ $project->customer_id }}" placeholder="Customer">

                </div>

            </div>
              <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Start Date:</strong>

                    <input type="date"class="form-control" name="start_date" value="{{ $project->start_date }}" placeholder="Start Date">

                </div>

            </div>
              <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>End Date:</strong>

                    <input type="date" class="form-control"  name="end_date" value="{{ $project->end_date }}" placeholder="End Date">

                </div>

            </div>

		    <div class="col-xs-12 col-sm-12 col-md-12">

		        <div class="form-group">

		            <strong>Details:</strong>

		            <textarea type="text" class="form-control" name="details" placeholder="Details">{{ $project->details }}
                    </textarea> 

		        </div>

		    </div>

		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

		      <button type="submit" class="btn btn-primary">Submit</button>

		    </div>

		</div>


    </form>


@endsection