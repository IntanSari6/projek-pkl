<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoansLabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans_labs', function (Blueprint $table) {
            $table->id();
            $table->integer('nip_teacher')->unique();
            $table->string('lab_name');
            $table->string('class');
            $table->string('subjects');
            $table->date('date');
            $table->string('duration');
            $table->string('lab');
            $table->string('loan_status');
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
        Schema::dropIfExists('loans_labs');
    }
}
