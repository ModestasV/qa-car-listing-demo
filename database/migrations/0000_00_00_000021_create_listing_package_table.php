<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('listing_package', static function (Blueprint $table) {
            $table->id();
            $table->foreignId('listing_id')->constrained('listings');
            $table->foreignId('package_id')->constrained('packages');
        });
    }
};
