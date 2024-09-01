<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // $jobs = Job::all();
    // dd($jobs[0]->title);
    return view('home', [
        'message' => 'This is home page'
    ]);
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    return view('job', ['job' => $job]);
});
Route::get('/contact', function () {
    return view('contact');
});
