@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Expenses</h2>
            </div>
            <div class="pull-right">
                @can('Expense-create')
                <a class="btn btn-success" href="{{ route('expenses.create') }}"> Create New Expense</a>
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
            
            <th>Title</th>
            <th>Amount</th>
            <th>Category</th>
            <th>Choose Customer</th>
            <th>Action</th>

        </tr>
        @foreach ($expenses as $exp)
        <tr>
            
            <td>{{ $exp->title }}</td>
            <td>{{ $exp->amount }}</td>
            <td>{{ $exp->category }}</td>
            <td>{{ $exp->customer->name }}</td>
            <td>
                <form action="{{ route('expenses.destroy',$exp->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('expenses.show',$exp->id) }}">Show</a>
                    @can('Expense-edit')
                    <a class="btn btn-primary" href="{{ route('expenses.edit',$exp->id) }}">Edit</a>
                    @endcan

                    @csrf
                    @method('DELETE')
                    @can('Expense-delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endcan
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $expenses->links() !!}

@endsection