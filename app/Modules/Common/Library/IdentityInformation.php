<?php
/**
 * Created by PhpStorm.
 * User: zhoulongtao
 * Date: 2020-07-15
 * Time: 17:41
 */

namespace App\Modules\Common\Library;


use AlicFeng\IdentityCard\IdentityCard;
use AlicFeng\IdentityCard\InfoHelper;
use App\Modules\Model\Industry;
use App\Modules\Model\Region;
use function GuzzleHttp\Psr7\str;
use Illuminate\Support\Facades\Cache;

class IdentityInformation
{
    protected $region = [];
    protected $region_all = [];
    protected $region_all_array = [];
    protected $region_count = 0;
    protected $expire = ['5', '10', '15', '20'];
    protected $industry = [];

    public function __construct()
    {

        $this->region = cache('region') ?? [];
        if (!cache('region')) {
            $this->region = Region::query()->where('region_code', 'like', '41%')->whereIn('region_level', [2, 3])->get();
            Cache::forever('region', $this->region);
        }
        $this->region_count = count($this->region) - 1;
        $this->region_all   = cache('region_all') ?? [];
        if (!cache('region_all')) {
            $this->region_all = Region::query()->get();
            Cache::forever('region_all', $this->region_all);
        }
        $this->region_all_array = $this->region_all->toArray();

        $this->industry = cache('industry') ?? [];
        if (!cache('industry')) {
            $this->industry = Industry::query()->whereNotIn('upid', ['a', 'b', 'c', 'd', 'e'])->get();
            Cache::forever('industry', $this->industry);

        }
    }

    protected $info = [
        'nationality'   => '中国',
        'document_type' => '身份证'
    ];

    public function getIdentity()
    {
        $index = rand(0, $this->region_count);
        $info  = $this->region[$index];
        $first = $this->identityParent($info->parent_region_code);
        $area  = $first->region_name . $info->region_name;
        if ($info->region_level == 3) {
            $first1 = $this->identityParent($first->parent_region_code);
            $area   = $first1->region_name . $area;
        }
        //身份证起止年月 eg：1990年12月31日  mktime(0,0,0,12,31,1990)
        $Year_start = mktime(0, 0, 0, 1, 1, 1978);
        $Year_end   = mktime(0, 0, 0, 12, 31, 2000);

        $Birth                  = mt_rand($Year_start, $Year_end);
        $Birth_format           = date('Ymd', $Birth);
        $suffix_a               = mt_rand(0, 9);
        $suffix_b               = mt_rand(0, 9);
        $suffix_c               = mt_rand(0, 9);//male or female
        $base                   = $info->region_code . $Birth_format . $suffix_a . $suffix_b . $suffix_c;
        $content                = $base . $this->calc_suffix_d($base);
        $this->info['identity'] = $content;
        $this->info['area']     = $area;
        $year                   = $this->expire[rand(0, 3)];
        $month                  = str_pad(rand(1, 12), '2', '0', STR_PAD_LEFT);
        $day                    = str_pad(rand(1, 28), '2', '0', STR_PAD_LEFT);
        $endtime                = date('Y', strtotime('+' . ceil($year / 2) . ' year')) . $month . $day;
        $starttime              = date('Ymd', strtotime('-' . $year . 'year', strtotime($endtime)));
        $this->info['expire']   = [$starttime, $endtime];
        $map                    = ['F' => '男', 'M' => '女'];
        $this->info['sex']      = $map[InfoHelper::identityCard()->sex($content)];
    }

    public function getName()
    {
        $RndChinaName       = new RndChinaName();
        $this->info['name'] = $RndChinaName->getName(rand(1, 2));
    }

    protected function identityParent($pid)
    {
        $region_codes = array_column($this->region_all_array, 'region_code');
        $index        = array_search($pid, $region_codes);
        return $this->region_all[$index];
    }


    public function getIndustries()
    {
        $index                  = rand(0, count($this->industry) - 1);
        $this->info['industry'] = $this->industry[$index]->name;
    }

    public function info()
    {
        return $this->info;

    }

    protected function calc_suffix_d($base)
    {
        if (strlen($base) <> 17) {
            die('Invalid Length');
        }
        $factor = array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2);
        $sums   = 0;
        for ($i = 0; $i < 17; $i++) {

            $sums += substr($base, $i, 1) * $factor[$i];
        }

        $mods = $sums % 11;//10X98765432

        switch ($mods) {
            case 0:
                return '1';
                break;
            case 1:
                return '0';
                break;
            case 2:
                return 'x';
                break;
            case 3:
                return '9';
                break;
            case 4:
                return '8';
                break;
            case 5:
                return '7';
                break;
            case 6:
                return '6';
                break;
            case 7:
                return '5';
                break;
            case 8:
                return '4';
                break;
            case 9:
                return '3';
                break;
            case 10:
                return '2';
                break;

        }

    }

}