<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard', [
        'stats' => [
            ['club' => '7 Iron', 'pro' => ['launch' => 17, 'spin' => 7000], 'amateur' => ['launch' => 19, 'spin' => 6500], 'regular' => ['launch' => 21, 'spin' => 6000]],
            ['club' => 'Driver', 'pro' => ['launch' => 12, 'spin' => 2500], 'amateur' => ['launch' => 14, 'spin' => 3000], 'regular' => ['launch' => 16, 'spin' => 3500]],
        ]
    ]);
});
