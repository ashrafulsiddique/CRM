@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Orders</h2>
            </div>
            <div class="pull-right">
                @can('Order-create')
                <a class="btn btn-success" href="{{ route('orders.create') }}">Create New Order</a>
                @endcan
            </div>
        </div>
    </div>
    <br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Subject</th>
            <th>Customer</th>
            <th>Date of Issue</th>
            <th>Assigned</th>
            <th>Status</th>
            <th>Open Till</th>
            <th>Action</th>

        </tr>
        @foreach ($orders as $ord)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $ord->subject }}</td>
            <td>{{ $ord->customer->name }}</td>
            <td>{{ $ord->issue_date }}</td>
            <td>{{ $ord->staff->name }}</td>
            <td>{{ $ord->status }}</td>
            <td>{{ $ord->open_till }}</td>

            <td>
                <form action="{{ route('orders.destroy',$ord->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('orders.show',$ord->id) }}">Show</a>
                    @can('Order-edit')
                    <a class="btn btn-primary" href="{{ route('orders.edit',$ord->id) }}">Edit</a>
                    @endcan

                    @csrf
                    @method('DELETE')
                    @can('Order-delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endcan
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $orders->links() !!}

@endsection