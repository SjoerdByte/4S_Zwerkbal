@extends('layout')

@section('nav')
    <nav>
        <a href="/">Home</a>
        <a href="/tournaments">Toernooien</a>
        <a href="/teams">Teams</a>
        <a href="/players">Spelers</a>
        <a href="/upcoming">Opkomend</a>
        <a href="/schools" class="active">Scholen</a>
    </nav>
@endsection

@section('content')
    <h1>Nieuwe school</h1>
    <form action="{{ route('schools.update', $school) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Naam school</label>
            <input type="text" id="name" name="name" class="form-control" value="{{$school->name}}">
        </div>
        <div class="form-group">
            <label for="location">Locatie</label>
            <input type="text" id="location" name="location" class="form-control" value="{{$school->location}}">
        </div>

        <button class="btn btn-success" style="margin-top: 5%;" type="submit">Opslaan</button>

        <a href="{{ route('schools.index') }}" class="btn btn-warning" style="margin-top: 5%;">Annuleren</a>
    </form>
    <form action="{{ route('schools.destroy', $school) }}" method="POST" style="margin-top: -4.35%!important; float: right">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Verwijderen</button>
    </form>
@endsection
