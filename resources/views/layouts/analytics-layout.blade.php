@php
$stats = [
    'Users' => rand(100, 5000),
    'Sessions' => rand(500, 10000),
    'Revenue' => '$' . rand(1000, 50000),
    'Conversion' => rand(1, 10) . '%'
];
@endphp

<div class="min-h-screen bg-gray-100">
    <div class="bg-indigo-700 text-white p-6">
        <h1 class="text-3xl font-bold">Analytics Dashboard</h1>
    </div>

    <div class="container mx-auto p-6">
        <div class="grid grid-cols-4 gap-4">
            @foreach($stats as $label => $value)
                <div class="bg-white p-4 rounded shadow">
                    <h3>{{ $label }}</h3>
                    <p class="text-2xl font-bold">{{ $value }}</p>
                </div>
            @endforeach
        </div>

        <div class="mt-6">
            {{ $slot }}
        </div>
    </div>
</div>
