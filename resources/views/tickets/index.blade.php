@extends('layouts.app')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Tickets</h2>

            </div>

            <div class="pull-right">

                @can('Ticket-create')

                <a class="btn btn-success" href="{{ route('tickets.create') }}"> Create New Tickets</a>

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
            <th>Contact</th>
            <th>Department</th>
            <th>Priority</th>
            <th>Details</th>
            

            <th width="280px">Action</th>

        </tr>

	    @foreach ($tickets as $ticket)

	    <tr>

	        <td>{{ $ticket->subject }}</td>
            <td>{{ $ticket->customer_id}}</td>
            <td>{{ $ticket->contact }}</td>
            <td>{{ $ticket->department }}</td>
            <td>{{ $ticket->priority }}</td>
            <td>{{ $ticket->details }}</td>

	        <td>

                <form action="{{ route('tickets.destroy',$ticket->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('tickets.show',$ticket->id) }}">Show</a>

                    @can('Ticket-edit')

                    <a class="btn btn-primary" href="{{ route('tickets.edit',$ticket->id) }}">Edit</a>

                    @endcan


                    @csrf

                    @method('DELETE')

                    @can('Ticket-delete')

                    <button type="submit" class="btn btn-danger">Delete</button>

                    @endcan

                </form>

	        </td>

	    </tr>

	    @endforeach

    </table>


    {!! $tickets->links() !!}


@endsection