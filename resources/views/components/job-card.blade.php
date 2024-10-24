@props(['job'])

<div class="p-4 bg-white/10 rounded-lg hover:ring hover:ring-blue-500 hover:bg-white/5 transition-colors duration-300 group ">
    <a href="/" class="flex flex-col text-center ">
        <div class="self-start text-sm">{{ $job->employer->name }}</div>

            <div class="py-8">
                <h3 class="text-xl font-bold group-hover:text-blue-500 transition-colors duration-300">{{ $job->title }}</h3>
                <p class="text-sm mt-6">{{ $job->salary }}</p>
            </div>

            <div class="flex items-center justify-between">
                <div class="flex gap-2">
                    @foreach($job->tags as $tag)
                        <x-tag :$tag size="small" />
                    @endforeach
                </div>
                <x-employer-logo :width="42" />
            </div>
    </a>
    
</div>