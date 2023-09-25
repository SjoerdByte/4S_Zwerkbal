@extends('layout')

@section('nav')
    <nav>
        <a href="/">Home</a>
        <a href="/tournaments" class="active">Toernooien</a>
        <a href="/teams">Teams</a>
        <a href="/players">Spelers</a>
        <a href="/upcoming">Opkomend</a>
        <a href="/schools">Scholen</a>
    </nav>
@endsection

@section('content')

    <h1>Toernooien</h1>
    <a href="{{ route('tournaments.create') }}" class="btn btn-secondary" style="margin-bottom: 2%">+ nieuw toernooi</a>
    <table class="table">
        <tr>
            <th>Toernooi</th>
            <th>Datum</th>
            <th>Start Tijd</th>
            <th>Eind Tijd</th>
            <th>Aanpassen</th>
        </tr>
        @foreach($tournaments as $tournament)
            <tr>
                <td>{{ $tournament->name }}</td>
                <td>{{ \Carbon\Carbon::parse($tournament->date)->format('d-m-Y') }}</td>
                <td>{{ $tournament->start_time }}</td>
                <td>{{ $tournament->end_time }}</td>
                <td><a href="{{ route('tournaments.edit', $tournament->id) }}">Aanpassen</a></td>
            </tr>
        @endforeach
    </table>

@endsection
