<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Wzrd\Cms\Model\ContentStatusInterface;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('content', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('page_title');
            $table->string('meta_title');
            $table->string('meta_desc');
            $table->enum('status', [ContentStatusInterface::DRAFT, ContentStatusInterface::PUBLISHED]);
            $table->string('layout');
            $table->json('body');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('content');
    }
};
