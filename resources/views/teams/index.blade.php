@extends('layout')

@section('nav')
    <nav>
        <a href="/">Home</a>
        <a href="/tournaments">Toernooien</a>
        <a href="/teams" class="active">Teams</a>
        <a href="/players">Spelers</a>
        <a href="/upcoming">Opkomend</a>
        <a href="/schools">Scholen</a>

    </nav>
@endsection

@section('content')

    <h1>Teams</h1>
    <a href="{{ route('teams.create') }}"class="btn btn-secondary" style="margin-bottom: 2%">+ nieuw team</a>
    <table class="table">
        <tr>
            <th>Team naam</th>
            <th>Plaats</th>
            <th>Soort</th>
            <th>Herkomst</th>
            <th>Spelers</th>
            <th>Aanpassen</th>
        </tr>
        @foreach($teams as $team)
            <tr>
                <td>{{ $team->name }}</td>
                <td>{{ $team->place }}</td>
                <td>{{ $team->type }}</td>
                <td>{{ $team->country }}</td>
                <td>
                    @if ($team->player)
                        {{ $team->player->name }}
                    @else
                        Geen speler(s) in het team.
                    @endif
                </td>
                <td><a href="{{ route('teams.edit', $team->id) }}">Aanpassen</a></td>
            </tr>
        @endforeach
    </table>

@endsection
