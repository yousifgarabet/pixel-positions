<x-layout>
    <x-page-heading>Search Result</x-page-heading>

            <x-section-heading>Recent Jobs</x-section-heading>
            <div class=" mt-6 space-y-6">
                @foreach ($jobs as $job)
                    <x-job-card-wide :$job/>
                @endforeach
            </div>

</x-layout>
