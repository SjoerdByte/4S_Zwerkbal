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
    <h1>Nieuwe speler</h1>
    <form action="{{ route('players.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Naam speler</label>
            <input type="text" id="name" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="date">Datum</label>
            <input type="date" id="date" name="date" class="form-control">
        </div>
        <div class="form-group">
            <label for="date">Start Tijd</label>
            <input type="time" id="start_time" name="start_time" class="form-control">
        </div>
        <div class="form-group">
            <label for="date">Eind Tijd</label>
            <input type="time" id="end_time" name="end_time" class="form-control">
        </div>

        <button class="btn btn-success" style="margin-top: 5%" type="submit">Opslaan</button>

        <a href="{{ route('tournaments.index') }}" class="btn btn-danger" style="margin-top: 5%">Annuleren</a>
    </form>
@endsection
