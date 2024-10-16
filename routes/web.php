<?php

use Illuminate\Support\Facades\Route;

$jobs = [
    [
        'id' => 1,
        'title' => 'Chief of Mops',
        'salary' => '$400'
    ],
    [
        'id' => 2,
        'title' => 'Vice President',
        'salary' => '$300'
    ]
];


Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () use ($jobs) {

    return view('jobs', [
        'jobs' => $jobs
    ]);

});

Route::get('/job/{id}', function ($id) use ($jobs) {

    // Find the job based on the ID
    $job = Arr::get($jobs, $id);

    return view('job', ['job' => $job]) ?: abort(404);
});

Route::get('/contact', function () {
    return view('contact');
});

