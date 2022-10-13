@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1 class="text-center mt-3">Welcome to Fifa World Cup 2022 Website</h1>
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
    </section>
    <img src="{{ asset('images/venues/maxresdefault_2 (1).jpg') }}" class="rounded mx-auto d-block" alt="frontpage">
@endsection
