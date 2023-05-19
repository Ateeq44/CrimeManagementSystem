<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamilyTreeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_tree', function (Blueprint $table) {
            $table->id();
            $table->string('relation')->nullable();
            $table->string('po')->nullable();
            $table->string('rel_po')->nullable();
            $table->string('passport')->nullable();
            $table->bigInteger('cri_id')->nullable();
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
        Schema::dropIfExists('family_tree');
    }
}
