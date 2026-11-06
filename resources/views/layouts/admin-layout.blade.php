@php
$menu = [
    'Dashboard',
    'Users',
    'Orders',
    'Products',
    'Reports',
    'Settings'
];
@endphp

<div class="flex min-h-screen">
    <aside class="w-64 bg-slate-800 text-white">
        <div class="p-6 font-bold text-xl">
            Admin Panel
        </div>

        @foreach($menu as $item)
            <div class="px-6 py-2 hover:bg-slate-700">
                {{ $item }}
            </div>
        @endforeach
    </aside>

    <main class="flex-1 p-8">
        {{ $slot }}
    </main>
</div>
