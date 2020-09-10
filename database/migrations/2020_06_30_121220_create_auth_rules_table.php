<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auth_rules', function (Blueprint $table) {

            $table->id();
            $table->enum('type', ['menu', 'file'])->nullable()->default('file')->comment('menu为菜单,file为权限节点');
            $table->integer('pid', false)->nullable()->default(0)->comment('父ID');
            $table->string('name', 100)->unique()->nullable()->default('')->comment('规则名称');
            $table->string('title', 50)->nullable()->default('')->comment('规则标题');
            $table->string('icon', 50)->nullable()->default('')->comment('图标');
            $table->string('condition', 255)->nullable()->default('')->comment('条件');
            $table->string('remark', 255)->nullable()->default(0)->comment('备注');
            $table->tinyInteger('ismenu', false)->nullable()->default(0)->comment('是否为菜单');
            $table->integer('weigh', false)->nullable()->default(0)->comment('权重');
            $table->string('status', 30)->nullable()->default('normal')->comment('状态');
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
        Schema::dropIfExists('auth_rules');
    }
}
