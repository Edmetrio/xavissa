<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContarecebersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contareceber', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->unsignedBigInteger('estado_id');
            $table->foreign('estado_id')->references('id')->on('estado')->onDelete('cascade')->onUpdate('cascade');
            $table->uuid('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nome');
            $table->string('descricao');
            $table->string('recebimento')->nullable();
            $table->double('valor',20,2);
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
        Schema::dropIfExists('contareceber');
    }
}
