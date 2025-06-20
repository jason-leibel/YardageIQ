<?php

namespace Database\Seeders;

use App\Models\WedgeStat;
use Illuminate\Database\Seeder;

class WedgeStatSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['club' => 'PW', 'group' => 'Pro',        'distance' => 135, 'swing_speed' => 85, 'clubhead_speed' => 85, 'smash_factor' => 1.25, 'launch_angle' => 30, 'ball_speed' => 106],
            ['club' => 'PW', 'group' => 'Amateur',    'distance' => 115, 'swing_speed' => 75, 'clubhead_speed' => 75, 'smash_factor' => 1.20, 'launch_angle' => 32, 'ball_speed' => 90],
            ['club' => 'PW', 'group' => 'Recreational','distance' => 100,'swing_speed' => 65, 'clubhead_speed' => 65, 'smash_factor' => 1.15, 'launch_angle' => 34, 'ball_speed' => 75],
            ['club' => 'GW', 'group' => 'Pro',        'distance' => 120, 'swing_speed' => 80, 'clubhead_speed' => 80, 'smash_factor' => 1.25, 'launch_angle' => 32, 'ball_speed' => 100],
            ['club' => 'GW', 'group' => 'Amateur',    'distance' => 100, 'swing_speed' => 70, 'clubhead_speed' => 70, 'smash_factor' => 1.20, 'launch_angle' => 34, 'ball_speed' => 84],
            ['club' => 'GW', 'group' => 'Recreational','distance' => 90, 'swing_speed' => 60, 'clubhead_speed' => 60, 'smash_factor' => 1.15, 'launch_angle' => 36, 'ball_speed' => 69],
            ['club' => 'SW', 'group' => 'Pro',        'distance' => 100, 'swing_speed' => 75, 'clubhead_speed' => 75, 'smash_factor' => 1.20, 'launch_angle' => 34, 'ball_speed' => 90],
            ['club' => 'SW', 'group' => 'Amateur',    'distance' => 85,  'swing_speed' => 65, 'clubhead_speed' => 65, 'smash_factor' => 1.15, 'launch_angle' => 36, 'ball_speed' => 75],
            ['club' => 'SW', 'group' => 'Recreational','distance' => 70, 'swing_speed' => 55, 'clubhead_speed' => 55, 'smash_factor' => 1.10, 'launch_angle' => 38, 'ball_speed' => 60],
            ['club' => 'LW', 'group' => 'Pro',        'distance' => 85,  'swing_speed' => 70, 'clubhead_speed' => 70, 'smash_factor' => 1.20, 'launch_angle' => 36, 'ball_speed' => 84],
            ['club' => 'LW', 'group' => 'Amateur',    'distance' => 70,  'swing_speed' => 60, 'clubhead_speed' => 60, 'smash_factor' => 1.15, 'launch_angle' => 38, 'ball_speed' => 69],
            ['club' => 'LW', 'group' => 'Recreational','distance' => 55, 'swing_speed' => 50, 'clubhead_speed' => 50, 'smash_factor' => 1.10, 'launch_angle' => 40, 'ball_speed' => 55],
        ];

        foreach ($data as $row) {
            WedgeStat::create($row);
        }
    }
}
