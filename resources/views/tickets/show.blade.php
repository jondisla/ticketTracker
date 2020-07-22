@extends('layouts.app')

@section('content')
@include('layouts.sidebar')
<div class="wrapper">
    <div class="minimizedCard">
        {{-- <img class="card-img-top" src="holder.js/100px180/" alt=""> --}}
        
        <div class="small timestamp">DATE: {{$tickets->created_at}}
        </div>
        <div class="buttons">
            <ul>
                <li><img src="../img/danger.png" alt="Pending"></li>
                <li></li>
                <li><img src="../img/checkmark.png" alt="Viewed"></li>
            </ul>
        </div>
        <h4 class="card-title"><a href="/tickets/{{$tickets->id}}">{{$tickets->shortname}}</a></h4>
        
        <div class="divider"></div>
        <div class="info">
            <div class="info1">
                Ticket ID: {{$tickets->id}}
            </div>
            <div class=info2" style="padding:20px 0">
                Department: {{$tickets->department}}
            </div>
            <div class="ticketDetail" id="ticketDetail-{{$tickets->id}}">
                <p>Name: {{$tickets->name}}</p>
                <p>Contact: {{$tickets->tel}}</p>
                {{$tickets->description}}
            </div>
        </div>
    </div><a name="" id="editBtn" class="btn btn-primary" href="/tickets/{{$tickets->id}}/edit" role="button">Edit Ticket</a>
</div>
@endsection