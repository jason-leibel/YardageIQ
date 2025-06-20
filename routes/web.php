<?php

use App\Models\WedgeStat;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $grouped = WedgeStat::all()
        ->groupBy('club')
        ->map(function ($items) {
            return [
                'club' => $items->first()->club,
                'pro' => $items->firstWhere('group', 'Pro'),
                'amateur' => $items->firstWhere('group', 'Amateur'),
                'regular' => $items->firstWhere('group', 'Recreational'),
            ];
        });

    return view('dashboard', ['stats' => $grouped]);
});
