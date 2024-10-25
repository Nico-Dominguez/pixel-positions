<x-layout>
 <x-page-heading>New Job</x-page-heading>
 <x-form.form method="POST" action="'/jobs">
    <x-form.input label="Title" name="title" placeholder="CEO" />
    <x-form.input label="Salary" name="salary" placeholder="$90,000 USD" />
    <x-form.input label="Location" name="location" placeholder="Winter Park, Florida" />

    <x-form.select label="Schedule" name="schedule">
        <option>Part Time</option>
        <option>Full Time</option>
    </x-form.select>

    <x-form.input label="URL" name="url" placeholder="https://acme.com/jobs/ceo-wanted" />
    <x-form.checkbox label="Feature (Costs Extra)" name="featured" />

    <x-form.divider />

    <x-form.input label="Tags (comma separated)" name="tags" placeholder="laracasts, video, education" />

    <x-form.button>Publish</x-form.button>
 </x-form.form>  
</x-layout>