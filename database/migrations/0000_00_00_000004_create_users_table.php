<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', static function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->datetime('email_verified_at');
            $table->string('password');
            $table->string('remember_token');
            $table->timestamps();
            $table->softDeletes();
        });
    }
};
