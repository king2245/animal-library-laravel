@extends('layouts.app')

@section('content')

<h2>Edit Animal</h2>

<form action="/crud/{{ $animal->id }}" method="POST">
    @csrf
    @method('PUT')

    <p>
        <label>Animal name:</label><br>
        <input type="text"
               name="aname"
               value="{{ old('aname', $animal->aname) }}"
               required>

        @error('aname')
            <span style="color:red">{{ $message }}</span>
        @enderror
    </p>

    <p>
        <label>Species:</label><br>
        <input type="text"
               name="species"
               value="{{ old('species', $animal->species) }}"
               required>

        @error('species')
            <span style="color:red">{{ $message }}</span>
        @enderror
    </p>

    <button type="submit">Update Animal</button>
    <a href="/crud">Cancel</a>
</form>

@endsection