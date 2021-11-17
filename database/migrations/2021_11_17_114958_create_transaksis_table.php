<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('anggota_id')->unsigned();
            $table->integer('kg')->nullable();
            $table->bigInteger('total')->nullable();
            $table->bigInteger('s_sukarela')->nullable();
            $table->string('keterangan')->nullable();
            $table->timestamps();

            $table->foreign('anggota_id')->references('id')->on('anggota')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
