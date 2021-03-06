@extends('layouts.app')

@section('content')
@include('layouts.sidebar')
<div class="wrapper">
    @if (count($tickets) > 0)
    <h2>Open issues</h2>
            @foreach($tickets as $ticket)
    <div class="minimizedCard">
        {{-- <img class="card-img-top" src="holder.js/100px180/" alt=""> --}}
        
        <div class="small timestamp"><!-- DATE: {{$ticket->created_at}}-->
        </div>
        <div class="buttons">
            <ul>
                <li><img src="img/danger.png" alt="Pending"></li>
                {{-- <li><img src="img/clock.png" alt=""></li> --}}
                <li><img src="img/notcompleted.png" alt="Not Completed"></li>
            </ul>
        </div>
        <h4 class="card-title"><a href="/tickets/{{$ticket->id}}">{{$ticket->shortname}}</a></h4>
        
        <div class="divider"></div>
        <div class="info">
            <div class="info1">
                Ticket ID: {{$ticket->id}}
            </div>
            <div class=info2" style="padding:20px 0">
                Department: {{$ticket->department}}
            </div>
            <div class="ticketDetail hidden" id="ticketDetail-{{$ticket->id}}">
                <p>Name: {{$ticket->name}}</p>
                <p>Contact: {{$ticket->tel}}</p>
                {{$ticket->description}}
            </div>
            <div class="details" id="plusBtn-{{$ticket->id}}" data-ticketId="{{$ticket->id}}">
                <img src="img/plus.png" alt="">
            </div>
            
        </div>
    </div>
    @endforeach
    @else
    <h2>No Open issues</h2>
        @endif
</div>

@endsection