<x-layout>
    <x-page-heading>Results</x-page-heading>

    <div class="mt-6 grid gap-8">
        @foreach ( $jobs as $job )
            <x-job-card-wide :$job  />
        @endforeach
    </div>
</x-layout>