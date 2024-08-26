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
    <a href="{{ route('players.create') }}" class="btn btn-secondary" style="margin-bottom: 2%">+ nieuwe speler</a>
    <table class="table">
        <tr>
            <th>Naam</th>
            <th>Land</th>
            <th>Positie</th>
            <th>Team naam</th>
            <th>Aanpassen</th>
        </tr>
        @foreach($players as $player)
            <tr>
                <td>{{ $player->name }}</td>
                <td>{{ $player->country }}</td>
                <td>{{ $player->role }}</td>
                <td>{{ $player->team->name }}</td>
                <td>
                    <a href="{{ route('players.edit', $player->id) }}">Aanpassen</a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
