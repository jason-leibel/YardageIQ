<?php

namespace Tests\Feature;

use Database\Seeders\ClubStatSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ClubStatControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_landing_page_has_chart_data(): void
    {
        $this->seed(ClubStatSeeder::class);

        $response = $this->get('/');

        $response->assertStatus(200)->assertViewHas('chartData');
    }

    public function test_stats_index_defaults_to_pro_group(): void
    {
        $this->seed(ClubStatSeeder::class);

        $response = $this->get('/stats');

        $response->assertStatus(200)
            ->assertViewHas('stats')
            ->assertViewHas('selectedGroup', 'Pro');
    }

    public function test_filter_by_group_returns_selected_data(): void
    {
        $this->seed(ClubStatSeeder::class);

        $response = $this->get('/stats/Amateur');

        $response->assertStatus(200)
            ->assertViewHas('stats')
            ->assertViewHas('selectedGroup', 'Amateur');
    }
}
