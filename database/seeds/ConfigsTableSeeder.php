<?php

use Illuminate\Database\Seeder;

class ConfigsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('configs')->delete();
        
        \DB::table('configs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'crux_group' => 'basic',
                'title' => 'Site name',
                'name' => 'name',
                'crux_value' => 'FastAdminx',
                'tip' => '请填写站点名称',
                'type' => 'string',
                'crux_rule' => 'required',
                'extend' => '',
                'content' => '',
                'created_at' => NULL,
                'updated_at' => '2020-09-15 11:10:44',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'crux_group' => 'basic',
                'title' => 'Beian',
                'name' => 'beian',
                'crux_value' => '',
                'tip' => '粤ICP备15000000号-1',
                'type' => 'string',
                'crux_rule' => '',
                'extend' => '',
                'content' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'crux_group' => 'basic',
                'title' => 'Cdn url',
                'name' => 'cdnurl',
                'crux_value' => '',
                'tip' => '如果静态资源使用第三方云储存请配置该值',
                'type' => 'string',
                'crux_rule' => '',
                'extend' => '',
                'content' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'crux_group' => 'basic',
                'title' => 'Version',
                'name' => 'version',
                'crux_value' => '1.0.1',
                'tip' => '如果静态资源有变动请重新配置该值',
                'type' => 'string',
                'crux_rule' => 'required',
                'extend' => '',
                'content' => '',
                'created_at' => NULL,
                'updated_at' => '2020-09-15 11:10:44',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'crux_group' => 'basic',
                'title' => 'Timezone',
                'name' => 'timezone',
                'crux_value' => 'Asia/Shanghai',
                'tip' => '',
                'type' => 'string',
                'crux_rule' => 'required',
                'extend' => '',
                'content' => '',
                'created_at' => NULL,
                'updated_at' => '2020-09-15 11:10:44',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'crux_group' => 'basic',
                'title' => 'Forbidden ip',
                'name' => 'forbiddenip',
                'crux_value' => '',
                'tip' => '一行一条记录',
                'type' => 'text',
                'crux_rule' => '',
                'extend' => '',
                'content' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'crux_group' => 'basic',
                'title' => 'Languages',
                'name' => 'languages',
                'crux_value' => '{"backend":"zh-cn","frontend":"zh-cn"}',
                'tip' => '',
                'type' => 'array',
                'crux_rule' => 'required',
                'extend' => '',
                'content' => '',
                'created_at' => NULL,
                'updated_at' => '2020-09-15 11:10:44',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'crux_group' => 'basic',
                'title' => 'Fixed page',
                'name' => 'fixedpage',
                'crux_value' => 'dashboard',
                'tip' => '请尽量输入左侧菜单栏存在的链接',
                'type' => 'string',
                'crux_rule' => 'required',
                'extend' => '',
                'content' => '',
                'created_at' => NULL,
                'updated_at' => '2020-09-15 11:10:44',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'crux_group' => 'dictionary',
                'title' => 'Category type',
                'name' => 'categorytype',
                'crux_value' => '{"default":"Default","page":"Page","article":"Article"}',
                'tip' => '',
                'type' => 'array',
                'crux_rule' => '',
                'extend' => '',
                'content' => '',
                'created_at' => NULL,
                'updated_at' => '2020-09-15 11:15:45',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'crux_group' => 'dictionary',
                'title' => 'Config group',
                'name' => 'configgroup',
                'crux_value' => '{"basic":"Basic","email":"Email","dictionary":"Dictionary","user":"User","example":"Example","aml":"反洗钱系统"}',
                'tip' => '',
                'type' => 'array',
                'crux_rule' => '',
                'extend' => '',
                'content' => '',
                'created_at' => NULL,
                'updated_at' => '2020-09-15 11:15:45',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'crux_group' => 'email',
                'title' => 'Mail type',
                'name' => 'mail_type',
                'crux_value' => '1',
                'tip' => '选择邮件发送方式',
                'type' => 'select',
                'crux_rule' => '',
                'extend' => '',
                'content' => '["Please select","SMTP","Mail"]',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'crux_group' => 'email',
                'title' => 'Mail smtp host',
                'name' => 'mail_smtp_host',
                'crux_value' => 'smtp.qq.com',
                'tip' => '错误的配置发送邮件会导致服务器超时',
                'type' => 'string',
                'crux_rule' => '',
                'extend' => '',
                'content' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'crux_group' => 'email',
                'title' => 'Mail smtp port',
                'name' => 'mail_smtp_port',
                'crux_value' => '465',
            'tip' => '(不加密默认25,SSL默认465,TLS默认587)',
                'type' => 'string',
                'crux_rule' => '',
                'extend' => '',
                'content' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'crux_group' => 'email',
                'title' => 'Mail smtp user',
                'name' => 'mail_smtp_user',
                'crux_value' => '10000',
                'tip' => '（填写完整用户名）',
                'type' => 'string',
                'crux_rule' => '',
                'extend' => '',
                'content' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'crux_group' => 'email',
                'title' => 'Mail smtp password',
                'name' => 'mail_smtp_pass',
                'crux_value' => 'password',
                'tip' => '（填写您的密码）',
                'type' => 'string',
                'crux_rule' => '',
                'extend' => '',
                'content' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'crux_group' => 'email',
                'title' => 'Mail vertify type',
                'name' => 'mail_verify_type',
                'crux_value' => '2',
                'tip' => '（SMTP验证方式[推荐SSL]）',
                'type' => 'select',
                'crux_rule' => '',
                'extend' => '',
                'content' => '["None","TLS","SSL"]',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'crux_group' => 'email',
                'title' => 'Mail from',
                'name' => 'mail_from',
                'crux_value' => '10000@qq.com',
                'tip' => '',
                'type' => 'string',
                'crux_rule' => '',
                'extend' => '',
                'content' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'crux_group' => 'user',
                'title' => 'xx',
                'name' => 'xxx',
                'crux_value' => 'xx',
                'tip' => NULL,
                'type' => 'string',
                'crux_rule' => NULL,
                'extend' => NULL,
                'content' => '',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}