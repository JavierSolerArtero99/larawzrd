<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('customer_attributes', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('label');
            $table->string('frontend_type');
            $table->string('backend_type');
            $table->timestamps();
        });
        Schema::create('customer_attributes_value', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('attribute_id');
            $table->string('value');
            $table->timestamps();
            $table->index(['customer_id', 'attribute_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_attributes');
        Schema::dropIfExists('customer_attributes_value');
    }
};
