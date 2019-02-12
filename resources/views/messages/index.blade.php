@extends('layouts.app')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Messages</h2>

            </div>

            <div class="pull-right">

                @can('Message-create')

                <a class="btn btn-success" href="{{ route('messages.create') }}"> Create New Messages</a>

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

           

            <th>Ticket ID</th>
            <th>User ID</th>
            <th>Message</th>

            <th width="280px">Action</th>

        </tr>

	    @foreach ($messages as $message)

	    <tr>

	      

            <td>{{ $message->ticket_id }}</td>
	        <td>{{ $message->user_id }}</td>
	        <td>{{ $message->message }}</td>

	        <td>

                <form action="{{ route('messages.destroy',$message->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('messages.show',$message->id) }}">Show</a>

                    @can('Message-edit')

                    <a class="btn btn-primary" href="{{ route('messages.edit',$message->id) }}">Edit</a>

                    @endcan


                    @csrf

                    @method('DELETE')

                    @can('Message-delete')

                    <button type="submit" class="btn btn-danger">Delete</button>

                    @endcan

                </form>

	        </td>

	    </tr>

	    @endforeach

    </table>


    {!! $messages->links() !!}


@endsection