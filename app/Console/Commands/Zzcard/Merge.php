<?php

namespace App\Console\Commands\Zzcard;

use Illuminate\Console\Command;
use PhpOffice\PhpSpreadsheet\IOFactory;
use App\Modules\Common\Library\Random;

class Merge extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'zzcard:merge';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '合并一样的会员信息';

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
        $filename = public_path('download/excel/load1.xls');
        $save     = public_path('download/excel/update/');

        //
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
        $exists = [];
        $update = [];
        $index1 = 0;
        $index2=0;
        $name   = Random::uuid();
        foreach ($data as $index => $column) {


            if (in_array($column['personid'], $exists)) {
                continue;
            }
            $exists[] = $column['personid'];
            $update[] = [
                'personid'          => $column['personid'],
                'personidtype'      => $column['personidtype'],
                'personidissuedate' => $column['personidissuedate'],
                'personidexdate'    => $column['personidexdate'],
                'sex'               => $column['sex'],
                'career'            => $column['career'],
                'residaddress'      => $column['residaddress'],
            ];
            if ($index1 == 790) {
                $sql = batchData($update, 'customs', 'personid') ;
                file_put_contents($save . $name . '.sql', $sql . "\n", FILE_APPEND);
                $index1 = 0;
                $update = [];
            }
            $index1++;
            $this->info($index2);
            $index2++;
        }

        if (!empty($update)) {
            $sql = batchData($update, 'customs', 'personid') . ";";
            file_put_contents($save . $name . '.sql', $sql . "\n", FILE_APPEND);
        }

        exit;
    }
}
