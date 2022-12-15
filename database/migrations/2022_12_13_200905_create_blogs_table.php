<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function(Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();
            $table->string('title', 255)->nullable();
            $table->string('slug')->nullable();
            $table->integer('Blogcategory_id')->unsigned()->nullable()->index();
            $table->string('description', 1000)->nullable();
            $table->string('photo')->nullable();
            $table->string('seoname')->nullable();
            $table->string('metabody')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('blogs');
    }
}
