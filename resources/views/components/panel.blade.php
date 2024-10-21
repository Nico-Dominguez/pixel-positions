@php
    $classes = 'p-4 bg-white/10 rounded-xl hover:ring hover:ring-blue-500 hover:bg-white/5 transition-colors duration-300 group'
@endphp

<div {{ $attributes(['class' => $classes])}}>
    {{ $slot }}
</div>