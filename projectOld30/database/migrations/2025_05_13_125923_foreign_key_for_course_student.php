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
        Schema::table('course', function (Blueprint $table) {
            $table->unsignedBigInteger('stu_id');
            $table->foreign('stu_id')->references('id')->on('student');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('course', function (Blueprint $table) {
            // first remove the foreign key then remove the column
            $table->dropForeign(['stu_id']);
            // order should be maintained
            $table->dropColumn(['stu_id']);
        });
    }
};
