<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('listings', static function (Blueprint $table) {
            $table->id();
            $table->foreignId('make_id')->constrained('makes');
            $table->foreignId('model_id')->constrained('car_models');
            $table->string('engine');
            $table->string('gearbox');
            $table->string('price');
            $table->text('description');
            $table->timestamps();
            $table->softDeletes();
        });
    }
};
