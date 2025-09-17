<x-layout>
    <x-slot:heading>
        job listings
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}">
                    <strong>{{ $job['title'] }}</strong> salary: {{ $job['salary'] }} per year
                </a>
            </li>
        @endforeach
    </ul>

</x-layout>