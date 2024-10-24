@props(['tag' => null, 'size' => 'base'])

@php
    $classes = "bg-white/10 hover:bg-white/25 rounded-xl font-bold transition-colors duration-300";
    if ($size === 'base') {
        $classes .= " px-5 py-1 text-sm";
    }
    if ($size === 'small') {
        $classes .= " px-3 py-1 text-2xs";
    }
@endphp

@if($tag)
    {{-- Debug information --}}
        
    <a href="/tags/{{ Str::slug($tag->name) }}" class="{{ $classes }}">
        {{ $tag->name }}
    </a>
@else
    <span class="text-red-500">Tag missing</span>
@endif