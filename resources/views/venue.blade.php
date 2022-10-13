@extends('layouts.app')

@section('title', 'Venue Info')

@section('content')


    <section class="button">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4">
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <a href="{{ ('group') }}">
                            <button type="button" class="btn btn-primary">Groups</button>
                            </a>
                            <a href="{{ ('teaminfo') }}">
                            <button type="button" class="btn btn-primary">Teams</button>
                            </a>
                            <a href="{{ ('match') }}">
                            <button type="button" class="btn btn-primary">Matches</button>
                            </a>
                            <a href="{{ ('playersearch') }}">
                            <button type="button" class="btn btn-primary">Player</button>
                            </a>
                            <a href="{{ ('users') }}">
                            <button type="button" class="btn btn-primary">User</button>
                            </a>
                            <a href="{{ ('teaminfo') }}">
                            <button type="button" class="btn btn-primary">Team info</button>
                            </a>
                            <a href="{{ ('venue') }}">
                            <button type="button" class="btn btn-primary">Venues</button>
                            </a>
                            <button type="button" class="btn btn-primary">Fantasy Team</button>
    
                    </div>
                </div>
            </div>
        </div>

    </section>
    <h3>  Venue Info </h3>
    <div class="container p-4">
        @foreach ($venues as $list)
            <div class="row justify-content-center">
                <div class="col-3">
                    <div class="card m-3" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Venue Id : {{ $list -> id }} </h5>
                            <h5 class="card-title">Name: {{ $list->name }} Stadium </h5>
                            <h5 class="card-title">Capacity: {{ $list->capacity }}</h5>
                            <p class="card-text">Remaining Seats: {{ $list->remianing_seats }}</p>
                            <p class="card-text">Booked Seats: {{ $list->booked_seats }}</p>
                            <p class="card-text">Matches Played: {{ $list->matches_played }} </p>
                            <p class="card-text">Vip Ticket Price: {{ $list->vip_ticket_price }}</p>
                            <p class="card-text">Economy Ticket Price: {{ $list->economy_ticket_price }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    <h3>  Seat Status </h3>
    <div class="container p-4">
        @foreach ($venues as $list)
            <div class="row justify-content-center">
                <div class="col-3">
                    <div class="card m-3" style="width: 18rem;">
                        <div class="card-body">

                            <h5 class="card-title">Name: {{ $list->name }} Stadium </h5>
                            <h5 class="card-title"> Total Capacity: {{ $list->capacity }}</h5>

                            <p class="card-text">Remaining Seats: {{ $list->remianing_seats }}</p>

                            <p class="card-text">Booked Seats: {{ $list->booked_seats }}</p>
                            
                            
                            <p class="card-text">Matches Played: {{ $list->matches_played }} </p>

                            <p class="card-text">Vip Ticket Price: {{ $list->vip_ticket_price }}</p>
                            
                            <p class="card-text">Total VIP Ticket Income: {{ $list->matches_played * ( $list->booked_seats*0.6) * $list->vip_ticket_price  }} $ </p>

                            <p class="card-text">Economy Ticket Price: {{ $list->economy_ticket_price }}</p>
                            <p class="card-text">Total VIP Ticket Income: {{ $list->matches_played * ( $list->booked_seats*0.4) * $list->economy_ticket_price  }} $ </p>
                            <p class="card-text">Total Income: {{ ($list->matches_played * $list->booked_seats * $list->vip_ticket_price ) + ($list->matches_played * $list->booked_seats * $list->economy_ticket_price )  }} $ </p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    

@endsection