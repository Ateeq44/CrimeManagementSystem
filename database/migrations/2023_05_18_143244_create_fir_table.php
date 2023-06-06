<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fir', function (Blueprint $table) {
            $table->id();
            $table->string('fir_number')->nullable();
            $table->string('crime')->nullable();
            $table->string('remarks')->nullable();
            $table->string('doc')->nullable();
            $table->bigInteger('ps_id')->nullable();
            $table->bigInteger('cri_id')->nullable();
            $table->string('name')->nullable();
            $table->string('fname')->nullable();
            $table->string('cnic')->nullable();
            $table->string('address')->nullable();
            $table->string('loca_crime')->nullable();
            $table->string('incident')->nullable();
            $table->string('phone')->nullable();
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
        Schema::dropIfExists('fir');
    }
}
