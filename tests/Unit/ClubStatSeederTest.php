<?php

namespace Tests\Unit;

use App\Models\ClubStat;
use Database\Seeders\ClubStatSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ClubStatSeederTest extends TestCase
{
    use RefreshDatabase;

    public function test_seeder_creates_expected_records(): void
    {
        $this->seed(ClubStatSeeder::class);

        $this->assertSame(39, ClubStat::count());
    }
}
