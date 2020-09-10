<?php

namespace App\Console\Commands\Zzcard;

use Illuminate\Console\Command;
use PhpOffice\PhpSpreadsheet\IOFactory;

class Card extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'zzcard:card';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'zzcard:card';

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

        $filename = public_path('download/card/exc.xls');

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

        $array = [];
        foreach ($data as $key => $value) {

            $array[$value['customid']][] = $value;

        }

        $array_888 = [];
        $array_688 = [];
        $array_000 = [];

        $array_cardno = [];
        $array_delete = [];
        foreach ($array as $key => $value) {


            //实际重复卡
            $cardno = array_unique(array_column($value, 'cardno'));

            //包含金额的
            //不包含金额的
            $item_amount   = [];
            $item_amount_0 = [];
            foreach ($value as $item) {
                if ($item['amount'] == 0) {
                    $item_amount_0[] = $item;
                } else {
                    $item_amount[] = $item;
                }
            }
            $real_accountid  = [];
            $real_accountid0 = [];
            $accountid       = [];
            $accountid0      = [];
            if (!empty($item_amount)) {
                $array_000[$key] = $value;
                $accountid       = array_unique(array_column($item_amount, 'accountid'));
                $accountid0      = array_unique(array_column($item_amount_0, 'accountid'));
                continue;
            } else {
                $accountid0 = array_unique(array_column($item_amount_0, 'accountid'));
            }
            foreach ($accountid as $key2 => $value) {
                $real_accountid[] = $item_amount[$key2];
            }
            foreach ($accountid0 as $key2 => $value) {
                $real_accountid0[] = $item_amount_0[$key2];
            }
            $card_array = [];
            foreach ($cardno as $value2) {

                foreach ($real_accountid0 as $key12 => $item2) {
                    if ($item2['type'] == '00') {
                        $card_array[$value2][] = $item2;
                        unset($real_accountid0[$key12]);
                        break;
                    }
                }
                foreach ($real_accountid0 as $key12 => $item2) {
                    if ($item2['type'] == '01') {
                        $card_array[$value2][] = $item2;
                        unset($real_accountid0[$key12]);
                        break;
                    }
                }
                foreach ($real_accountid0 as $key12 => $item2) {
                    if ($item2['type'] == '02') {
                        $card_array[$value2][] = $item2;
                        unset($real_accountid0[$key12]);
                        break;
                    }
                }
                foreach ($real_accountid0 as $key12 => $item2) {
                    if ($item2['type'] == '03') {
                        $card_array[$value2][] = $item2;
                        unset($real_accountid0[$key12]);
                        break;
                    }
                }
                foreach ($real_accountid0 as $key12 => $item2) {
                    if ($item2['type'] == '04') {
                        $card_array[$value2][] = $item2;
                        unset($real_accountid0[$key12]);
                        break;
                    }
                }
            }
            $array_cardno[] = $card_array;
            $array_delete[] = $real_accountid0;
        }

        foreach ($array_000 as $customid=> $item){
            $this->line($customid);
        }
        exit;
        dump(count($array_000));exit;
        foreach ($array_cardno as $key => $item) {
            $index = 0;
            foreach ($item as $cardno => $accounts) {
                if ($index == 0) {
                    $index++;
                    continue;
                }
                $account_update = "update cards set customid=replace(lpad(get_seq('seq_customid'),8),' ','0') where cardno='{$cardno}';";
                $this->line($account_update);
                $account_update = "insert into customs_c values ('{$accounts[0]['customid']}',(select customid from cards where cardno='{$cardno}'));";
                $this->line($account_update);
                foreach ($accounts as $account) {
                    $account_update = "update account set customid=(select customid from cards where cardno='{$cardno}') where accountid='{$account['accountid']}';";
                    $this->line($account_update);
                }
                if (strstr($cardno, '6888') !== false) {
                    $account_update = "update quan_account set customid=(select customid from cards where cardno='{$cardno}') where customid='{$accounts[0]['customid']}';";
                    $this->line($account_update);
                    $account_update = "update quancz set customid=(select customid from cards where cardno='{$cardno}') where customid='{$accounts[0]['customid']}';";
                    $this->line($account_update);
                }
                $index++;
            }


            foreach ($array_delete[$key] as $key1 => $value) {
                $account_update = "delete from  account where accountid='{$value['accountid']}';";
                $this->line($account_update);
            }
            $this->line('');
            $this->line('');
            $this->line('');
            $this->line('');

        }
        exit;
    }
}
