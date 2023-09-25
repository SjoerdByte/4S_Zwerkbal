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
    <h1>Toernooi aanpassen</h1>
    <form action="{{ route('tournaments.update', $tournament) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Naam toernooi</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $tournament->name }}">
        </div>

        <div class="form-group">
            <label for="date">Datum</label>
            <input type="date" id="date" name="date" class="form-control" value="{{ $tournament->date }}">
        </div>

        <div class="form-group">
            <label for="start_time">Start Tijd</label>
            <input type="time" id="start_time" name="start_time" class="form-control" value="{{ $tournament->start_time }}">
        </div>

        <div class="form-group">
            <label for="end_time">Eind Tijd</label>
            <input type="time" id="end_time" name="end_time" class="form-control" value="{{ $tournament->end_time }}">
        </div>

        <button class="btn btn-success" style="margin-top: 5%" type="submit">Opslaan</button>

        <a href="{{ route('tournaments.index') }}" class="btn btn-warning" style="margin-top: 5%">Annuleren</a>
    </form>
    <form action="{{ route('tournaments.destroy', $tournament) }}" method="POST" style="margin-top: -4.35%!important; float: right">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Verwijderen</button>
    </form>
@endsection
