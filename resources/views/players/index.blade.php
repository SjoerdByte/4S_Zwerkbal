@extends('layout')

@section('nav')
    <nav>
        <a href="/">Home</a>
        <a href="/tournaments">Toernooien</a>
        <a href="/teams">Teams</a>
        <a href="/players" class="active">Spelers</a>
        <a href="/upcoming">Opkomend</a>
        <a href="/schools">Scholen</a>

    </nav>
@endsection

@section('content')

    <h1>Spelers</h1>
    <a href="{{ route('player.create') }}" class="btn btn-secondary" style="margin-bottom: 2%">+ nieuwe speler</a>
    <table class="table">
        <tr>
            <th>Naam</th>
            <th>Land</th>
            <th>Team naam</th>
        </tr>
        @foreach($teams as $team)
            <tr>
                <td>{{ $team->players }}</td>
                <td>{{ $team->country }}</td>
                <td>{{$team->name}}</td>
            </tr>
        @endforeach
    </table>

@endsection
