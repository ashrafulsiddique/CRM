@extends('layouts.app')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit Task</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('tasks.index') }}"> Back</a>

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


    <form action="{{ route('tasks.update',$task->id) }}" method="POST">

    	@csrf

        @method('PUT')


         <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Relation Type:</strong>

                    <input class="form-control" name="type" placeholder="Relation Type" value="{{ $task->type }}">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Project:</strong>

                    <input class="form-control" name="project" placeholder="Project" value="{{ $task->project }}">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Name:</strong>

                    <input class="form-control" name="customer_id" placeholder="Name" value="{{ $task->customer_id }}">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Start Date:</strong>

                    <input class="form-control" name="start_date" placeholder="Start Date" value="{{ $task->start_date }}">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Due Date:</strong>

                    <input class="form-control" name="due_date" placeholder="Due Date" value="{{ $task->due_date }}">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Assign Staff:</strong>

                    <input class="form-control" name="staff_id" placeholder="Assign Staff" value="{{ $task->staff_id }}">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Priority:</strong>

                    <input class="form-control" name="priority" placeholder="Priority" value="{{ $task->priority }}">

                </div>

            </div>

		    <div class="col-xs-12 col-sm-12 col-md-12">

		        <div class="form-group">

		            <strong>Status:</strong>

		            <input type="text" name="status" value="{{ $task->status }}" class="form-control" placeholder="Status">

		        </div>

		    </div>

		    <div class="col-xs-12 col-sm-12 col-md-12">

		        <div class="form-group">

		            <strong>Details:</strong>

		            <input class="form-control" name="details" placeholder="Details" value="{{ $task->details }}">

		        </div>

		    </div>

		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

		      <button type="submit" class="btn btn-primary">Submit</button>

		    </div>

		</div>


    </form>


@endsection