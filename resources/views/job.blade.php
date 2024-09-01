<x-layout>
    <x-slot:heading>
        Job Details
    </x-slot:heading>
    <h1 class="text-3xl">Jobs Title is : {{$job['title']}}</h1>
    <p>Salary is {{$job['salary']}} PAM</p>
    <p><strong>Description </strong><br> {{$job['description']}}</p>
</x-layout>