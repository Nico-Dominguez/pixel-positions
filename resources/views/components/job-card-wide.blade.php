@props(['job'])

<x-panel class="p-4 bg-white/10 rounded-lg flex gap-4 items-stretch hover:ring hover:ring-blue-500 hover:bg-white/5 transition-colors duration-300 group">
    <div class="flex items-center">
        <x-employer-logo />
    </div>

    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400 transition-colors duration-300">{{ $job->employer->name }}</a>
        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-800">{{ $job->title }}</h3>
        <p class="text-sm text-gray-400 mt-auto">{{ $job->salary }}</p>
    </div>

    <div class="flex gap-2 items-center">
        @foreach($job->tags as $tag)
            <x-tag :$tag />
         @endforeach
    </div>
</x-panel >