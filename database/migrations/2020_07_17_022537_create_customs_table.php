<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customs', function (Blueprint $table) {
            $table->string('customid', 8);
            $table->string('personidtype', 10);
            $table->string('personid', 100);
            $table->string('namechinese', 40);
            $table->string('personidissuedate', 10);
            $table->string('personidexdate', 10);
            $table->string('sex', 6);
            $table->string('career', 100);
            $table->string('residaddress', 200);
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
        Schema::dropIfExists('customs');
    }
}
