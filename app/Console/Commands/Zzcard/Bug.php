<?php

namespace App\Console\Commands\Zzcard;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\IOFactory;

class Bug extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'zzcard:bug';

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
        $filename  = public_path('download/bug/备份.xls');
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


        foreach ($data as $item) {
            $this->info("delete from customs_c where cid='{$item['customid']}';");
            $this->info("delete from customs where customid='{$item['customid']}';");
        }


        exit;

        $array = DB::table('cards')->whereIn('cardno', array_column($data, 'cardno'))->get();

        $cardno = [];
        foreach ($array as $item) {
            $cardno[$item->cardno] = $item;
        }

        $add = [];
        foreach ($data as $item) {
            if (isset($cardno[$item['cardno']])) {
                $this->info("update cards set customid='{$cardno[$item['cardno']]->customid}' where cardno ='{$item['cardno']}' and customid='{$item['customid']}';");
            } else {
                $add[] = $item['cardno'];
            }

        }
        dump($add);

    }
}
