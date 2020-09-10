<?php

namespace App\Console\Commands\Zzcard;

use App\Modules\Common\Library\Des;
use App\Modules\Common\Library\Guzzle;
use GuzzleHttp\Client;
use Illuminate\Console\Command;

class Realname extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'zzcard:realname';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '根据日志，还原数据';

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
        $client = new Guzzle();
        $path   = public_path('download/log');
        $files  = loadRoutesFile($path);
        config(['des_key' => 'GDgLwwdK270Qj1w4xho8lyTp']);
        $des = new Des();
        foreach ($files as $index => $file) {
            $content = file_get_contents($file);
            preg_match_all("/\{.*?\}/", $content, $m);
            foreach ($m[0] as $key => $value) {
//                $data           = json_decode($value, true);
                $encrypt        = $des->encrypt($value);
                $data['datami'] = $encrypt;
                $result         = $client->post('http://10.1.1.35', '/zzkp.php/tongbao/tbRealName', $data);
                $this->info($result);
            }
        }

    }
}
