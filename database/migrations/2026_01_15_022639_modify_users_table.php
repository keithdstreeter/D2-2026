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
        Schema::table('users', function (Blueprint $table) {
            // Add your modifications here
            $table->timestamp('deleted_at')->nullable();
            $table->string('first_name', 60)->nullable();
            $table->string('last_name', 100)->nullable();
            $table->string('sort_name', 160)->nullable()->index();
            $table->string('phone', 20)->nullable();
            $table->string('ride', 100)->nullable();
            $table->dateTime('birth_date')->nullable();
            $table->string('gender', 20)->nullable();
            $table->string('emergency_contact', 100)->nullable();
            $table->string('emergency_phone', 20)->nullable();
            $table->integer('event_age')->nullable();
            $table->float('event_fee', 9)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('deleted_at');
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('sort_name');
            $table->dropColumn('phone');
            $table->dropColumn('ride');
            $table->dropColumn('birth_date');
            $table->dropColumn('gender');
            $table->dropColumn('emergency_contact');
            $table->dropColumn('emergency_phone');
            $table->dropColumn('event_age');
            $table->dropColumn('event_fee');
        });
    }
};
