<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_loans', function (Blueprint $table) {
            $table->id();
            $table->integer('nip_guru')->unique();
            $table->string('nama_guru');
            $table->string('kelas');
            $table->string('mata_pelajaran');
            $table->integer('lab');
            $table->datetime('mulai');
            $table->datetime('selesai');
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
        Schema::dropIfExists('request_loans');
    }
}
