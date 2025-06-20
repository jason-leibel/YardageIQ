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
        Schema::create('club_stats', function (Blueprint $table) {
            $table->id();
            $table->string('club_name');
            $table->enum('category', ['Wood', 'Iron', 'Wedge']);
            $table->enum('group', ['Pro', 'Amateur', 'Recreational']);
            $table->integer('distance')->nullable();
            $table->decimal('swing_speed', 5, 2)->nullable();
            $table->decimal('clubhead_speed', 5, 2)->nullable();
            $table->decimal('smash_factor', 4, 2)->nullable();
            $table->decimal('launch', 4, 2)->nullable();
            $table->decimal('ball_speed', 5, 2)->nullable();
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
