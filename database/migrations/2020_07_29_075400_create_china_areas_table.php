<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChinaAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('china_areas', function (Blueprint $table) {
            $table->string('code',6);
            $table->string('name',20);
            $table->string('city_code',10);
            $table->string('city_name',20);
            $table->string('province_code',10);
            $table->string('province_name',20);
            $table->string('country',10);
            $table->integer('level',false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('china_areas');
    }
}
