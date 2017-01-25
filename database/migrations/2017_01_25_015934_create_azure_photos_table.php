<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAzurePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('azure_user_photos', function (Blueprint $table) {
            $table->integer('id', 11);
            $table->integer('creator_id', 11);
            $table->string('previewUrl', 255);
            $table->string('url', 255);
            $table->timestamp('time');
            $table->string('tags', 255);
            $table->string('creator_name', 50);
            $table->integer('version', 1)->default(1);
            $table->enum('type', ["PHOTO", "SELFIE"])->default("PHOTO");
            $table->integer('room_id', 11);
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('azure_user_photos');
    }
}