<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthGroupAccessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auth_group_accesses', function (Blueprint $table) {
            $table->integer('uid', false)->unique()->nullable()->default(0)->comment('会员ID');
            $table->integer('group_id',  false)->unique()->nullable()->default(0)->comment('级别ID');
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
        Schema::dropIfExists('auth_group_accesses');
    }
}
