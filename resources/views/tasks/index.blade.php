@extends('layouts.app')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Task</h2>

            </div>

            <div class="pull-right">

                @can('Task-create')

                <a class="btn btn-success" href="{{ route('tasks.create') }}"> Create New Task</a>

                @endcan

            </div>

        </div>

    </div>


    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif


    <table class="table table-bordered">

        <tr>

            <th>Relation Type</th>
            <th>Project</th>
            <th>Name</th>
            <th>Start Date</th>
            <th>Due Date</th>
            <th>Assign Staff</th>
            <th>Priority</th>
            <th>Status</th>
            <th>Details</th>

            <th width="280px">Action</th>

        </tr>

	    @foreach ($tasks as $task)

	    <tr>

            <td>{{ $task->type }}</td>
            <td>{{ $task->project }}</td>
            <td>{{ $task->customer_id }}</td>
            <td>{{ $task->start_date }}</td>
            <td>{{ $task->due_date }}</td>
            <td>{{ $task->staff_id }}</td>
            <td>{{ $task->priority }}</td>
	        <td>{{ $task->status }}</td>
	        <td>{{ $task->details }}</td>

	        <td>

                <form action="{{ route('tasks.destroy',$task->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('tasks.show',$task->id) }}">Show</a>

                    @can('Task-edit')

                    <a class="btn btn-primary" href="{{ route('tasks.edit',$task->id) }}">Edit</a>

                    @endcan


                    @csrf

                    @method('DELETE')

                    @can('Task-delete')

                    <button type="submit" class="btn btn-danger">Delete</button>

                    @endcan

                </form>

	        </td>

	    </tr>

	    @endforeach

    </table>


    {!! $tasks->links() !!}


@endsection