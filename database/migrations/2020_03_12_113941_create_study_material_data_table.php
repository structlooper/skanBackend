<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudyMaterialDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('study_material_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('created_by_user')->uniqid();
            $table->foreign('created_by_user')->references('id')->on('users');
            $table->unsignedBigInteger('category');
            $table->foreign('category')->references('id')->on('category_datas');
            $table->string('source');
            $table->string('title');
            $table->longText('desc')->nullable();
            $table->mediumText('image')->nullable();
            $table->mediumText('otherDocument')->nullable();
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
        Schema::dropIfExists('study_material_data');
    }
}
