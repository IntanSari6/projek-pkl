<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReqloansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reqloans', function (Blueprint $table) {
            $table->id();
            $table->integer('nip_guru')->unique();
            $table->string('nama_guru');
            $table->string('kelas');
            $table->string('mata_pelajaran');
            $table->string('lab');
            $table->dateTime('mulai');
            $table->dateTime('selesai');
            $table->text('ulasan');
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
        Schema::dropIfExists('reqloans');
    }
}
