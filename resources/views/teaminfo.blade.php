@extends('layouts.app')

@section('title', 'Team info')

@section('content')

    <h1 class="text-center mt-3">Team info</h1>
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
        <div class="container p-4">
            <div class="card">
                <div class="card-header">
                    <h4>
                        <marquee behavior="" direction="">Rank List</marquee>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover table-start" id="dataTable2">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Groups</th>
                                <th>Name</th>
                                <th>Rank</th>
                                <th>Win</th>
                                <th>Lost</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($team as $list)
                                <tr>
                                    <td>{{ $list->id }}</td>
                                    <td>{{ $list->Groups }}</td>
                                    <td>{{ $list->name }}</td>
                                    <td>{{ $list->Rank }}</td>
                                    <td>{{ $list->no_of_w }}</td>
                                    <td>{{ $list->no_of_l }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <h3> Team Info</h3>
            @foreach ($team as $p1)
                <div class="row justify-content-center">
                    <div class="col-3">
                        <div class="card m-3" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Team Id : {{ $p1->id }} </h5>
                                <h5 class="card-title">Groups: {{ $p1->Groups }} </h5>
                                <h5 class="card-title">Name: {{ $p1->name }}</h5>
                                <p class="card-text">Rank: {{ $p1->Rank }}</p>
                                <p class="card-text">Wins: {{ $p1->no_of_w }}</p>
                                <p class="card-text">Lost: {{ $p1->no_of_l }} </p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
    </section>
@endsection
