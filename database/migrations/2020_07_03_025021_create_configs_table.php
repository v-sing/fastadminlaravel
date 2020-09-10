<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configs', function (Blueprint $table) {
            $table->id();
            $table->string('crux_group',50)->default('')->nullable()->comment('分组');
            $table->string('title',50)->default('')->nullable()->comment('变量标题');
            $table->string('name',50)->default('')->nullable()->comment('变量名');
            $table->string('crux_value',600)->default('')->nullable()->comment('变量名');
            $table->string('tip',100)->default('')->nullable()->comment('描述');
            $table->string('type',10)->default('')->nullable()->comment('类型:string,text,bool,array,checkbox,radio,sgin');
            $table->string('crux_rule',300)->default('')->nullable()->comment('验证规则正则');
            $table->string('extend',500)->default('')->nullable()->comment('扩展属性');
            $table->string('content',500)->default('')->nullable()->comment('数据列表');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('configs');
    }
}
