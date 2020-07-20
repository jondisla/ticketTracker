@extends('layouts.app')

@section('content')
@include('layouts.sidebar')
<div class="wrapper">
    <div class="ticketForm">
        {!! Form::open(['action' => ['TicketsController@update',$ticket->id], 'method' => 'POST']) !!}
        <div class="row">
            <div class="col-sm-8">
                <div class="form-group">
                    {{Form::label('shortname', 'Ticket Name')}}
                    {{Form::text('shortname', $ticket->shortname, ['class' => 'form-control', 'readonly'])}}
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    {{Form::label('department', 'Department')}}<br>
                    {{Form::text('department', $ticket->department, ['class' => 'form-control', 'readonly'])}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <div class="form-group">
                    {{Form::label('name', 'Name')}}
                    {{Form::text('name', $ticket->name, ['class' => 'form-control', 'readonly'])}}
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    {{Form::label('tel', 'Contact Number')}}
                    {{Form::text('tel', $ticket->tel, ['class' => 'form-control', 'readonly'])}}
                </div>
            </div>
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', $ticket->description, ['class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
            <div class="editBtns">
                <div class="editSubmitBtn">
                    {{Form::hidden('_method', 'PUT')}}
                    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                    {!!Form::close() !!}
                </div>
                <div class="editDeleteBtn">
                    {!!Form::open(['action' => ['TicketsController@destroy',$ticket->id], 'method' => 'POST']) !!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                    {!!Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection