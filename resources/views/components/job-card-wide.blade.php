@props(['job'])

<x-panel class="group relative p-6 flex items-center gap-6 bg-white/10 rounded-xl 
             hover:bg-white/5 hover:ring-2 hover:ring-blue-500/50 
             transition-all duration-300">
    
    <div class="shrink-0">
        <x-employer-logo class="rounded-lg shadow-md" />
    </div>

    <div class="flex-1 min-w-0"> <!-- min-w-0 prevents flex item from overflowing -->
        <header class="space-y-3">
            <a href="#" 
               class="text-sm text-gray-400 hover:text-gray-300 transition-colors">
                {{ $job->employer->name }}
            </a>
            
            <h3 class="font-bold text-xl">
                <a href="{{ $job->url }}" 
                   class="group-hover:text-blue-400 transition-colors line-clamp-1">
                    {{ $job->title }}
                </a>
            </h3>
        </header>

        <p class="mt-2 text-sm text-gray-400">{{ $job->salary }}</p>
    </div>

    <div class="flex flex-wrap gap-2 items-center ml-auto">
        @foreach($job->tags as $tag)
            <x-tag :$tag />
        @endforeach
    </div>
</x-panel>