<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLayanansatuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layanansatuan', function (Blueprint $table) {
            $table->id();
            $table->string('tambah2');
            $table->string('gambar2');
            $table->string('waktu2');
            $table->text('keterangan2');
            $table->string('size2');
            $table->string('harga2');
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
        Schema::dropIfExists('layanansatuan');
    }
}
