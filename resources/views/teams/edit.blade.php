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
    <h1>Team aanpassen</h1>
    <form action="{{ route('teams.update', $team) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Naam team</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $team->name }}">
        </div>
        <div class="form-group">
            <label for="place">Plaats</label>
            <input type="text" id="place" name="place" class="form-control" value="{{ $team->place }}">
        </div>
        <div class="form-group">
            <label for="type">Kies een team</label>
            <select id="type" name="type" class="form-control">
                <option value="Local">Local</option>
                <option value="International">International</option>
                <option value="Commercieel">Commercieel</option>
                <option value="School">School</option>
            </select>
        </div>
        <div class="form-group">
            <label for="country">Land van herkomst</label>
            <input type="text" id="country" name="country" class="form-control" value="{{ $team->country }}">
        </div>
        <div class="form-group">
            <label for="players">Spelers</label>
            <input type="text" id="players" name="players" class="form-control" value="{{ $team->players }}">
        </div>

        <button class="btn btn-success" style="margin-top: 5%" type="submit">Opslaan</button>

        <a href="{{ route('teams.index') }}" class="btn btn-warning" style="margin-top: 5%">Annuleren</a>

    </form>
    <form action="{{ route('teams.destroy', $team) }}" method="POST" style="margin-top: -4.35%!important; float: right">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Verwijderen</button>
    </form>
@endsection
