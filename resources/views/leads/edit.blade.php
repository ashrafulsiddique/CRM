@extends('layouts.app')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Update Lead</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('leads.index') }}"> Back</a>

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


    <form action="{{ route('leads.update',$lead->id) }}" method="POST">

        @csrf
        @method('PUT')
         <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" name="title" value="{{$lead->title}}" class="form-control" placeholder="Title">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{$lead->name}}" class="form-control" placeholder="Name">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">  
                    <strong>Company Name:</strong>
                    <input type="text" name="com_name" value="{{$lead->company_name}}" class="form-control" placeholder="Company Name">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="assignrd">Choose Staff: </label>
                    <select name="assignrd" class="form-control">
                @foreach ($staffs as $staff)
                        @if(old('assignrd',$lead->user_id) == $staff->id )
                        <option value="{{ $staff->id }}" selected >{{ $staff->name }}</option>
                @else
                        <option value="{{ $staff->id }}">{{ $staff->name }}</option>
                @endif
                        @endforeach
                    </select>   
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status:</strong>
                    <input type="text" name="status" value="{{$lead->status}}" class="form-control" placeholder="status">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Source:</strong>
                    <input type="text" name="source" value="{{$lead->source}}" class="form-control" placeholder="source">
                </div>
            </div> 

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Phone:</strong>
                    <input type="number" name="phone" value="{{$lead->phone}}" class="form-control" placeholder="phone">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>E-mail:</strong>
                    <input type="email" name="email" value="{{$lead->email}}" class="form-control" placeholder="E-mail">
                </div>
            </div>      

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Customer Web:</strong>
                    <input type="text" name="customer_web" value="{{$lead->customer_web}}" class="form-control" placeholder="Customer Web">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Country:</strong>
                    <input type="text" name="country" value="{{$lead->country}}" class="form-control" placeholder="Country">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>State:</strong>
                    <input type="text" name="state" value="{{$lead->state}}" class="form-control" placeholder="State">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>City:</strong>
                    <input type="text" name="city" value="{{$lead->city}}" class="form-control" placeholder="City">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Zip Code:</strong>
                    <input type="text" name="zip" value="{{$lead->zip}}" class="form-control" placeholder="Zip Code">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Address:</strong>
                    <textarea rows="4" class="form-control" name="address" placeholder="Address">{{$lead->address}}</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea rows="6" class="form-control" name="description" placeholder="Details">{{$lead->description}}</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date Contracted:</strong>
                    <input type="date" name="con_date" value="{{$lead->date_contacted}}" class="form-control" placeholder="Date Contracted">
                </div>
            </div>
          
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tags:</strong>
                    <input type="text" name="tags" value="{{$lead->lead_tags}}" class="form-control" placeholder="Tags">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Type:</strong>
                    <input type="text" name="type" value="{{$lead->lead_type}}" class="form-control" placeholder="Type">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </div>

    </form>


@endsection