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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('leaving_from');
            $table->string('arriving_to');
            $table->dateTime('departure');
            $table->dateTime('arrival');
            $table->string('train_id');
            $table->integer('carriages');
            $table->boolean('on_time');
            $table->boolean('cancelled');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
