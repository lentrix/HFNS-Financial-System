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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('last_name',100);
            $table->string('first_name',100);
            $table->string('mi',2);
            $table->string('gender', 6);
            $table->date('birth_date');
            $table->string('birth_place', 255);
            $table->string('address', 255);
            $table->string('father', 100);
            $table->string('mother',100);
            $table->string('phone',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
