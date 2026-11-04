<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('connecting', function (Blueprint $table) {
            $table->unsignedBigInteger('animalid');
            $table->unsignedBigInteger('novelid');

            $table->primary(['animalid', 'novelid']);

            $table->foreign('animalid')->references('id')->on('animals');
            $table->foreign('novelid')->references('id')->on('novels');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('connecting');
    }
};