<?php

namespace App\Console\Commands\Admin;

use Illuminate\Console\Command;

class Addon extends Command
{

    /**
     *
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'addon {--name=} {--action=} {--force=} {--release=} {--uid=} {--token=} {--local=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Addon manager';

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

        //todo code

        $name   = $this->option('name') ?: '';
        $action = $this->option('action') ?: '';
        if (stripos($name, 'addons/') !== false) {
            $name = explode('/', $name)[1];
        }
        //强制覆盖
        $force = $this->option('force');
        //版本
        $release = $this->option('release') ?: '';
        //uid
        $uid = $this->option('uid') ?: '';
        //token
        $token = $this->option('token') ?: '';

        if (!$name) {
            $this->info('Addon name could not be empty');
            return false;
        }
        if (!$action || !in_array($action, ['create', 'disable', 'enable', 'install', 'uninstall', 'refresh', 'upgrade', 'package'])) {
            $this->info('Please input correct action name');
            return false;
        }
        
    }
}
