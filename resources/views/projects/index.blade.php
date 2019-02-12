@extends('layouts.app')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Project</h2>

            </div>

            <div class="pull-right">

                @can('Project-create')

                <a class="btn btn-success" href="{{ route('projects.create') }}"> Create New Project</a>

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

            <th>Name</th>
            <th>Customer</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Details</th>

            <th width="280px">Action</th>

        </tr>

	    @foreach ($projects as $project)

	    <tr>

            <td>{{ $project->name }}</td>
            <td>{{ $project->customer_id }}</td>
            <td>{{ $project->start_date }}</td>
	        <td>{{ $project->end_date }}</td>

	        <td>{{ $project->details }}</td>

	        <td>

                <form action="{{ route('projects.destroy',$project->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('projects.show',$project->id) }}">Show</a>

                    @can('Project-edit')

                    <a class="btn btn-primary" href="{{ route('projects.edit',$project->id) }}">Edit</a>

                    @endcan


                    @csrf

                    @method('DELETE')

                    @can('Project-delete')

                    <button type="submit" class="btn btn-danger">Delete</button>

                    @endcan

                </form>

	        </td>

	    </tr>

	    @endforeach

    </table>


    {!! $projects->links() !!}


@endsection