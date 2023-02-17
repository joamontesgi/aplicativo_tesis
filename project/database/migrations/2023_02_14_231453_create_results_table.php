<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('benigno_uno');
            $table->integer('ddos_uno');
            $table->integer('dosgoldeneye_uno');
            $table->integer('doshulk_uno');
            $table->integer('dosslowhttptest_uno');
            $table->integer('dossslowloris_uno');
            $table->integer('benigno_dos');
            $table->integer('ddos_dos');
            $table->integer('dosgoldeneye_dos');
            $table->integer('doshulk_dos');
            $table->integer('dosslowhttptest_dos');
            $table->integer('dossslowloris_dos');
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
        Schema::dropIfExists('results');
    }
}
