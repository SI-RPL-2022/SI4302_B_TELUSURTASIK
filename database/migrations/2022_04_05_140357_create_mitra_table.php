<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMitraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TambahWisata', function (Blueprint $table) {
            $table->id();
            $table->String('nama_wisata');
            $table->String('nama');
            $table->String('no_hp');
            $table->String('jam');
            $table->String('alamat');
            $table->Text('deskripsi');
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
        Schema::dropIfExists('TambahWisata');
    }
}
