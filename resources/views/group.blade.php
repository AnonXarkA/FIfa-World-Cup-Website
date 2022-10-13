@extends('layouts.app')

@section('title', 'Group')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>
                                <marquee behavior="" direction="">Group A List</marquee>
                            </h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-bordered table-hover table-start" id="dataTable">
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
                                    @forelse ($team1 as $list)
                                        <tr>
                                            <td>{{ $list->id }}</td>
                                            <td>{{ $list->Groups }}</td>
                                            <td>{{ $list->name }}</td>
                                            <td>{{ $list->Rank }}</td>
                                            <td>{{ $list->no_of_w }}</td>
                                            <td>{{ $list->no_of_l }}</td>
                                        </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>
                                <marquee behavior="" direction="">Group B List</marquee>
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
                                    @forelse ($team2 as $list)
                                        <tr>
                                            <td>{{ $list->id }}</td>
                                            <td>{{ $list->Groups }}</td>
                                            <td>{{ $list->name }}</td>
                                            <td>{{ $list->Rank }}</td>
                                            <td>{{ $list->no_of_w }}</td>
                                            <td>{{ $list->no_of_l }}</td>
                                        </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
