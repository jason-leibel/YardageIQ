<?php

namespace App\Http\Controllers;

use App\Models\ClubStat;
use Illuminate\Http\Request;

class ClubStatController extends Controller
{
    public function index(Request $request)
    {
        $group = $request->input('group', 'Pro'); // Default to Pro
        $stats = ClubStat::where('group', $group)
            ->get()
            ->groupBy('category')
            ->map(function ($items) {
                return $items->groupBy('club_name');
            });

        return view('dashboard', [
            'stats' => $stats,
            'selectedGroup' => $group,
        ]);
    }


    public function filterByGroup(string $group)
    {
        $grouped = ClubStat::where('group', $group)
            ->get()
            ->groupBy('category')
            ->map(function ($items) {
                return $items->groupBy('club_name');
            });

        return view('dashboard', [
            'stats' => $grouped,
            'selectedGroup' => $group,
        ]);
    }
}
