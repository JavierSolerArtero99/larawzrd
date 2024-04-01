<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Wzrd\HorusDomain\Model\InteractionInterface;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('horus_customers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('horus_apps', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('logo');
            $table->string('api_key')->unique();
            $table->json('paths');
            $table->unsignedBigInteger('horus_customer');
            $table->foreign('horus_customer')->references('id')->on('horus_customers')->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::create('horus_interaction', function (Blueprint $table) {
            $table->id();
            $table->string('api_key')->nullable();
            // DEVICE
            $table->string('device_id')->nullable();
            $table->string('device_brand')->nullable();
            $table->string('device_model')->nullable();
            $table->string('device_sdk');
            // METRICS
            $table->string('path');
            $table->enum('platform', InteractionInterface::PLATFORMS)->nullable();
            $table->float('screen_width');
            $table->float('screen_height');
            $table->float('xdpi');
            $table->float('ydpi');
            $table->timestamp('timestamp');

            $table->unsignedBigInteger('app');
            $table->foreign('app')->references('id')->on('horus_apps')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horus_customers');
        Schema::dropIfExists('horus_apps');
        Schema::dropIfExists('horus_interaction');
    }
};
