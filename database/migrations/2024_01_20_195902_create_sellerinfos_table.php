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
        Schema::create('sellerinfos', function (Blueprint $table) {
            $table->id();
            $table->string('photos'); // Assuming photos will be stored as a string (you may need to adjust this based on your needs)
            $table->text('description');
            $table->text('title');
            $table->string('location');
            $table->string('category');
            $table->string('profile_picture')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sellerinfos');
    }
};
