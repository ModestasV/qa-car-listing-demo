<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('favorites', static function (Blueprint $table) {
            $table->id();
            $table->foreignId('listing_id')->constrained('listings');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }
};
