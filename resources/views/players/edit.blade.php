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
    <h1>Nieuwe school</h1>
    <form action="{{ route('players.update', $player) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Naam speler</label>
            <input type="text" id="name" name="name" class="form-control" value="{{$player->name}}">
        </div>
        <div class="form-group">
            <label for="country">Land</label>
            <input type="text" id="country" name="country" class="form-control" value="{{$player->country}}">
        </div>
        <div class="form-group">
            <label for="role">Positie</label>
            <input type="text" id="role" name="role" class="form-control" value="{{$player->role}}">
        </div>
        <div class="form-group">
            <label for="team_id">Team</label>
            <select name="team_id" id="team_id" class="form-control">
                @foreach($teams as $team)
                    <option value="{{ $team->id }}" @if($team->id == $player->team_id) selected @endif>{{ $team->name }}</option>
                @endforeach
            </select>
        </div>


        <button class="btn btn-success" style="margin-top: 5%;" type="submit">Opslaan</button>

        <a href="{{ route('players.index') }}" class="btn btn-warning" style="margin-top: 5%;">Annuleren</a>
    </form>
    <form action="{{ route('players.destroy', $player) }}" method="POST" style="margin-top: -4.35%!important; float: right">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Verwijderen</button>
    </form>
@endsection
