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
            $table->integer('nip_teacher')->unique();
            $table->string('teacher_name');
            $table->string('class');
            $table->string('subjects');
            $table->integer('lab');
            $table->datetime('start');
            $table->datetime('finished');
            $table->text('review');
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
