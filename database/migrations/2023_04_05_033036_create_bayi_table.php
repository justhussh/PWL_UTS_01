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
        Schema::create('bayis', function (Blueprint $table) {
            $table->string('no_urut')->primary();
            $table->string('nama');
            $table->string('alamat');
            $table->string('tanggal_lahir');
            $table->string('bb_lahir');
            $table->string('tb_lahir');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bayis');
    }
};
