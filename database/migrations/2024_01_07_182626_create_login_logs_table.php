<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('login_logs', function (Blueprint $table)
        {
            $table->id();
            $table->string('user_id');
            $table->string('ip');
            $table->string('user_agent');
            $table->timestamp('login_at');
        });
    }
};
