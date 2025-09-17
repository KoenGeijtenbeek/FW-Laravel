<x-layout>
    <x-slot:heading>
        {{ $job['title'] }}
    </x-slot:heading>

    <h2>{{ $job['title'] }}</h2>

    <p>salary: {{ $job['salary'] }} per year</p>
</x-layout>