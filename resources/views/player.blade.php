@extends('layouts.app')

@section('title', 'Player')

@section('content')

    <h1 class="text-center mt-3"> Player Info</h1>
    <section class="button m-3">
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
        <div class="container p-4">
            @foreach ($players as $p1)
                <div class="row justify-content-center">
                    <div class="col-3">
                        <div class="card m-3" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Player Id : {{ $no++ }} </h5>
                                <h5 class="card-title">Name: {{ $p1->name }} </h5>
                                <h5 class="card-title">Team: {{ $p1->team_name }}</h5>
                                <p class="card-text">Height: {{ $p1->Height }}</p>
                                <p class="card-text">No. Of Matches: {{ $p1->Number_of_matches }}</p>
                                <p class="card-text">Yellow Cards: {{ $p1->Y_cards }} </p>
                                <p class="card-text">Red Cards: {{ $p1->R_cards }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

@endsection
