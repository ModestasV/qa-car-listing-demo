<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('permission_role', static function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_id')->constrained('roles');
            $table->foreignId('permission_id')->constrained('permissions');
        });
    }
};
