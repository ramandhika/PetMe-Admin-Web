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
        Schema::create('post', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->date('date');
            $table->enum('status',['1','2']);
            $table->integer('id_user')->unsigned();
            $table->integer('id_animal')->unsigned();
            $table->timestamps();
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_animal')->references('id')->on('animals');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post');
    }
};
