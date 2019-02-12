@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Leads</h2>
            </div>
            <div class="pull-right">
                @can('Lead-create')
                <a class="btn btn-success" href="{{ route('leads.create') }}"> Create New Lead</a>
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
           
            <th>Name</th>
            <th>Company Name</th>
            <th>Assigned</th>
            <th>Status</th>
            <th>Country</th>
            <th>Lead Type</th>
            <th>Action</th>

        </tr>
        @foreach ($leads as $lead)
        <tr>
            
            <td>{{ $lead->name }}</td>
            <td>{{ $lead->company_name }}</td>
            <td>{{ $lead->user->name }}</td>
            <td>{{ $lead->status }}</td>
            <td>{{ $lead->country }}</td>
            <td>{{ $lead->lead_type }}</td>


            <td>
                <form action="{{ route('leads.destroy',$lead->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('leads.show',$lead->id) }}">Show</a>
                    @can('Lead-edit')
                    <a class="btn btn-primary" href="{{ route('leads.edit',$lead->id) }}">Edit</a>
                    @endcan

                    @csrf
                    @method('DELETE')
                    @can('Lead-delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endcan
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $leads->links() !!}

@endsection