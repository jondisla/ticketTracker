@extends('layouts.app')

@section('content')
@include('layouts.sidebar')
<div class="wrapper">
    <h2>New Ticket</h2>
    <div class="ticketForm">
        {!! Form::open(['action' => 'TicketsController@store', 'method' => 'POST']) !!}
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    {{Form::label('name', 'Name')}}
                    {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Short ticket name', 'required'])}}
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    {{Form::label('team', 'Team')}}
                    {{Form::text('team', '', ['class' => 'form-control', 'placeholder' => 'IT, Help Desk, Logistics', 'required'])}}
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    {{Form::label('tel', 'Contact Number')}}
                    {{Form::text('tel', '', ['class' => 'form-control', 'placeholder' => 'Contact Number', 'required'])}}
                </div>
            </div>
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Description', 'required'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {!!Form::close() !!}
    </div>
</div>
@endsection