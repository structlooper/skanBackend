<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMcqsCategoryQuestionDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mcqs_category_question_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category');
            $table->foreign('category')->references('id')->on('category_datas');
            $table->string('questionName');
            $table->string('timeDuration')->nullable();
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
        Schema::dropIfExists('mcqs_category_question_data');
    }
}
