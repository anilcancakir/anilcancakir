<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEpisodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('episodes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('series_id');
            $table->unsignedSmallInteger('episode');
            /* @noinspection PhpUndefinedMethodInspection */
            $table->string('title', 127)->index();
            $table->text('description');
            $table->string('video', 127);
            $table->timestamps();

            /* @noinspection PhpUndefinedMethodInspection */
            $table->foreign('series_id')
                ->references('id')->on('series')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('episodes', function (Blueprint $table) {
            $table->dropForeign(['series_id']);
        });

        Schema::dropIfExists('episodes');
    }
}
