<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAudioVisualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audio_visuals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('evaluation_id')->unsigned();
            $table->float('graphic_grade');
            $table->float('audio_grade');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('evaluation_id')->references('id')->on('evaluations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('audio_visuals');
    }
}
