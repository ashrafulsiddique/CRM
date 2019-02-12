@extends('layouts.app')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Show Projects</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('projects.index') }}"> Back</a>

            </div>

        </div>

    </div>


    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Name:</strong>

                {{ $project->name }}

            </div>

        </div>
           <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Customer:</strong>

                {{ $project->customer_id }}

            </div>

        </div>

           <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Start Date:</strong>

                {{ $project->start_date }}

            </div>

        </div>
           <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>End Date:</strong>

                {{ $project->end_date }}

            </div>

        </div>
        

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Details:</strong>

                {{ $project->details }}

            </div>

        </div>

    </div>

@endsection