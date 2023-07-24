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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("code");
            $table->string("title");
            $table->string("mini_description")->nullable();
            $table->longText("description")->nullable();
            $table->string("image_url")->nullable();
            $table->tinyInteger("deleted")->default(0);
            $table->unsignedBigInteger("created_user_code");
            $table->unsignedBigInteger("updated_user_code")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
