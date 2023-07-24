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
        Schema::create('randevus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("code");
            $table->string('name');
            $table->string("email")->nullable();
            $table->string("phone")->nullable();
            $table->longText("description")->nullable();
            $table->string("date");
            $table->tinyInteger("deleted")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('randevus');
    }
};
