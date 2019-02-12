@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Accounts</h2>
            </div>
            <div class="pull-right">
                @can('Account-create')
                <a class="btn btn-success" href="{{ route('accounts.create') }}"> Create New Account</a>
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
            <th>Customer Name</th>
            <th>Account Name</th>
            <th>Account Number</th>
            <th>Bank Name</th>
            <th>Account Type</th>
            <th>Swift Code</th>
            <th>Action</th>

        </tr>
        @foreach ($Accounts as $acc)
        <tr>
            <td>{{ $acc->user->name }}</td>
            <td>{{ $acc->account_name }}</td>
            <td>{{ $acc->account_no }}</td>
            <td>{{ $acc->bank_name }}</td>
            <td>{{ $acc->type }}</td>
            <td>{{ $acc->swift_code }}</td>

            <td>
                <form action="{{ route('accounts.destroy',$acc->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('accounts.show',$acc->id) }}">Show</a>
                    @can('Account-edit')
                    <a class="btn btn-primary" href="{{ route('accounts.edit',$acc->id) }}">Edit</a>
                    @endcan

                    @csrf
                    @method('DELETE')
                    @can('Account-delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endcan
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $Accounts->links() !!}

@endsection