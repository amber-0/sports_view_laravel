<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sports_shows', function (Blueprint $table) {
            $table->id();
            $table->string('name',30);
            $table->string('select_team',30)->nullable();
            $table->tinyInteger('japan_score')->nullable();
            $table->tinyInteger('mexico_score')->nullable();
            $table->string('cheer',30)->nullable();
            $table->integer('yen')->nullable();
            $table->longText('comment')->nullable();
            $table->timestamps();  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sports_shows');
    }
};

