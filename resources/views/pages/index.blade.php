@extends('layouts.app')

@section('content')
@include('layouts.sidebar')
<div class="wrapper">
    <h2>Open issues</h2>
    <div class="minimizedCard">
        {{-- <img class="card-img-top" src="holder.js/100px180/" alt=""> --}}
        <div class="small timestamp">Customer Name  |  DATE
        </div>
        <div class="buttons">
            <ul>
                <li><img src="img/danger.png" alt=""></li>
                <li><img src="img/clock.png" alt=""></li>
                <li><img src="img/checkmark.png" alt=""></li>
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
                <img src="img/plus.png" alt="">
            </div>
        </div>
        
    </div>
</div>

@endsection