@extends('layouts.app')

@section('content')
@include('layouts.sidebar')
<div class="wrapper">
    <h2>New Ticket</h2>
    <div class="ticketForm">
        {!! Form::open(['action' => 'TicketsController@store', 'method' => 'POST']) !!}
        <div class="row">
            <div class="col-sm-8">
                <div class="form-group">
                    {{Form::label('shortname', 'Ticket Name')}}
                    {{Form::text('shortname', '', ['class' => 'form-control', 'placeholder' => 'Printer stopped working'])}}
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    {{Form::label('department', 'Department')}}
                    {{Form::select('department', ['IT' => 'IT', 'Support' => 'Support', 'Repair' => 'Repair'])}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <div class="form-group">
                    {{Form::label('name', 'Name')}}
                    {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Customer name',])}}
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    {{Form::label('tel', 'Contact Number')}}
                    {{Form::text('tel', '', ['class' => 'form-control', 'placeholder' => 'Ex: 1234567890'])}}
                </div>
            </div>
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {!!Form::close() !!}
    </div>
</div>
@endsection