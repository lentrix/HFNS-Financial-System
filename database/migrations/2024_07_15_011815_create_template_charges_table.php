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
        Schema::create('template_charges', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('level_id')->unsigned();
            $table->bigInteger('sy_id')->unsigned();
            $table->bigInteger('title_id')->unsigned();
            $table->decimal('amount', 10,2)->unsigned();
            $table->timestamps();
            $table->foreign('level_id')->references('id')->on('levels')->onDelete('cascade');
            $table->foreign('sy_id')->references('id')->on('s_y_s')->onDelete('cascade');
            $table->foreign('title_id')->references('id')->on('account_titles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('template_charges');
    }
};
