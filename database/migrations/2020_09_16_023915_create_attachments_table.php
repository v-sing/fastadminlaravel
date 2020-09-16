<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachments', function (Blueprint $table) {
            $table->id();
            $table->string('admin_id', 11)->nullable()->default(0)->comment('管理员ID');
            $table->string('user_id', 11)->nullable()->default(0)->comment('会员ID');
            $table->string('url', 255)->comment('物理路径');
            $table->string('imagewidth', 30)->comment('宽度');
            $table->string('imageheight', 30)->comment('高度');
            $table->string('imagetype', 30)->comment('图片类型');
            $table->integer('imageframes', false)->nullable()->default(0)->comment('图片帧数');
            $table->integer('filesize', false)->nullable()->default(0)->comment('文件大小');
            $table->string('mimetype', 100)->comment('mime类型');
            $table->string('extparam', 255)->comment('透传数据');
            $table->timestamp('uploadtime')->nullable()->comment('上传时间');
            $table->string('storage', 100)->nullable()->default('local')->comment('存储位置');
            $table->string('sha1', 40)->comment('文件 sha1编码');
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
        Schema::dropIfExists('attachments');
    }
}
