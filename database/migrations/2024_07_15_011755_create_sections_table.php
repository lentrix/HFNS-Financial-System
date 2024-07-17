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
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('level_id')->unsigned();
            $table->bigInteger('sy_id')->unsigned();
            $table->string('name');
            $table->string('adviser');
            $table->timestamps();
            $table->foreign('level_id')->references('id')->on('levels')->onDelete('cascade');
            $table->foreign('sy_id')->references('id')->on('s_y_s')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};
