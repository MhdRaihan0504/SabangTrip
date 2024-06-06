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
        Schema::create('payment', function (Blueprint $table) {
            $table->id()->autoIncrement()->primary();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('etiket_id');
            $table->string('image')->nullable();
            
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('etiket_id')->references('id')->on('etiket');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment');
    }
};
