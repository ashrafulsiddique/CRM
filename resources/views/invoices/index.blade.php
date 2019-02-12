@extends('layouts.app')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Invoices</h2>

            </div>

            <div class="pull-right">

                @can('Invoice-create')

                <a class="btn btn-success" href="{{ route('invoices.create') }}"> Create New Invoices</a>

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

            <th>No</th>

            <th>Name</th>

            <th>Details</th>

            <th width="280px">Action</th>

        </tr>

	    @foreach ($invoices as $invoice)

	    <tr>

	        <td>{{ ++$i }}</td>

	        <td>{{ $invoice->name }}</td>

	        <td>{{ $invoice->detail }}</td>

	        <td>

                <form action="{{ route('invoices.destroy',$invoice->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('invoices.show',$invoice->id) }}">Show</a>

                    @can('Invoices-edit')

                    <a class="btn btn-primary" href="{{ route('invoices.edit',$invoice->id) }}">Edit</a>

                    @endcan


                    @csrf

                    @method('DELETE')

                    @can('Invoice-delete')

                    <button type="submit" class="btn btn-danger">Delete</button>

                    @endcan

                </form>

	        </td>

	    </tr>

	    @endforeach

    </table>


    {!! $invoices->links() !!}


@endsection