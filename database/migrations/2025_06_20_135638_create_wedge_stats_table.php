<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('wedge_stats', function (Blueprint $table) {
            $table->id();
            $table->string('club');             // PW, GW, SW, LW
            $table->string('group');            // Pro, Amateur, Recreational
            $table->unsignedInteger('distance'); // in yards
            $table->unsignedInteger('swing_speed');
            $table->unsignedInteger('clubhead_speed');
            $table->decimal('smash_factor', 4, 2);
            $table->decimal('launch_angle', 5, 2);
            $table->unsignedInteger('ball_speed');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wedge_stats');
    }
};
