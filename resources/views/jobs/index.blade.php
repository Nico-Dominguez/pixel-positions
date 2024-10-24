<x-layout>
    <div class="space-y-10">

        <section class="pt-6 text-center">
          <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>

          <form action="">
            <input type="text" placeholder="Web Developer..." class="mt-6 max-w-xl rounded-2xl bg-white/10 border border-white/20 px-5 py-4 w-full">
          </form>
        </section>

        <section class="pt-10">
        <x-section-heading>Featured Jobs</x-section-heading>
          <div class="mt-6 grid lg:grid-cols-3 gap-8">
            @foreach ( $featuredJobs as $job )
                <x-job-card :$job />
            @endforeach
            
          </div>
        </section>

        <section class="">
          <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1">
              @foreach($tags as $tag)
                <x-tag :$tag />
              @endforeach
            </div>
          </section>


        <section>
          <x-section-heading>Recent Jobs</x-section-heading>
          <div class="mt-6 grid gap-8">
            @foreach ( $jobs as $job )
                <x-job-card-wide :$job  />
            @endforeach
          </div>
        </section>
    </div>

</x-layout>
