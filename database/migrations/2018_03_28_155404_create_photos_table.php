<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('photos', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('post_id')->unsigned()->index()->nullable();
                $table->integer('video_id')->unsigned()->index()->nullable();
                $table->string('file');

                $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
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
        Schema::drop('photos');
    }

}
