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
            $table->integer('nip_teacher')->unique();
            $table->string('teacher_name');
            $table->string('class');
            $table->string('subjects');
            $table->string('lab');
            $table->dateTime('start');
            $table->dateTime('finished');
            $table->text('review');
            $table->string('status')->default('process');
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
