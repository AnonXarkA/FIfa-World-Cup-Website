

@extends('layouts.app')

@section('title', 'Match History Info')

@section('content')

<!DOCTYPE html>
<html lang="en">

{{-- <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Match-info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head> --}}

<body>
    <h1 class="text-center mt-3">Match History</h1>
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
    <Section>
        <div class="card">
            
            <div class="card-header">
                Match No {{$list ->id}}
            </div>
            <div class="card-body">
                <h5 class="card-title">{{$list->Home_team}} Vs {{$list->Away_team}}</h5>
                <p class="card-text">{{$list->Home_goals}} - {{$list->Away_goals}}</p>
                <p class="card-text">Match Ends</p>
            </div>
            

        </div>
    </Section>
</body>

</html>



@endsection

