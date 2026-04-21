<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('minumans', function (Blueprint $table) {
            $table->id();
            $table->string('user');
            $table->string('jenis_minuman');
            $table->string('brand');
            $table->integer('rating');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('minumans');
    }
};