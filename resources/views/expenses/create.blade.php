@extends('layouts.app')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Add New Expense</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('expenses.index') }}"> Back</a>

            </div>

        </div>

    </div>

<br>

    @if ($errors->any())

        <div class="alert alert-danger">

            <strong>Whoops!</strong>There were some problems with your input.<br><br>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif


    <form action="{{ route('expenses.store') }}" method="POST">

        @csrf
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" name="title" class="form-control" placeholder="Title">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Amount:</strong>
                    <input type="number" step="0.01" name="amount" class="form-control" placeholder="0.00">
                </div>
            </div>

            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date:</strong>
                    <input type="date" name="expense_date" class="form-control" placeholder="Date">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">  
                    <strong>Category:</strong>
                    <input type="text" name="category" class="form-control" placeholder="Category">
                </div>
            </div>

           <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Choose Customer:</strong>
                    <select name="customer" class="form-control">
                        <option style="display:none;"></option>
                        @foreach ($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Account:</strong>
                    <input type="text" name="account" class="form-control" placeholder="account">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea rows="4" class="form-control" name="description" placeholder="Details"></textarea>
                </div>
            </div>
       
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </div>

    </form>


@endsection