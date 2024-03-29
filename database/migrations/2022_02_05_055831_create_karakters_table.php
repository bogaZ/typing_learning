<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaraktersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karakters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->integer('type_id');
            $table->integer('bahasa_id');
            $table->integer('pemrograman_id')->nullable();
            $table->string('nama');
            $table->string('karakter', 1000);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('karakters');
    }
}
