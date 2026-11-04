@extends('layouts.app')

@section('content')

<h2>Add a New Animal</h2>

<form action="/crud" method="POST">
    @csrf

    <p>
        <label>Animal name:</label><br>
        <input type="text" name="aname" value="{{ old('aname') }}" required>
        @error('aname')
            <span style="color:red">{{ $message }}</span>
        @enderror
    </p>

    <p>
        <label>Species:</label><br>
        <input type="text" name="species" value="{{ old('species') }}" required>
        @error('species')
            <span style="color:red">{{ $message }}</span>
        @enderror
    </p>

    <button type="submit">Save Animal</button>
    <a href="/crud">Cancel</a>
</form>

@endsection