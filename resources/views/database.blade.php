@extends('layouts.app')

@section('content')

    <h2>Animal Library Database</h2>

    <p>Explore animals and the novels in which they appear.</p>

    @foreach ($animals as $animal)
        <h3>{{ $animal->aname }}</h3>

        <p><strong>Species:</strong> {{ $animal->species }}</p>

        <p><strong>Appears in:</strong>
            @forelse ($animal->novels as $novel)
                {{ $novel->title }} ({{ $novel->pyear }})
            @empty
                No novels listed.
            @endforelse
        </p>

        <hr>
    @endforeach

    {{ $animals->links() }}

@endsection