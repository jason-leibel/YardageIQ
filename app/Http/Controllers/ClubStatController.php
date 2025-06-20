<?php

namespace App\Http\Controllers;

use App\Models\ClubStat;
use Illuminate\Http\Request;

class ClubStatController extends Controller
{
    public function landing()
    {
        $clubStats = ClubStat::all()->groupBy('club_name');
        $labels = $clubStats->keys()->toArray();
        $groups = ['Pro', 'Amateur', 'Recreational'];

        $datasets = collect($groups)->map(function ($group) use ($clubStats) {
            return [
                'label' => $group,
                'data' => $clubStats->map(fn($rows) => optional($rows->firstWhere('group', $group))->distance ?? 0),
                'backgroundColor' => match($group) {
                    'Pro' => '#4F46E5',
                    'Amateur' => '#22C55E',
                    'Recreational' => '#F59E0B',
                    default => '#ccc'
                },
            ];
        });

        return view('landing', [
            'chartData' => [
                'labels' => $labels,
                'datasets' => $datasets,
                'unit' => 'Distance (yards)',
            ]
        ]);
    }

    public function index(Request $request)
    {
        $group = $request->input('group', 'Pro');
        return $this->renderStatsView($group);
    }

    public function filterByGroup(string $group)
    {
        return $this->renderStatsView($group);
    }

    private function renderStatsView(string $group)
    {
        $stats = ClubStat::where('group', $group)
            ->get()
            ->groupBy('category')
            ->map(fn($items) => $items->groupBy('club_name'));

        return view('dashboard', [
            'stats' => $stats,
            'selectedGroup' => $group,
        ]);
    }
}
