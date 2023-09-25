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
    <form action="{{ route('schools.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Naam school</label>
            <input type="text" id="name" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="location">Locatie</label>
            <input type="text" id="location" name="location" class="form-control">
        </div>

        <button class="btn btn-success" style="margin-top: 5%" type="submit">Opslaan</button>

        <a href="{{ route('schools.index') }}" class="btn btn-danger" style="margin-top: 5%">Annuleren</a>

    </form>
@endsection
