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

    <h1>Scholen</h1>
    <a href="{{ route('schools.create') }}" class="btn btn-secondary" style="margin-bottom: 2%">+ nieuwe school</a>
    <table class="table">
        <tr>
            <th>#</th>
            <th>Naam</th>
            <th>Locatie</th>
            <th>Aanpassen</th>
        </tr>
        @foreach($schools as $school)
            <tr>
                <td>{{ $school->id }}</td>
                <td>{{ $school->name }}</td>
                <td>{{ $school->location }}</td>
                <td><a href="{{ route('schools.edit', $school->id) }}">Aanpassen</a></td>
            </tr>
        @endforeach
    </table>

@endsection
