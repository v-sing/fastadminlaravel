<?php

namespace App\Console\Commands\Install;

use App\Modules\Common\Library\Tree;
use App\Modules\Model\Admin;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Initialize extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'install:initialize {--username=} {--email=} {--password=} {--salt=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '初始化项目...';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        ini_set('default_socket_timeout', -1);
        ini_set('memory_limit', -1);
        set_time_limit(0);
//        $info = file_get_contents(public_path() . '/region5.json');
//         $info = str_replace([',children:[]'], [''], $info);
//        file_put_contents(public_path() . '/region6.json', $info);

//        exit;
        $data = DB::table('region')
            ->where('level', '<', 4)->whereNotIn('id', ['47493', '47494', '47495'])->select(DB::raw('id,id as value,name as label,parent_id pid'))->get();
        $data = json_decode(json_encode($data, true), true);
        Tree::instance()->init($data);
        $info = Tree::instance()->getTreeArray(0);
        $info = json_encode($info, 256);
        $info = str_replace(['childlist'], ['children'], $info);
        $info = str_replace(['"children"'], ['children'], $info);
        $info = str_replace([',children:[]'], [''], $info);
        $info = 'let data= ' . str_replace(['"id"', '"value"', '"label"', '"pid"', '"spacer"'], ['id', 'value', 'label', 'pid', 'spacer'], $info) . ';';
        $info .= ' module.exports ={
               
                data:data
        
        }';
        file_put_contents(public_path() . '/region.js', $info);
        $this->info('完成');
        exit;
        Artisan::call('key:generate');
        exec("cd " . dirname(app_path()) . '&&composer update ');
        Artisan::call('migrate');
        Artisan::call('migrate:refresh --seed');
        $username = $this->option('username'); // 用--开头指定参数名
        $email    = $this->option('email'); // 用--开头指定参数名
        $password = $this->option('password'); // 用--开头指定参数名
        $salt     = $this->option('salt'); // 用--开头指定参数名
        $array    = [];
        if ($username) {
            $array['username'] = $username;
        }
        if ($username) {
            $array['email'] = $email;
        }
        if ($password) {
            $array['password'] = Hash::make($salt . $password);
        }
        if ($array) {
            Admin::where('username', 'admin')->update($array);
        }
        $this->info('应用初始化完成');
    }
}
