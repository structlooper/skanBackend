<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBatchManagementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batch_managements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('batchId');
            $table->foreign('batchId')->references('id')->on('center_managements');
            $table->string('batchName');
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
        Schema::dropIfExists('batch_managements');
    }
}
