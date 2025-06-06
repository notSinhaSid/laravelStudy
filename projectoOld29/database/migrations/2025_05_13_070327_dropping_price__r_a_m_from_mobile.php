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
        Schema::table('mobile', function (Blueprint $table) {
            $table->dropColumn(['price','RAM']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mobile', function (Blueprint $table) {
            $table->float('price', 8, 2);
            $table->integer('RAM');
        });
    }
};
