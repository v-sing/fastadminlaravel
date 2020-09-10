<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('username', 50)->unique()->nullable()->default('')->comment('用户名');
            $table->string('nickname', 60)->unique()->nullable()->default('')->comment('昵称');
            $table->string('password', 255)->nullable()->default('')->comment('密码');
            $table->string('salt', 30)->nullable()->default('')->comment('密码盐');
            $table->string('avatar', 100)->nullable()->default('')->comment('头像');
            $table->string('email', 100)->nullable()->default('')->comment('邮箱');
            $table->integer('loginfailure', false)->nullable()->default(0)->comment('失败次数');
            $table->integer('logintime', false)->nullable()->default(0)->comment('登陆时间');
            $table->string('token', 60)->nullable()->default('')->comment('Session标识');
            $table->string('status', 30)->nullable()->default('normal')->comment('状态');
            $table->string('panterid', 8)->nullable()->default('FFFFFFFF')->comment('商户号');
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
        Schema::dropIfExists('admins');
    }
}
