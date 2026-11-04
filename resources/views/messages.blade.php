
@extends('layouts.app')

@section('content')
    <h2>Messages</h2>

    <p>Messages submitted through our Contact page.</p>

    @if($messages->isEmpty())
        <p>No messages have been received yet.</p>
    @else
        @foreach($messages as $message)
            <div style="border: 1px solid #ddd; padding: 20px; margin-bottom: 20px; border-radius: 8px;">
                <h3>{{ $message->subject }}</h3>

                <p><strong>Name:</strong> {{ $message->name }}</p>
                <p><strong>Email:</strong> {{ $message->email }}</p>
                <p><strong>Message:</strong> {{ $message->message }}</p>

                <p>
                    <small>
                        Received: {{ $message->created_at->format('d M Y, H:i') }}
                    </small>
                </p>
            </div>
        @endforeach
    @endif
@endsection
