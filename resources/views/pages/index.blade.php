@extends('layouts.app')

@section('content')
@include('layouts.sidebar')
<div class="wrapper">
    <div class="minimizedCard">
        {{-- <img class="card-img-top" src="holder.js/100px180/" alt=""> --}}
        <div class="small timestamp">Customer Name  |  DATE
        </div>
        <div class="buttons">
            <ul>
                <li>D</li>
                <li>D</li>
                <li>D</li>
            </ul>
        </div>
        <h4 class="card-title">My Printer is not working</h4>
        <div class="divider"></div>
        <div class="info">
            <div class="info1">
                Ticket ID:
            </div>
            <div class=info2" style="padding:20px 0">
                Department:
            </div>
            <div class="details">
                +
            </div>
        </div>
        
    </div>
</div>

@endsection