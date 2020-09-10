<?php

namespace App\Console\Commands\Zzcard;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\IOFactory;

class Check extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'zzcard:check';

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

        $filename = public_path('download/card/customs.xls');
        $filename1 = public_path('download/card/君邻会-单卡号.xls');
        $data=$this->load($filename);
        $this->load($filename);
        $array = [];
        $cu    = $this->load($filename1);
        foreach ($cu as $key => $item) {
            $array[trim($item['linktel'])][] = $item;
        }
        foreach ($data as $key => $datum) {
            if (!isset($array[trim($datum['linktel'])])) {
                $string = "{$key} {$datum['linktel']} {$datum['namechinese']} 2";
                $this->line($string);
                continue;
            }
            if (count($array[trim($datum['linktel'])]) > 1) {
                $string = "{$key} {$datum['linktel']} {$datum['namechinese']} 1";
                $this->line($string);
                continue;
            }

            if (count($array[trim($datum['linktel'])]) == 1 && $array[trim($datum['linktel'])][0]['cuname'] != $datum['namechinese']) {
                $string = "{$key} {$datum['linktel']} {$datum['namechinese']} {$array[$datum['linktel']][0]['cuname']} 3";
                $this->line($string);
                continue;
            }

        }
    }


    public function load($filename){


        $objReader = IOFactory::createReader('Xls');

        $objPHPExcel = $objReader->load($filename);  //$filename可以是上传的表格，或者是指定的表格
        $sheet       = $objPHPExcel->getSheet(0);   //excel中的第一张sheet
        $highestRow  = $sheet->getHighestRow();       // 取得总行数
        //定义$usersExits，循环表格的时候，找出已存在的用户。
        $usersExits = [];
        $set        = [];
        $data       = [];
        //循环读取excel表格，整合成数组。如果是不指定key的二维，就用$data[i][j]表示。
        $field = [];

        $colunm = range('A', 'K');
        foreach ($colunm as $item) {
            $field[$item] = strtolower($objPHPExcel->getActiveSheet()->getCell($item . 1)->getValue());
        }
        for ($j = 2; $j <= $highestRow; $j++) {
            foreach ($field as $colunm => $item) {
                $data[$j - 2][$item] = $objPHPExcel->getActiveSheet()->getCell($colunm . $j)->getValue();
            }
        }

        return $data;
    }
}
