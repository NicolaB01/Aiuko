<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alimenti', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idUtente');
            $table->string('alimento');
            $table->integer('quantita');
            $table->foreign('idUtente')->references('idUtente')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alimenti');
    }
};
