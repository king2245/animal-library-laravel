@php
    $facts = [
        'The database is watching.',
        'Every bug has a family.',
        'Laravel loves semicolons.',
        'A deploy a day keeps boredom away.'
    ];
@endphp

<div class="p-4 bg-yellow-50 border border-yellow-200 rounded-lg">
    {{ $facts[array_rand($facts)] }}
</div>
