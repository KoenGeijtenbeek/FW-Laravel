<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'programmer',
                'salary' => '$100.000'
            ],
            [
                'id' => 2,
                'title' => 'ceo',
                'salary' => '$9.999.999.999'
            ],
            [
                'id' => 3,
                'title' => 'teacher',
                'salary' => '$12'
            ]
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'programmer',
            'salary' => '$100.000'
        ],
        [
            'id' => 2,
            'title' => 'ceo',
            'salary' => '$9.999.999.999'
        ],
        [
            'id' => 3,
            'title' => 'teacher',
            'salary' => '$12'
        ]
    ];

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});