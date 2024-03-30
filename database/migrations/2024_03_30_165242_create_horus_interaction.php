<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Wzrd\HorusDomain\Model\InteractionInterface;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
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
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ct_order');
    }
};
