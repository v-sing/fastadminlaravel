<?php

namespace App\Console\Commands\Install;

use App\Modules\Model\Admin;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
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
        //
        Artisan::call('migrate');
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
    }
}
