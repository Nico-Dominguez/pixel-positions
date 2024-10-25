@props(['job'])

<x-panel class="flex flex-col p-6 hover:shadow-lg transition-shadow duration-300">
    <header class="flex items-center justify-between mb-4">
        <span class="text-sm font-medium text-gray-400">{{ $job->employer->name }}</span>
        <x-employer-logo :width="42" class="rounded-full" :employer="$job->employer" />
    </header>

    <div class="flex-grow space-y-4">
        <h3 class="text-xl font-bold">
            <a href="{{ $job->url }}" 
               class="hover:text-blue-500 transition-colors duration-300" target="_blank">
                {{ $job->title }}
            </a>
        </h3>
        
        <p class="text-sm text-gray-300">{{ $job->salary }}</p>
    </div>
    
    <footer class="mt-6">
        <div class="flex flex-wrap gap-2">
            @foreach($job->tags as $tag)
                <x-tag :$tag size="small" />
            @endforeach
        </div>
    </footer>
</x-panel>