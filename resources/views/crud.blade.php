@extends('layouts.app')

@section('content')

<h2>Animals</h2>

@if (session('success'))
    <p style="color: green;">
        {{ session('success') }}
    </p>
@endif

<p>
    <a href="/crud/create">Add a new animal</a>
</p>

<table border="1" cellpadding="10" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Animal name</th>
            <th>Species</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($animals as $animal)
            <tr>
                <td>{{ $animal->id }}</td>
                <td>{{ $animal->aname }}</td>
                <td>{{ $animal->species }}</td>
                <td>
                    <a href="/crud/{{ $animal->id }}/edit">Edit</a>

                    <form action="/crud/{{ $animal->id }}"
                          method="POST"
                          style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                onclick="return confirm('Delete this animal?')">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $animals->links() }}

@endsection