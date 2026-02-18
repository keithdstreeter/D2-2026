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
        Schema::create('cue', function (Blueprint $table) {
            $table->id();
            // $table->bigIncrements('id');
            $table->string('course', 10)->index();
            $table->integer('cue_order');
            $table->string('cue_type', 10);
            $table->string('cue_note', 100)->nullable();
            $table->float('cue_start_distance', 6)->nullable();
            $table->float('cue_elevation', 6)->nullable();
            $table->string('cue_description', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cue');
    }
};
