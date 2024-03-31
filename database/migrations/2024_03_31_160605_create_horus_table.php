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
            $table->string('slug')->unique();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('horus_apps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('horus_customer');
            $table->foreign('horus_customer')->references('id')->on('horus_customers')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horus_customers');
        Schema::dropIfExists('horus_apps');
    }
};
