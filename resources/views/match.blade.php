@extends('layouts.app')
@section('title', 'Match')

@section('content')
    <h1 class="text-center mt-3">Matches</h1>
    <section class="button">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4">
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <a href="{{ 'group' }}">
                            <button type="button" class="btn btn-primary">Groups</button>
                        </a>
                        <a href="{{ 'teaminfo' }}">
                            <button type="button" class="btn btn-primary">Teams</button>
                        </a>
                        <a href="{{ 'match' }}">
                            <button type="button" class="btn btn-primary">Matches</button>
                        </a>
                        <a href="{{ 'playersearch' }}">
                            <button type="button" class="btn btn-primary">Player</button>
                        </a>
                        <a href="{{ 'users' }}">
                            <button type="button" class="btn btn-primary">User</button>
                        </a>
                        <a href="{{ 'teaminfo' }}">
                            <button type="button" class="btn btn-primary">Team info</button>
                        </a>
                        <a href="{{ 'venue' }}">
                            <button type="button" class="btn btn-primary">Venues</button>
                        </a>
                        <button type="button" class="btn btn-primary">Fantasy Team</button>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <Section>
        @foreach ($lists as $m1)
            <div class="card class m-3">
                <div class="card-header">
                    <a href="{{ url('matchinfo', $m1->id) }}">Match No : {{ $no++ }}</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="card-title">{{ $m1->Home_team }} Vs {{ $m1->Away_team }}</h5>
                            <p class="card-text">Scoreline {{ $m1->Home_goals }} - {{ $m1->Away_goals }} </p>
                            <p class="card-text">Coverage starts at {{ $m1->Match_time }} </p>
                            <p class="card-text">Match Date and Time {{ $m1->created_at }} </p>
                        </div>
                        <div class="col-md-6 text-center mt-3">
                            <h4>CountDown:</h4>
                            <button type="disabled" class="btn btn-lg btn-warning rounded-circle">
                                {{ $m1->created_at->format('d') - date('d') }}
                                <span>Days left</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </Section>
    </body>

    </html>

    {{-- <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Match List</h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped table-hover" id="dataTable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Home_goals</th>
                                    <th>Away_goals</th>
                                    <th>Stadium</th>
                                    <th>Match_time</th>
                                    <th>Home_team</th>
                                    <th>Away_team</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($lists as $list)
                                    <tr>
                                        <td> {{ $no++ }}</td>
                                        <td> {{ $list->name }}</td>
                                        <td> {{ $list->Home_goals }}</td>
                                        <td> {{ $list->created_at->format('d') - date('d') }} <span class="text text-success">Days Left</span></td>
                                        <td> {{ $list->stadium }}</td>
                                        <td> {{ $list->Match_time }}</td>
                                        <td> {{ $list->Home_team }}</td>
                                        <td> {{ $list->Away_team }}</td>

                                        <td>
                                            <a href="" class="btn btn-primary btn-sm"><i class="fas fa-edit me-1"></i> Edit</a>
                                            <a href="" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
