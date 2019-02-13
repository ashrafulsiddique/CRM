@extends('layouts.app')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Update Expense</h2>

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


    <form action="{{ route('expenses.update',$expense->id) }}" method="POST">

        @csrf
        @method('PUT')
         <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" name="title" value="{{$expense->title}}" class="form-control" placeholder="Title">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Amount:</strong>
                    <input type="text" step="0.01"  name="amount" value="{{$expense->amount}}" class="form-control">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">  
                    <strong>Date:</strong>
                    <input type="date" name="expense_date" value="{{$expense->expense_date}}" class="form-control">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">  
                    <strong>Category:</strong>
                    <input type="text" name="category" value="{{$expense->category}}" class="form-control">
                </div>
            </div>

          <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Choose Customer:</strong>
                    <select name="customer" class="form-control">
                        @foreach ($users as $user)
                            @if(old('customer',$expense->customer_id) == $user->id )
                            <option value="{{ $user->id }}" selected >{{ $user->name }}</option>
                                @else
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endif
                            @endforeach
                    </select> 
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Account:</strong>
                    <input type="text" name="account" value="{{$expense->account}}" class="form-control">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea rows="4" class="form-control" name="description">{{$expense->description}}</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </div>

    </form>


@endsection