<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
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

        ]
    ]);
});

Route::get('/job/{id}', function ($id) {
    // Assuming the jobs array is defined somewhere in your code
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

    // Find the job based on the ID
    $job = Arr::get($jobs, $id);

    return view('job', ['job' => $job]) ?: abort(404);
});

Route::get('/contact', function () {
    return view('contact');
});

