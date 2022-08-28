<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBahasaUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('bahasa_users', function (Blueprint $table) {
            // $table->id();
        //     $table->foreignId('user_id');
        //     $table->integer('bahasa_id');
        //     $table->timestamps();
        // });
        Schema::table('users', function (Blueprint $table) {
            $table->bigInteger('bahasa_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('bahasa_users');
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('bahasa_id');
        });
    }
}
