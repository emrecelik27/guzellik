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
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("code");
            $table->string("type"); //education,services, customers, galeri
            $table->unsignedBigInteger("type_code");
            $table->string("file_type"); //video ya da resim
            $table->string("file_url"); //dosyanın konumu
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
        Schema::dropIfExists('files');
    }
};
