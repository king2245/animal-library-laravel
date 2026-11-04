@extends('layouts.app')

@section('content')

<h2>Contact Us</h2>

<p>Have a question? Send us a message!</p>

@if (session('success'))
    <p style="color: green;">
        {{ session('success') }}
    </p>
@endif

<form action="/contact" method="POST">
    @csrf

    <p>
        <label>Your name:</label><br>
        <input type="text" name="name" value="{{ old('name') }}" required>
        @error('name')
            <span style="color:red">{{ $message }}</span>
        @enderror
    </p>

    <p>
        <label>Email:</label><br>
        <input type="email" name="email" value="{{ old('email') }}" required>
        @error('email')
            <span style="color:red">{{ $message }}</span>
        @enderror
    </p>

    <p>
        <label>Subject:</label><br>
        <input type="text" name="subject" value="{{ old('subject') }}" required>
        @error('subject')
            <span style="color:red">{{ $message }}</span>
        @enderror
    </p>

    <p>
        <label>Message:</label><br>
        <textarea name="message" rows="5" required>{{ old('message') }}</textarea>
        @error('message')
            <span style="color:red">{{ $message }}</span>
        @enderror
    </p>

    <button type="submit">Send Message</button>
</form>

@endsection