@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Invoices</h2>
            </div>
            <div class="pull-right">
                @can('Invoice-create')
                <a class="btn btn-success" href="{{ route('invoices.create') }}"> Create New Invoice</a>
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
            
            <th>Customer</th>
            <th>Serial No.</th>
            <th>Invoice No.</th>
            <th>Date of Issue</th>
            <th>Due date</th>
            <th>Action</th>

        </tr>
        @foreach ($invoices as $inv)
        <tr>
           
            <td>{{ $inv->customer->name }}</td>
            <td>{{ $inv->serial_no }}</td>
            <td>{{ $inv->invoice_no }}</td>
            <td>{{ $inv->issue_date }}</td>
            <td>{{ $inv->due_date }}</td>


            <td>
                <form action="{{ route('invoices.destroy',$inv->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('invoices.show',$inv->id) }}">Show</a>
                    @can('Invoice-edit')
                    <a class="btn btn-primary" href="{{ route('invoices.edit',$inv->id) }}">Edit</a>
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