<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLayanankiloanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layanankiloan', function (Blueprint $table) {
            $table->id();
            $table->string('layanan1');
            $table->string('gambar', 2048)->nullable();
            $table->string('waktu1');
            $table->text('keterangan1');
            $table->string('express1');
            $table->string('normal1');
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
        Schema::dropIfExists('layanankiloan');
    }
}
