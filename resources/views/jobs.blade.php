<x-layout>
    <x-slot:heading>
        Jobs listing
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
        <a class="hover:underline hover:text-blue-500" href="/jobs/{{$job['id']}}">
            <li>Role : <strong>{{$job['title']}}</strong> pays of {{$job['salary']}}</li>
        </a>
        @endforeach
    </ul>
</x-layout>