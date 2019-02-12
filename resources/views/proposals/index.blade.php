@extends('layouts.app')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Proposal</h2>

            </div>

            <div class="pull-right">

                @can('Proposal-create')

                <a class="btn btn-success" href="{{ route('proposals.create') }}"> Create New Proposal</a>

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

            <th>subject</th>
            <th>Customer</th>
            <th>Assign Staff</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Status</th>
            <th>Details</th>

            <th width="280px">Action</th>

        </tr>

	    @foreach ($proposals as $proposal)

	    <tr>

            <td>{{ $proposal->subject }}</td>
            <td>{{ $proposal->customer_id }}</td>
            <td>{{ $proposal->staff_id }}</td>
            <td>{{ $proposal->start_date }}</td>
            <td>{{ $proposal->end_date }}</td>
            <td>{{ $proposal->status }}</td>
            <td>{{ $proposal->details }}</td>

	        <td>

                <form action="{{ route('proposals.destroy',$proposal->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('proposals.show',$proposal->id) }}">Show</a>

                    @can('Proposal-edit')

                    <a class="btn btn-primary" href="{{ route('proposals.edit',$proposal->id) }}">Edit</a>

                    @endcan


                    @csrf

                    @method('DELETE')

                    @can('Proposal-delete')

                    <button type="submit" class="btn btn-danger">Delete</button>

                    @endcan

                </form>

	        </td>

	    </tr>

	    @endforeach

    </table>


    {!! $proposals->links() !!}


@endsection