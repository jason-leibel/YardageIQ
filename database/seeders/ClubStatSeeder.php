<?php

namespace Database\Seeders;

use App\Models\ClubStat;
use Illuminate\Database\Seeder;

class ClubStatSeeder extends Seeder
{
    public function run(): void
    {
        $data = [

            // Wedges
            ['Wedge', 'PW', 'Pro', 135, 87, 83, 1.50, 30, 125],
            ['Wedge', 'PW', 'Amateur', 120, 78, 74, 1.48, 32, 110],
            ['Wedge', 'PW', 'Recreational', 105, 70, 67, 1.46, 34, 98],

            ['Wedge', 'GW', 'Pro', 125, 84, 81, 1.50, 32, 122],
            ['Wedge', 'GW', 'Amateur', 110, 75, 72, 1.47, 34, 105],
            ['Wedge', 'GW', 'Recreational', 95, 67, 64, 1.45, 36, 92],

            ['Wedge', 'SW', 'Pro', 115, 80, 77, 1.49, 34, 115],
            ['Wedge', 'SW', 'Amateur', 100, 72, 69, 1.47, 36, 102],
            ['Wedge', 'SW', 'Recreational', 85, 64, 61, 1.44, 38, 89],

            ['Wedge', 'LW', 'Pro', 100, 75, 72, 1.48, 36, 105],
            ['Wedge', 'LW', 'Amateur', 85, 66, 63, 1.45, 38, 90],
            ['Wedge', 'LW', 'Recreational', 70, 58, 55, 1.42, 40, 78],

            // Irons
            ['Iron', '9 Iron', 'Pro', 145, 89, 85, 1.51, 29, 130],
            ['Iron', '9 Iron', 'Amateur', 130, 80, 76, 1.49, 31, 115],
            ['Iron', '9 Iron', 'Recreational', 115, 72, 68, 1.47, 33, 100],

            ['Iron', '8 Iron', 'Pro', 160, 93, 89, 1.52, 27, 140],
            ['Iron', '8 Iron', 'Amateur', 145, 84, 80, 1.49, 29, 125],
            ['Iron', '8 Iron', 'Recreational', 130, 76, 72, 1.47, 31, 110],

            ['Iron', '7 Iron', 'Pro', 175, 97, 93, 1.52, 25, 155],
            ['Iron', '7 Iron', 'Amateur', 160, 88, 84, 1.50, 27, 140],
            ['Iron', '7 Iron', 'Recreational', 145, 80, 76, 1.48, 29, 125],

            ['Iron', '6 Iron', 'Pro', 190, 101, 97, 1.53, 23, 170],
            ['Iron', '6 Iron', 'Amateur', 175, 92, 88, 1.50, 25, 155],
            ['Iron', '6 Iron', 'Recreational', 160, 84, 80, 1.48, 27, 140],

            ['Iron', '5 Iron', 'Pro', 205, 105, 101, 1.53, 21, 185],
            ['Iron', '5 Iron', 'Amateur', 190, 96, 92, 1.50, 23, 170],
            ['Iron', '5 Iron', 'Recreational', 175, 88, 84, 1.48, 25, 155],

            ['Iron', '4 Iron', 'Pro', 215, 108, 104, 1.54, 19, 195],
            ['Iron', '4 Iron', 'Amateur', 200, 99, 95, 1.51, 21, 180],
            ['Iron', '4 Iron', 'Recreational', 185, 91, 87, 1.48, 23, 165],

            // Woods
            ['Wood', '3 Wood', 'Pro', 260, 110, 106, 1.53, 13, 160],
            ['Wood', '3 Wood', 'Amateur', 240, 102, 98, 1.50, 14, 145],
            ['Wood', '3 Wood', 'Recreational', 220, 94, 90, 1.47, 15, 130],

            ['Wood', '5 Wood', 'Pro', 240, 106, 102, 1.52, 15, 150],
            ['Wood', '5 Wood', 'Amateur', 220, 98, 94, 1.50, 16, 135],
            ['Wood', '5 Wood', 'Recreational', 200, 90, 86, 1.47, 17, 120],

            ['Wood', 'Driver', 'Pro', 295, 115, 112, 1.50, 12, 168],
            ['Wood', 'Driver', 'Amateur', 265, 105, 102, 1.48, 14, 155],
            ['Wood', 'Driver', 'Recreational', 235, 95, 92, 1.45, 16, 140],
        ];

        foreach ($data as $item) {
            list($category, $club, $group, $distance, $swing, $clubhead, $smash, $launch, $ball) = $item;

            ClubStat::create([
                'category' => $category,
                'club_name' => $club,
                'group' => $group,
                'distance' => $distance,
                'swing_speed' => $swing,
                'clubhead_speed' => $clubhead,
                'smash_factor' => $smash,
                'launch' => $launch,
                'ball_speed' => $ball,
            ]);
        }
    }
}
