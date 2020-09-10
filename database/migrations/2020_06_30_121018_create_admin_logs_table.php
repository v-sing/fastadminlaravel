<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_logs', function (Blueprint $table) {
            $table->id();
            $table->integer('admin_id', false)->nullable()->default(0)->comment('管理员ID');
            $table->string('username', 20)->nullable()->default('')->comment('管理员名字');
            $table->string('url', 1500)->nullable()->default('')->comment('操作页面');
            $table->string('title', 100)->nullable()->default('')->comment('日志标题');
            $table->text('content')->comment('内容');
            $table->string('ip', 50)->nullable()->default('127.0.0.1')->comment('IP');
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
        Schema::dropIfExists('admin_logs');
    }
}
