<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('announce_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('announce_id');
            $table->string('image_path');
            $table->timestamps();

            $table->foreign('announce_id')->references('id')->on('announces')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photos');
    }
};
