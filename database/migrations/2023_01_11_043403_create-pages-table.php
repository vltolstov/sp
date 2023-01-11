<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('page_type_id')->unsigned()->default(1);
            $table->string('name', 50)->nullable();
            $table->integer('slug_id')->unsigned();
            $table->integer('image_id')->unsigned()->nullable();
            $table->integer('category_id')->unsigned()->default(0);
            $table->integer('seo_set_id')->unsigned()->nullable();
            $table->integer('parametr_set_id')->unsigned()->nullable();
            $table->integer('content_set_id')->unsigned()->nullable();
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
        //
    }
};
