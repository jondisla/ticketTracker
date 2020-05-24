@extends('layouts.app')

@section('content')
@include('layouts.sidebar')
<div class="wrapper">
    <div class="card simpleTicket">
      {{-- <img class="card-img-top" src="holder.js/100px180/" alt=""> --}}
        <div class="small timestamp">Customer Name  |  DATE</div>
        <h4 class="card-title">My Printer is not working</h4>
        <div class="divider"></div>
        <ul class="details">
            <li>Ticket ID:</li>
            <li>Department: </li>
        </ul>
        <div class="buttons">
            <ul>
                <li>D</li>
                <li>D</li>
                <li>D</li>
            </ul>
        </div>
      </div>



      <div class="testcard">
        {{-- <img class="card-img-top" src="holder.js/100px180/" alt=""> --}}
          <div class="small timestamp">Customer Name  |  DATE</div>
          <h4 class="card-title">My Printer is not working</h4>
          <div class="divider"></div>
          <ul class="details">
              <li>Ticket ID:</li>
              <li>Department: </li>
          </ul>
          <div class="buttons">
              <ul>
                  <li>D</li>
                  <li>D</li>
                  <li>D</li>
              </ul>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection