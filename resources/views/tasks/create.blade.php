@extends('layouts.app')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Add New Task</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('tasks.index') }}"> Back</a>

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


    <form action="{{ route('tasks.store') }}" method="POST">

    	@csrf


         <div class="row">

		    <div class="col-xs-12 col-sm-12 col-md-12">

		        <div class="form-group">

		            <strong>Relation Type:</strong>

		            <input type="text" name="type" class="form-control" placeholder="Relation Type">

		        </div>

		    </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Project:</strong>

                    <input type="text" name="project" class="form-control" placeholder="Project">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Name:</strong>

                    <input type="text" name="customer_id" class="form-control" placeholder="Name">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Start Date:</strong>

                    <input type="date" name="start_date" class="form-control" placeholder="Start Date">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Due Date:</strong>

                    <input type="date" name="due_date" class="form-control" placeholder="Due Date">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Assign Staff:</strong>

                    <input type="text" name="staff_id" class="form-control" placeholder="Assign Staff">

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

                    <strong>Status:</strong>

                    <input type="text" name="status" class="form-control" placeholder="Status">

                </div>

            </div>

		    <div class="col-xs-12 col-sm-12 col-md-12">

		        <div class="form-group">

		            <strong>Details:</strong>

		            <input type="text" class="form-control" name="details" placeholder="Details">

		        </div>

		    </div>

		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

		            <button type="submit" class="btn btn-primary">Submit</button>

		    </div>

		</div>


    </form>


@endsection