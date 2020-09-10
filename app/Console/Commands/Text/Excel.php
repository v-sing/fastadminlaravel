<?php

namespace App\Console\Commands\Text;

use App\Modules\Model\Custom;
use Illuminate\Console\Command;

class Excel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:excel';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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

        $start = memory_get_usage();

        $data   = Custom::query()->take(100000)->get();
        $config = ['path' => public_path('download/excel/')];
        $mid    = memory_get_usage();
        $array=[];
        foreach ($data as $key=>$value){
            foreach (array_keys($data[0]->toArray()) as $index=> $column){
                $array[$key][$index]=$value->$column;
            }
        }
        $writer   = new \Vtiful\Kernel\Excel($config);
        $filePath = $writer->fileName(time() . '.xlsx', 'sheet1')
            ->header(array_keys($data[0]->toArray()))
            ->data($array)->output();
        $end      = memory_get_usage();
        $this->info('Memory_All:'.($end - $start) / 1024 . 'k');
        $this->info('Memory_Mid:'. ($end - $mid) / 1024 . 'k');
    }
}
