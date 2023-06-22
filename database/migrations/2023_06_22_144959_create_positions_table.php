<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePositionsTable extends Migration
{
    public function up(): void
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price');
            $table->text('description');
            $table->string('gambar');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('positions');
    }
}
