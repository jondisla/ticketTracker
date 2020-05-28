@extends('layouts.app')

@section('content')
@include('layouts.sidebar')
<div class="wrapper">
    <h2>Open issues</h2>
    @if (count($tickets) > 1)
            @foreach($tickets as $ticket)
    <div class="minimizedCard">
        {{-- <img class="card-img-top" src="holder.js/100px180/" alt=""> --}}
        
        <div class="small timestamp">DATE: {{$ticket->updated_at}}
        </div>
        <div class="buttons">
            <ul>
                <li><img src="img/danger.png" alt=""></li>
                <li><img src="img/clock.png" alt=""></li>
                <li><img src="img/checkmark.png" alt=""></li>
            </ul>
        </div>
        <h4 class="card-title"><a href="/tickets/{{$ticket->id}}">{{$ticket->shortname}}</a></h4>
        
        <div class="divider"></div>
        <div class="info">
            <div class="info1">
                Ticket ID: {{$ticket->id}}
            </div>
            <div class=info2" style="padding:20px 0">
                Department: {{$ticket->team}}
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
        @endif
</div>


@endsection