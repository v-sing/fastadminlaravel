<?php

namespace App\Console\Commands\Zzcard;

use App\Modules\Common\Library\IdentityInformation;
use App\Modules\Common\Library\Random;
use App\Modules\Model\Custom;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class Customs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'zzcard:customs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '批量生成oracle会员更新sql';


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
        $load  = public_path() . '/download/load/customs.sql';
        $save  = public_path() . '/download/update1/';
        $error = public_path() . '/download/error1/' . Random::uuid() . '.sql';
        //
        $handle = fopen($load, "r") or exit("Unable to open file!");

        $index               = 0;
        $number              = 0;
        $num                 = 0;
        $updateArray         = [];
        $IdentityInformation = new IdentityInformation();
        $name                = Random::uuid();

        while (!feof($handle)) {
            $IdentityInformation->getName();
            $IdentityInformation->getIdentity();
            $IdentityInformation->getIndustries();
            $real = $IdentityInformation->info();
            $line = fgets($handle);

            $line1 = $line;
            if (stristr($line, 'Insert into EXPORT_TABLE') === false) {
                file_put_contents($error, $line, FILE_APPEND);
                continue;
            }
            $array = [];
            $line  = trim($line, "\n");
            $info  = insertToArray($line);
            if ($info === false) {
                file_put_contents($error, $line1, FILE_APPEND);
                continue;
            }
            $array['customid'] = $info['customid'];
            if ($info['personidtype'] == '') {
                $array['personidtype'] = $real['document_type'];
            } else {
                $array['personidtype'] = $info['personidtype'];
            }
            if ($info['personid'] == '') {
                $array['personid'] = $real['identity'];
            } else {
                $array['personid'] = $info['personid'];
            }
            if ($info['namechinese'] == '') {
                $array['namechinese'] = $real['name'];
            } else {
                $array['namechinese'] = $info['namechinese'];
            }
            if ($info['personidissuedate'] == '' || $info['personidexdate'] <= date('Ymd')) {
                $array['personidissuedate'] = $real['expire'][0];
            } else {
                $array['personidissuedate'] = $info['personidissuedate'];
            }
            if ($info['personidexdate'] == '' || $info['personidexdate'] <= date('Ymd')) {
                $array['personidexdate'] = $real['expire'][1];
            } else {
                $array['personidexdate'] = $info['personidexdate'];
            }
            if ($info['sex'] == '') {
                $array['sex'] = $real['sex'];
            } else {
                $array['sex'] = $info['sex'];
            }
            if ($info['career'] == '') {
                $array['career'] = $real['industry'];
            } else {
                $array['career'] = $info['career'];
            }
            if ($info['residaddress'] == '') {
                $array['residaddress'] = $real['area'];
            } else {
                $array['residaddress'] = $info['residaddress'];
            }
            if (count($array) == 1) {
                continue;
            }
            $updateArray[] = $array;
            if ($index == 1000) {
                $index = 0;
                if ($num == 700) {
                    $name = Random::uuid();
                    $num  = 0;
                }
                $insert = DB::table('customs')->insert($updateArray);
                $this->info($insert);
//                $updateSql = batchData($updateArray, 'customs', 'customid');
//                file_put_contents($save . $name . '.sql', $updateSql . "\n", FILE_APPEND);
                $updateArray = [];
                $num++;
            }

            $this->info("第{$number}条,sheet:{$num}");
            $index++;
            $number++;

        }
        $num = count($updateArray);
        if (!empty($updateArray)) {
            $updateSql = batchData($updateArray, 'customs', 'customid');
            file_put_contents($save . $name . '.sql', $updateSql . "\n", FILE_APPEND);
            $this->info("最后{$num}条");
        }

    }
}
//cd /home/zzcard/zzcard && nohup /usr/local/php/bin/php cli.php home/CustomDaemon/openCard &