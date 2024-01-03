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
        Schema::create('todos', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('id_todo')->nullable();;
            $table->string('title');
            // $table->string('titular_name');
            $table->text('description');
            $table->tinyInteger('is_completed')->nullable();
            $table->timestamps();
            // $table->foreign('id_todo')->references('id')->on('users');
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('todos');
    }
};
