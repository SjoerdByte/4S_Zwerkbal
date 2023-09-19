@extends('layout')

@section('nav')
    <nav>
        <a href="/">Home</a>
        <a href="/tournaments" class="active">Toernooien</a>
        <a href="/teams">Teams</a>
        <a href="/players">Spelers</a>
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
            <label for="date">Start Tijd</label>
            <input type="time" id="time" name="time" class="form-control" value="{{ $tournament->start_time }}">
        </div>

        <button class="btn btn-success" style="margin-top: 5%" type="submit">Opslaan</button>

        <a href="{{ route('teams.index') }}" class="btn btn-danger" style="margin-top: 5%">Annuleren</a>

    </form>
@endsection
