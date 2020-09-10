<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auth_groups', function (Blueprint $table) {
            $table->id();
            $table->integer('pid', false)->nullable()->default(0)->comment('父组别');
            $table->string('name', 100)->nullable()->default('')->comment('组名');
            $table->text('rules')->comment('规则ID');
            $table->string('status', 10)->nullable()->default('normal')->comment('状态');
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
        Schema::dropIfExists('auth_groups');
    }
}
