<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('regions')->delete();
        
        \DB::table('regions')->insert(array (
            0 => 
            array (
                'region_code' => '131121',
                'region_name' => '枣强县',
                'region_level' => 3,
                'parent_region_code' => '131100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'region_code' => '131122',
                'region_name' => '武邑县',
                'region_level' => 3,
                'parent_region_code' => '131100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'region_code' => '131123',
                'region_name' => '武强县',
                'region_level' => 3,
                'parent_region_code' => '131100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'region_code' => '131124',
                'region_name' => '饶阳县',
                'region_level' => 3,
                'parent_region_code' => '131100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'region_code' => '131125',
                'region_name' => '安平县',
                'region_level' => 3,
                'parent_region_code' => '131100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'region_code' => '131126',
                'region_name' => '故城县',
                'region_level' => 3,
                'parent_region_code' => '131100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'region_code' => '131127',
                'region_name' => '景县',
                'region_level' => 3,
                'parent_region_code' => '131100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'region_code' => '131128',
                'region_name' => '阜城县',
                'region_level' => 3,
                'parent_region_code' => '131100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'region_code' => '131181',
                'region_name' => '冀州市',
                'region_level' => 3,
                'parent_region_code' => '131200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'region_code' => '131182',
                'region_name' => '深州市',
                'region_level' => 3,
                'parent_region_code' => '131200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'region_code' => '140000',
                'region_name' => '山西省',
                'region_level' => 1,
                'parent_region_code' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'region_code' => '140100',
                'region_name' => '太原市',
                'region_level' => 2,
                'parent_region_code' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'region_code' => '140101',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '140100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'region_code' => '140105',
                'region_name' => '小店区',
                'region_level' => 3,
                'parent_region_code' => '140100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'region_code' => '140106',
                'region_name' => '迎泽区',
                'region_level' => 3,
                'parent_region_code' => '140100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'region_code' => '140107',
                'region_name' => '杏花岭区',
                'region_level' => 3,
                'parent_region_code' => '140100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'region_code' => '140108',
                'region_name' => '尖草坪区',
                'region_level' => 3,
                'parent_region_code' => '140100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'region_code' => '140109',
                'region_name' => '万柏林区',
                'region_level' => 3,
                'parent_region_code' => '140100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'region_code' => '140110',
                'region_name' => '晋源区',
                'region_level' => 3,
                'parent_region_code' => '140100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'region_code' => '140121',
                'region_name' => '清徐县',
                'region_level' => 3,
                'parent_region_code' => '140100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'region_code' => '140122',
                'region_name' => '阳曲县',
                'region_level' => 3,
                'parent_region_code' => '140100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'region_code' => '140123',
                'region_name' => '娄烦县',
                'region_level' => 3,
                'parent_region_code' => '140100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'region_code' => '140181',
                'region_name' => '古交市',
                'region_level' => 3,
                'parent_region_code' => '140200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'region_code' => '140200',
                'region_name' => '大同市',
                'region_level' => 2,
                'parent_region_code' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'region_code' => '140201',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '140200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'region_code' => '140202',
                'region_name' => '城区',
                'region_level' => 3,
                'parent_region_code' => '140200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'region_code' => '140203',
                'region_name' => '矿区',
                'region_level' => 3,
                'parent_region_code' => '140200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'region_code' => '140211',
                'region_name' => '南郊区',
                'region_level' => 3,
                'parent_region_code' => '140200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'region_code' => '140212',
                'region_name' => '新荣区',
                'region_level' => 3,
                'parent_region_code' => '140200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'region_code' => '140221',
                'region_name' => '阳高县',
                'region_level' => 3,
                'parent_region_code' => '140200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'region_code' => '140222',
                'region_name' => '天镇县',
                'region_level' => 3,
                'parent_region_code' => '140200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'region_code' => '140223',
                'region_name' => '广灵县',
                'region_level' => 3,
                'parent_region_code' => '140200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'region_code' => '140224',
                'region_name' => '灵丘县',
                'region_level' => 3,
                'parent_region_code' => '140200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'region_code' => '140225',
                'region_name' => '浑源县',
                'region_level' => 3,
                'parent_region_code' => '140200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'region_code' => '140226',
                'region_name' => '左云县',
                'region_level' => 3,
                'parent_region_code' => '140200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'region_code' => '140227',
                'region_name' => '大同县',
                'region_level' => 3,
                'parent_region_code' => '140200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'region_code' => '140300',
                'region_name' => '阳泉市',
                'region_level' => 2,
                'parent_region_code' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'region_code' => '140301',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '140300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'region_code' => '140302',
                'region_name' => '城区',
                'region_level' => 3,
                'parent_region_code' => '140300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'region_code' => '140303',
                'region_name' => '矿区',
                'region_level' => 3,
                'parent_region_code' => '140300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'region_code' => '140311',
                'region_name' => '郊区',
                'region_level' => 3,
                'parent_region_code' => '140300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'region_code' => '140321',
                'region_name' => '平定县',
                'region_level' => 3,
                'parent_region_code' => '140300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'region_code' => '140322',
                'region_name' => '盂县',
                'region_level' => 3,
                'parent_region_code' => '140300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'region_code' => '140400',
                'region_name' => '长治市',
                'region_level' => 2,
                'parent_region_code' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'region_code' => '140401',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '140400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'region_code' => '140402',
                'region_name' => '城区',
                'region_level' => 3,
                'parent_region_code' => '140400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'region_code' => '140411',
                'region_name' => '郊区',
                'region_level' => 3,
                'parent_region_code' => '140400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'region_code' => '140421',
                'region_name' => '长治县',
                'region_level' => 3,
                'parent_region_code' => '140400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'region_code' => '140423',
                'region_name' => '襄垣县',
                'region_level' => 3,
                'parent_region_code' => '140400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'region_code' => '140424',
                'region_name' => '屯留县',
                'region_level' => 3,
                'parent_region_code' => '140400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'region_code' => '140425',
                'region_name' => '平顺县',
                'region_level' => 3,
                'parent_region_code' => '140400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'region_code' => '140426',
                'region_name' => '黎城县',
                'region_level' => 3,
                'parent_region_code' => '140400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'region_code' => '140427',
                'region_name' => '壶关县',
                'region_level' => 3,
                'parent_region_code' => '140400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'region_code' => '140428',
                'region_name' => '长子县',
                'region_level' => 3,
                'parent_region_code' => '140400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'region_code' => '140429',
                'region_name' => '武乡县',
                'region_level' => 3,
                'parent_region_code' => '140400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'region_code' => '140430',
                'region_name' => '沁县',
                'region_level' => 3,
                'parent_region_code' => '140400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'region_code' => '140431',
                'region_name' => '沁源县',
                'region_level' => 3,
                'parent_region_code' => '140400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'region_code' => '140481',
                'region_name' => '潞城市',
                'region_level' => 3,
                'parent_region_code' => '140500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'region_code' => '140500',
                'region_name' => '晋城市',
                'region_level' => 2,
                'parent_region_code' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'region_code' => '140501',
                'region_name' => '晋城市市辖区',
                'region_level' => 3,
                'parent_region_code' => '140500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'region_code' => '140502',
                'region_name' => '城区',
                'region_level' => 3,
                'parent_region_code' => '140500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'region_code' => '140521',
                'region_name' => '沁水县',
                'region_level' => 3,
                'parent_region_code' => '140500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'region_code' => '140522',
                'region_name' => '阳城县',
                'region_level' => 3,
                'parent_region_code' => '140500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'region_code' => '140524',
                'region_name' => '陵川县',
                'region_level' => 3,
                'parent_region_code' => '140500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'region_code' => '140525',
                'region_name' => '泽州县',
                'region_level' => 3,
                'parent_region_code' => '140500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'region_code' => '140581',
                'region_name' => '高平市',
                'region_level' => 3,
                'parent_region_code' => '140600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'region_code' => '140600',
                'region_name' => '朔州市',
                'region_level' => 2,
                'parent_region_code' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'region_code' => '140601',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '140600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'region_code' => '140602',
                'region_name' => '朔城区',
                'region_level' => 3,
                'parent_region_code' => '140600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'region_code' => '140603',
                'region_name' => '平鲁区',
                'region_level' => 3,
                'parent_region_code' => '140600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'region_code' => '140621',
                'region_name' => '山阴县',
                'region_level' => 3,
                'parent_region_code' => '140600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'region_code' => '140622',
                'region_name' => '应县',
                'region_level' => 3,
                'parent_region_code' => '140600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'region_code' => '140623',
                'region_name' => '右玉县',
                'region_level' => 3,
                'parent_region_code' => '140600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'region_code' => '140624',
                'region_name' => '怀仁县',
                'region_level' => 3,
                'parent_region_code' => '140600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'region_code' => '140700',
                'region_name' => '晋中市',
                'region_level' => 2,
                'parent_region_code' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'region_code' => '140701',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '140700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'region_code' => '140702',
                'region_name' => '榆次区',
                'region_level' => 3,
                'parent_region_code' => '140700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'region_code' => '140721',
                'region_name' => '榆社县',
                'region_level' => 3,
                'parent_region_code' => '140700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'region_code' => '140722',
                'region_name' => '左权县',
                'region_level' => 3,
                'parent_region_code' => '140700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'region_code' => '140723',
                'region_name' => '和顺县',
                'region_level' => 3,
                'parent_region_code' => '140700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'region_code' => '140724',
                'region_name' => '昔阳县',
                'region_level' => 3,
                'parent_region_code' => '140700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'region_code' => '140725',
                'region_name' => '寿阳县',
                'region_level' => 3,
                'parent_region_code' => '140700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'region_code' => '140726',
                'region_name' => '太谷县',
                'region_level' => 3,
                'parent_region_code' => '140700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'region_code' => '140727',
                'region_name' => '祁县',
                'region_level' => 3,
                'parent_region_code' => '140700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'region_code' => '140728',
                'region_name' => '平遥县',
                'region_level' => 3,
                'parent_region_code' => '140700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'region_code' => '140729',
                'region_name' => '灵石县',
                'region_level' => 3,
                'parent_region_code' => '140700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'region_code' => '140781',
                'region_name' => '介休市',
                'region_level' => 3,
                'parent_region_code' => '140800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'region_code' => '140800',
                'region_name' => '运城市',
                'region_level' => 2,
                'parent_region_code' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'region_code' => '140801',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '140800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'region_code' => '140802',
                'region_name' => '盐湖区',
                'region_level' => 3,
                'parent_region_code' => '140800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'region_code' => '140821',
                'region_name' => '临猗县',
                'region_level' => 3,
                'parent_region_code' => '140800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'region_code' => '140822',
                'region_name' => '万荣县',
                'region_level' => 3,
                'parent_region_code' => '140800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'region_code' => '140823',
                'region_name' => '闻喜县',
                'region_level' => 3,
                'parent_region_code' => '140800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'region_code' => '140824',
                'region_name' => '稷山县',
                'region_level' => 3,
                'parent_region_code' => '140800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'region_code' => '140825',
                'region_name' => '新绛县',
                'region_level' => 3,
                'parent_region_code' => '140800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'region_code' => '140826',
                'region_name' => '绛县',
                'region_level' => 3,
                'parent_region_code' => '140800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'region_code' => '140827',
                'region_name' => '垣曲县',
                'region_level' => 3,
                'parent_region_code' => '140800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'region_code' => '140828',
                'region_name' => '夏县',
                'region_level' => 3,
                'parent_region_code' => '140800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'region_code' => '140829',
                'region_name' => '平陆县',
                'region_level' => 3,
                'parent_region_code' => '140800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'region_code' => '140830',
                'region_name' => '芮城县',
                'region_level' => 3,
                'parent_region_code' => '140800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'region_code' => '140881',
                'region_name' => '永济市',
                'region_level' => 3,
                'parent_region_code' => '140900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'region_code' => '140882',
                'region_name' => '河津市',
                'region_level' => 3,
                'parent_region_code' => '140900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'region_code' => '140900',
                'region_name' => '忻州市',
                'region_level' => 2,
                'parent_region_code' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'region_code' => '140901',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '140900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'region_code' => '140902',
                'region_name' => '忻府区',
                'region_level' => 3,
                'parent_region_code' => '140900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'region_code' => '140921',
                'region_name' => '定襄县',
                'region_level' => 3,
                'parent_region_code' => '140900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'region_code' => '140922',
                'region_name' => '五台县',
                'region_level' => 3,
                'parent_region_code' => '140900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'region_code' => '140923',
                'region_name' => '代县',
                'region_level' => 3,
                'parent_region_code' => '140900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'region_code' => '140924',
                'region_name' => '繁峙县',
                'region_level' => 3,
                'parent_region_code' => '140900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'region_code' => '140925',
                'region_name' => '宁武县',
                'region_level' => 3,
                'parent_region_code' => '140900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'region_code' => '140926',
                'region_name' => '静乐县',
                'region_level' => 3,
                'parent_region_code' => '140900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'region_code' => '140927',
                'region_name' => '神池县',
                'region_level' => 3,
                'parent_region_code' => '140900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'region_code' => '140928',
                'region_name' => '五寨县',
                'region_level' => 3,
                'parent_region_code' => '140900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'region_code' => '140929',
                'region_name' => '岢岚县',
                'region_level' => 3,
                'parent_region_code' => '140900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'region_code' => '140930',
                'region_name' => '河曲县',
                'region_level' => 3,
                'parent_region_code' => '140900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'region_code' => '140931',
                'region_name' => '保德县',
                'region_level' => 3,
                'parent_region_code' => '140900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'region_code' => '140932',
                'region_name' => '偏关县',
                'region_level' => 3,
                'parent_region_code' => '140900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'region_code' => '140981',
                'region_name' => '原平市',
                'region_level' => 3,
                'parent_region_code' => '141000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'region_code' => '141000',
                'region_name' => '临汾市',
                'region_level' => 2,
                'parent_region_code' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'region_code' => '141001',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '141000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'region_code' => '141002',
                'region_name' => '尧都区',
                'region_level' => 3,
                'parent_region_code' => '141000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'region_code' => '141021',
                'region_name' => '曲沃县',
                'region_level' => 3,
                'parent_region_code' => '141000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'region_code' => '141022',
                'region_name' => '翼城县',
                'region_level' => 3,
                'parent_region_code' => '141000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'region_code' => '141023',
                'region_name' => '襄汾县',
                'region_level' => 3,
                'parent_region_code' => '141000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'region_code' => '141024',
                'region_name' => '洪洞县',
                'region_level' => 3,
                'parent_region_code' => '141000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'region_code' => '141025',
                'region_name' => '古县',
                'region_level' => 3,
                'parent_region_code' => '141000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'region_code' => '141026',
                'region_name' => '安泽县',
                'region_level' => 3,
                'parent_region_code' => '141000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'region_code' => '141027',
                'region_name' => '浮山县',
                'region_level' => 3,
                'parent_region_code' => '141000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'region_code' => '141028',
                'region_name' => '吉县',
                'region_level' => 3,
                'parent_region_code' => '141000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'region_code' => '141029',
                'region_name' => '乡宁县',
                'region_level' => 3,
                'parent_region_code' => '141000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'region_code' => '141030',
                'region_name' => '大宁县',
                'region_level' => 3,
                'parent_region_code' => '141000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'region_code' => '141031',
                'region_name' => '隰县',
                'region_level' => 3,
                'parent_region_code' => '141000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'region_code' => '141032',
                'region_name' => '永和县',
                'region_level' => 3,
                'parent_region_code' => '141000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'region_code' => '141033',
                'region_name' => '蒲县',
                'region_level' => 3,
                'parent_region_code' => '141000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'region_code' => '141034',
                'region_name' => '汾西县',
                'region_level' => 3,
                'parent_region_code' => '141000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'region_code' => '141081',
                'region_name' => '侯马市',
                'region_level' => 3,
                'parent_region_code' => '141100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'region_code' => '141082',
                'region_name' => '霍州市',
                'region_level' => 3,
                'parent_region_code' => '141100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'region_code' => '141100',
                'region_name' => '吕梁市',
                'region_level' => 2,
                'parent_region_code' => '140000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'region_code' => '141101',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '141100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'region_code' => '141102',
                'region_name' => '离石区',
                'region_level' => 3,
                'parent_region_code' => '141100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'region_code' => '141121',
                'region_name' => '文水县',
                'region_level' => 3,
                'parent_region_code' => '141100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'region_code' => '141122',
                'region_name' => '交城县',
                'region_level' => 3,
                'parent_region_code' => '141100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'region_code' => '141123',
                'region_name' => '兴县',
                'region_level' => 3,
                'parent_region_code' => '141100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'region_code' => '141124',
                'region_name' => '临县',
                'region_level' => 3,
                'parent_region_code' => '141100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'region_code' => '141125',
                'region_name' => '柳林县',
                'region_level' => 3,
                'parent_region_code' => '141100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'region_code' => '141126',
                'region_name' => '石楼县',
                'region_level' => 3,
                'parent_region_code' => '141100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'region_code' => '141127',
                'region_name' => '岚县',
                'region_level' => 3,
                'parent_region_code' => '141100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'region_code' => '141128',
                'region_name' => '方山县',
                'region_level' => 3,
                'parent_region_code' => '141100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'region_code' => '141129',
                'region_name' => '中阳县',
                'region_level' => 3,
                'parent_region_code' => '141100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'region_code' => '141130',
                'region_name' => '交口县',
                'region_level' => 3,
                'parent_region_code' => '141100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'region_code' => '141181',
                'region_name' => '孝义市',
                'region_level' => 3,
                'parent_region_code' => '141200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'region_code' => '141182',
                'region_name' => '汾阳市',
                'region_level' => 3,
                'parent_region_code' => '141200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'region_code' => '150000',
                'region_name' => '内蒙古自治区',
                'region_level' => 1,
                'parent_region_code' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'region_code' => '150100',
                'region_name' => '呼和浩特市',
                'region_level' => 2,
                'parent_region_code' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'region_code' => '150101',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '150100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'region_code' => '150102',
                'region_name' => '新城区',
                'region_level' => 3,
                'parent_region_code' => '150100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'region_code' => '150103',
                'region_name' => '回民区',
                'region_level' => 3,
                'parent_region_code' => '150100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'region_code' => '150104',
                'region_name' => '玉泉区',
                'region_level' => 3,
                'parent_region_code' => '150100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'region_code' => '150105',
                'region_name' => '赛罕区',
                'region_level' => 3,
                'parent_region_code' => '150100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'region_code' => '150121',
                'region_name' => '土默特左旗',
                'region_level' => 3,
                'parent_region_code' => '150100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'region_code' => '150122',
                'region_name' => '托克托县',
                'region_level' => 3,
                'parent_region_code' => '150100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'region_code' => '150123',
                'region_name' => '和林格尔县',
                'region_level' => 3,
                'parent_region_code' => '150100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'region_code' => '150124',
                'region_name' => '清水河县',
                'region_level' => 3,
                'parent_region_code' => '150100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'region_code' => '150125',
                'region_name' => '武川县',
                'region_level' => 3,
                'parent_region_code' => '150100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'region_code' => '150200',
                'region_name' => '包头市',
                'region_level' => 2,
                'parent_region_code' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'region_code' => '150201',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '150200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'region_code' => '150202',
                'region_name' => '东河区',
                'region_level' => 3,
                'parent_region_code' => '150200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'region_code' => '150203',
                'region_name' => '昆都仑区',
                'region_level' => 3,
                'parent_region_code' => '150200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'region_code' => '150204',
                'region_name' => '青山区',
                'region_level' => 3,
                'parent_region_code' => '150200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'region_code' => '150205',
                'region_name' => '石拐区',
                'region_level' => 3,
                'parent_region_code' => '150200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'region_code' => '150206',
                'region_name' => '白云鄂博矿区',
                'region_level' => 3,
                'parent_region_code' => '150200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'region_code' => '150207',
                'region_name' => '九原区',
                'region_level' => 3,
                'parent_region_code' => '150200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'region_code' => '150221',
                'region_name' => '土默特右旗',
                'region_level' => 3,
                'parent_region_code' => '150200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'region_code' => '150222',
                'region_name' => '固阳县',
                'region_level' => 3,
                'parent_region_code' => '150200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'region_code' => '150223',
                'region_name' => '达尔罕茂明安联合旗',
                'region_level' => 3,
                'parent_region_code' => '150200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'region_code' => '150300',
                'region_name' => '乌海市',
                'region_level' => 2,
                'parent_region_code' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'region_code' => '150301',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '150300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'region_code' => '150302',
                'region_name' => '海勃湾区',
                'region_level' => 3,
                'parent_region_code' => '150300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'region_code' => '150303',
                'region_name' => '海南区',
                'region_level' => 3,
                'parent_region_code' => '150300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'region_code' => '150304',
                'region_name' => '乌达区',
                'region_level' => 3,
                'parent_region_code' => '150300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'region_code' => '150400',
                'region_name' => '赤峰市',
                'region_level' => 2,
                'parent_region_code' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'region_code' => '150401',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '150400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'region_code' => '150402',
                'region_name' => '红山区',
                'region_level' => 3,
                'parent_region_code' => '150400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'region_code' => '150403',
                'region_name' => '元宝山区',
                'region_level' => 3,
                'parent_region_code' => '150400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'region_code' => '150404',
                'region_name' => '松山区',
                'region_level' => 3,
                'parent_region_code' => '150400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'region_code' => '150421',
                'region_name' => '阿鲁科尔沁旗',
                'region_level' => 3,
                'parent_region_code' => '150400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'region_code' => '150422',
                'region_name' => '巴林左旗',
                'region_level' => 3,
                'parent_region_code' => '150400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'region_code' => '150423',
                'region_name' => '巴林右旗',
                'region_level' => 3,
                'parent_region_code' => '150400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'region_code' => '150424',
                'region_name' => '林西县',
                'region_level' => 3,
                'parent_region_code' => '150400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'region_code' => '150425',
                'region_name' => '克什克腾旗',
                'region_level' => 3,
                'parent_region_code' => '150400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'region_code' => '150426',
                'region_name' => '翁牛特旗',
                'region_level' => 3,
                'parent_region_code' => '150400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'region_code' => '150428',
                'region_name' => '喀喇沁旗',
                'region_level' => 3,
                'parent_region_code' => '150400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'region_code' => '150429',
                'region_name' => '宁城县',
                'region_level' => 3,
                'parent_region_code' => '150400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'region_code' => '150430',
                'region_name' => '敖汉旗',
                'region_level' => 3,
                'parent_region_code' => '150400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'region_code' => '150500',
                'region_name' => '通辽市',
                'region_level' => 2,
                'parent_region_code' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'region_code' => '150501',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '150500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'region_code' => '150502',
                'region_name' => '科尔沁区',
                'region_level' => 3,
                'parent_region_code' => '150500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'region_code' => '150521',
                'region_name' => '科尔沁左翼中旗',
                'region_level' => 3,
                'parent_region_code' => '150500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'region_code' => '150522',
                'region_name' => '科尔沁左翼后旗',
                'region_level' => 3,
                'parent_region_code' => '150500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'region_code' => '150523',
                'region_name' => '开鲁县',
                'region_level' => 3,
                'parent_region_code' => '150500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'region_code' => '150524',
                'region_name' => '库伦旗',
                'region_level' => 3,
                'parent_region_code' => '150500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'region_code' => '150525',
                'region_name' => '奈曼旗',
                'region_level' => 3,
                'parent_region_code' => '150500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'region_code' => '150526',
                'region_name' => '扎鲁特旗',
                'region_level' => 3,
                'parent_region_code' => '150500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'region_code' => '150581',
                'region_name' => '霍林郭勒市',
                'region_level' => 3,
                'parent_region_code' => '150600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'region_code' => '150600',
                'region_name' => '鄂尔多斯市',
                'region_level' => 2,
                'parent_region_code' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'region_code' => '150601',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '150600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'region_code' => '150602',
                'region_name' => '东胜区',
                'region_level' => 3,
                'parent_region_code' => '150600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'region_code' => '150621',
                'region_name' => '达拉特旗',
                'region_level' => 3,
                'parent_region_code' => '150600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'region_code' => '150622',
                'region_name' => '准格尔旗',
                'region_level' => 3,
                'parent_region_code' => '150600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'region_code' => '150623',
                'region_name' => '鄂托克前旗',
                'region_level' => 3,
                'parent_region_code' => '150600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'region_code' => '150624',
                'region_name' => '鄂托克旗',
                'region_level' => 3,
                'parent_region_code' => '150600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'region_code' => '150625',
                'region_name' => '杭锦旗',
                'region_level' => 3,
                'parent_region_code' => '150600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'region_code' => '150626',
                'region_name' => '乌审旗',
                'region_level' => 3,
                'parent_region_code' => '150600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'region_code' => '150627',
                'region_name' => '伊金霍洛旗',
                'region_level' => 3,
                'parent_region_code' => '150600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'region_code' => '150700',
                'region_name' => '呼伦贝尔市',
                'region_level' => 2,
                'parent_region_code' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'region_code' => '150701',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '150700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'region_code' => '150702',
                'region_name' => '海拉尔区',
                'region_level' => 3,
                'parent_region_code' => '150700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'region_code' => '150721',
                'region_name' => '阿荣旗',
                'region_level' => 3,
                'parent_region_code' => '150700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'region_code' => '150722',
                'region_name' => '莫力达瓦达斡尔族自治旗',
                'region_level' => 3,
                'parent_region_code' => '150700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'region_code' => '150723',
                'region_name' => '鄂伦春自治旗',
                'region_level' => 3,
                'parent_region_code' => '150700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'region_code' => '150724',
                'region_name' => '鄂温克族自治旗',
                'region_level' => 3,
                'parent_region_code' => '150700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'region_code' => '150725',
                'region_name' => '陈巴尔虎旗',
                'region_level' => 3,
                'parent_region_code' => '150700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'region_code' => '150726',
                'region_name' => '新巴尔虎左旗',
                'region_level' => 3,
                'parent_region_code' => '150700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'region_code' => '150727',
                'region_name' => '新巴尔虎右旗',
                'region_level' => 3,
                'parent_region_code' => '150700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'region_code' => '150781',
                'region_name' => '满洲里市',
                'region_level' => 3,
                'parent_region_code' => '150800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'region_code' => '150782',
                'region_name' => '牙克石市',
                'region_level' => 3,
                'parent_region_code' => '150800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'region_code' => '150783',
                'region_name' => '扎兰屯市',
                'region_level' => 3,
                'parent_region_code' => '150800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'region_code' => '150784',
                'region_name' => '额尔古纳市',
                'region_level' => 3,
                'parent_region_code' => '150800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'region_code' => '150785',
                'region_name' => '根河市',
                'region_level' => 3,
                'parent_region_code' => '150800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'region_code' => '150800',
                'region_name' => '巴彦淖尔市',
                'region_level' => 2,
                'parent_region_code' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'region_code' => '150801',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '150800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'region_code' => '150802',
                'region_name' => '临河区',
                'region_level' => 3,
                'parent_region_code' => '150800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'region_code' => '150821',
                'region_name' => '五原县',
                'region_level' => 3,
                'parent_region_code' => '150800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'region_code' => '150822',
                'region_name' => '磴口县',
                'region_level' => 3,
                'parent_region_code' => '150800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'region_code' => '150823',
                'region_name' => '乌拉特前旗',
                'region_level' => 3,
                'parent_region_code' => '150800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'region_code' => '150824',
                'region_name' => '乌拉特中旗',
                'region_level' => 3,
                'parent_region_code' => '150800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'region_code' => '150825',
                'region_name' => '乌拉特后旗',
                'region_level' => 3,
                'parent_region_code' => '150800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'region_code' => '150826',
                'region_name' => '杭锦后旗',
                'region_level' => 3,
                'parent_region_code' => '150800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'region_code' => '150900',
                'region_name' => '乌兰察布市',
                'region_level' => 2,
                'parent_region_code' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'region_code' => '150901',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '150900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'region_code' => '150902',
                'region_name' => '集宁区',
                'region_level' => 3,
                'parent_region_code' => '150900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'region_code' => '150921',
                'region_name' => '卓资县',
                'region_level' => 3,
                'parent_region_code' => '150900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'region_code' => '150922',
                'region_name' => '化德县',
                'region_level' => 3,
                'parent_region_code' => '150900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'region_code' => '150923',
                'region_name' => '商都县',
                'region_level' => 3,
                'parent_region_code' => '150900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'region_code' => '150924',
                'region_name' => '兴和县',
                'region_level' => 3,
                'parent_region_code' => '150900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'region_code' => '150925',
                'region_name' => '凉城县',
                'region_level' => 3,
                'parent_region_code' => '150900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'region_code' => '150926',
                'region_name' => '察哈尔右翼前旗',
                'region_level' => 3,
                'parent_region_code' => '150900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'region_code' => '150927',
                'region_name' => '察哈尔右翼中旗',
                'region_level' => 3,
                'parent_region_code' => '150900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'region_code' => '150928',
                'region_name' => '察哈尔右翼后旗',
                'region_level' => 3,
                'parent_region_code' => '150900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'region_code' => '150929',
                'region_name' => '四子王旗',
                'region_level' => 3,
                'parent_region_code' => '150900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'region_code' => '150981',
                'region_name' => '丰镇市',
                'region_level' => 3,
                'parent_region_code' => '151000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'region_code' => '152200',
                'region_name' => '兴安盟',
                'region_level' => 2,
                'parent_region_code' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'region_code' => '152201',
                'region_name' => '乌兰浩特市',
                'region_level' => 3,
                'parent_region_code' => '152200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'region_code' => '152202',
                'region_name' => '阿尔山市',
                'region_level' => 3,
                'parent_region_code' => '152200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'region_code' => '152221',
                'region_name' => '科尔沁右翼前旗',
                'region_level' => 3,
                'parent_region_code' => '152200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'region_code' => '152222',
                'region_name' => '科尔沁右翼中旗',
                'region_level' => 3,
                'parent_region_code' => '152200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'region_code' => '152223',
                'region_name' => '扎赉特旗',
                'region_level' => 3,
                'parent_region_code' => '152200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'region_code' => '152224',
                'region_name' => '突泉县',
                'region_level' => 3,
                'parent_region_code' => '152200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'region_code' => '152500',
                'region_name' => '锡林郭勒盟',
                'region_level' => 2,
                'parent_region_code' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'region_code' => '152501',
                'region_name' => '二连浩特市',
                'region_level' => 3,
                'parent_region_code' => '152500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'region_code' => '152502',
                'region_name' => '锡林浩特市',
                'region_level' => 3,
                'parent_region_code' => '152500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'region_code' => '152522',
                'region_name' => '阿巴嘎旗',
                'region_level' => 3,
                'parent_region_code' => '152500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'region_code' => '152523',
                'region_name' => '苏尼特左旗',
                'region_level' => 3,
                'parent_region_code' => '152500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'region_code' => '152524',
                'region_name' => '苏尼特右旗',
                'region_level' => 3,
                'parent_region_code' => '152500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'region_code' => '152525',
                'region_name' => '东乌珠穆沁旗',
                'region_level' => 3,
                'parent_region_code' => '152500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'region_code' => '152526',
                'region_name' => '西乌珠穆沁旗',
                'region_level' => 3,
                'parent_region_code' => '152500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'region_code' => '152527',
                'region_name' => '太仆寺旗',
                'region_level' => 3,
                'parent_region_code' => '152500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'region_code' => '152528',
                'region_name' => '镶黄旗',
                'region_level' => 3,
                'parent_region_code' => '152500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'region_code' => '152529',
                'region_name' => '正镶白旗',
                'region_level' => 3,
                'parent_region_code' => '152500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'region_code' => '152530',
                'region_name' => '正蓝旗',
                'region_level' => 3,
                'parent_region_code' => '152500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'region_code' => '152531',
                'region_name' => '多伦县',
                'region_level' => 3,
                'parent_region_code' => '152500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'region_code' => '152900',
                'region_name' => '阿拉善盟',
                'region_level' => 2,
                'parent_region_code' => '150000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'region_code' => '152921',
                'region_name' => '阿拉善左旗',
                'region_level' => 3,
                'parent_region_code' => '152900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'region_code' => '152922',
                'region_name' => '阿拉善右旗',
                'region_level' => 3,
                'parent_region_code' => '152900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'region_code' => '152923',
                'region_name' => '额济纳旗',
                'region_level' => 3,
                'parent_region_code' => '152900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'region_code' => '210000',
                'region_name' => '辽宁省',
                'region_level' => 1,
                'parent_region_code' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'region_code' => '210100',
                'region_name' => '沈阳市',
                'region_level' => 2,
                'parent_region_code' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'region_code' => '210101',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '210100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'region_code' => '210102',
                'region_name' => '和平区',
                'region_level' => 3,
                'parent_region_code' => '210100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'region_code' => '210103',
                'region_name' => '沈河区',
                'region_level' => 3,
                'parent_region_code' => '210100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'region_code' => '210104',
                'region_name' => '大东区',
                'region_level' => 3,
                'parent_region_code' => '210100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'region_code' => '210105',
                'region_name' => '皇姑区',
                'region_level' => 3,
                'parent_region_code' => '210100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'region_code' => '210106',
                'region_name' => '铁西区',
                'region_level' => 3,
                'parent_region_code' => '210100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'region_code' => '210111',
                'region_name' => '苏家屯区',
                'region_level' => 3,
                'parent_region_code' => '210100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'region_code' => '210112',
                'region_name' => '东陵区',
                'region_level' => 3,
                'parent_region_code' => '210100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'region_code' => '210113',
                'region_name' => '沈北新区',
                'region_level' => 3,
                'parent_region_code' => '210100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'region_code' => '210114',
                'region_name' => '于洪区',
                'region_level' => 3,
                'parent_region_code' => '210100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'region_code' => '210122',
                'region_name' => '辽中县',
                'region_level' => 3,
                'parent_region_code' => '210100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'region_code' => '210123',
                'region_name' => '康平县',
                'region_level' => 3,
                'parent_region_code' => '210100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'region_code' => '210124',
                'region_name' => '法库县',
                'region_level' => 3,
                'parent_region_code' => '210100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'region_code' => '210181',
                'region_name' => '新民市',
                'region_level' => 3,
                'parent_region_code' => '210200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'region_code' => '210200',
                'region_name' => '大连市',
                'region_level' => 2,
                'parent_region_code' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'region_code' => '210201',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '210200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'region_code' => '210202',
                'region_name' => '中山区',
                'region_level' => 3,
                'parent_region_code' => '210200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'region_code' => '210203',
                'region_name' => '西岗区',
                'region_level' => 3,
                'parent_region_code' => '210200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'region_code' => '210204',
                'region_name' => '沙河口区',
                'region_level' => 3,
                'parent_region_code' => '210200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'region_code' => '210211',
                'region_name' => '甘井子区',
                'region_level' => 3,
                'parent_region_code' => '210200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'region_code' => '210212',
                'region_name' => '旅顺口区',
                'region_level' => 3,
                'parent_region_code' => '210200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'region_code' => '210213',
                'region_name' => '金州区',
                'region_level' => 3,
                'parent_region_code' => '210200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'region_code' => '210224',
                'region_name' => '长海县',
                'region_level' => 3,
                'parent_region_code' => '210200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'region_code' => '210281',
                'region_name' => '瓦房店市',
                'region_level' => 3,
                'parent_region_code' => '210300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'region_code' => '210282',
                'region_name' => '普兰店市',
                'region_level' => 3,
                'parent_region_code' => '210300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'region_code' => '210283',
                'region_name' => '庄河市',
                'region_level' => 3,
                'parent_region_code' => '210300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'region_code' => '210300',
                'region_name' => '鞍山市',
                'region_level' => 2,
                'parent_region_code' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'region_code' => '210301',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '210300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'region_code' => '210302',
                'region_name' => '铁东区',
                'region_level' => 3,
                'parent_region_code' => '210300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'region_code' => '210303',
                'region_name' => '铁西区',
                'region_level' => 3,
                'parent_region_code' => '210300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'region_code' => '210304',
                'region_name' => '立山区',
                'region_level' => 3,
                'parent_region_code' => '210300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'region_code' => '210311',
                'region_name' => '千山区',
                'region_level' => 3,
                'parent_region_code' => '210300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'region_code' => '210321',
                'region_name' => '台安县',
                'region_level' => 3,
                'parent_region_code' => '210300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'region_code' => '210323',
                'region_name' => '岫岩满族自治县',
                'region_level' => 3,
                'parent_region_code' => '210300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'region_code' => '210381',
                'region_name' => '海城市',
                'region_level' => 3,
                'parent_region_code' => '210400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'region_code' => '210400',
                'region_name' => '抚顺市',
                'region_level' => 2,
                'parent_region_code' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'region_code' => '210401',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '210400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'region_code' => '210402',
                'region_name' => '新抚区',
                'region_level' => 3,
                'parent_region_code' => '210400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'region_code' => '210403',
                'region_name' => '东洲区',
                'region_level' => 3,
                'parent_region_code' => '210400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'region_code' => '210404',
                'region_name' => '望花区',
                'region_level' => 3,
                'parent_region_code' => '210400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'region_code' => '210411',
                'region_name' => '顺城区',
                'region_level' => 3,
                'parent_region_code' => '210400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'region_code' => '210421',
                'region_name' => '抚顺县',
                'region_level' => 3,
                'parent_region_code' => '210400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'region_code' => '210422',
                'region_name' => '新宾满族自治县',
                'region_level' => 3,
                'parent_region_code' => '210400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'region_code' => '210423',
                'region_name' => '清原满族自治县',
                'region_level' => 3,
                'parent_region_code' => '210400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'region_code' => '210500',
                'region_name' => '本溪市',
                'region_level' => 2,
                'parent_region_code' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'region_code' => '210501',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '210500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'region_code' => '210502',
                'region_name' => '平山区',
                'region_level' => 3,
                'parent_region_code' => '210500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'region_code' => '210503',
                'region_name' => '溪湖区',
                'region_level' => 3,
                'parent_region_code' => '210500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'region_code' => '210504',
                'region_name' => '明山区',
                'region_level' => 3,
                'parent_region_code' => '210500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'region_code' => '210505',
                'region_name' => '南芬区',
                'region_level' => 3,
                'parent_region_code' => '210500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'region_code' => '210521',
                'region_name' => '本溪满族自治县',
                'region_level' => 3,
                'parent_region_code' => '210500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'region_code' => '210522',
                'region_name' => '桓仁满族自治县',
                'region_level' => 3,
                'parent_region_code' => '210500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'region_code' => '210600',
                'region_name' => '丹东市',
                'region_level' => 2,
                'parent_region_code' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'region_code' => '210601',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '210600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'region_code' => '210602',
                'region_name' => '元宝区',
                'region_level' => 3,
                'parent_region_code' => '210600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'region_code' => '210603',
                'region_name' => '振兴区',
                'region_level' => 3,
                'parent_region_code' => '210600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'region_code' => '210604',
                'region_name' => '振安区',
                'region_level' => 3,
                'parent_region_code' => '210600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'region_code' => '210624',
                'region_name' => '宽甸满族自治县',
                'region_level' => 3,
                'parent_region_code' => '210600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'region_code' => '210681',
                'region_name' => '东港市',
                'region_level' => 3,
                'parent_region_code' => '210700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'region_code' => '210682',
                'region_name' => '凤城市',
                'region_level' => 3,
                'parent_region_code' => '210700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'region_code' => '210700',
                'region_name' => '锦州市',
                'region_level' => 2,
                'parent_region_code' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'region_code' => '210701',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '210700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'region_code' => '210702',
                'region_name' => '古塔区',
                'region_level' => 3,
                'parent_region_code' => '210700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'region_code' => '210703',
                'region_name' => '凌河区',
                'region_level' => 3,
                'parent_region_code' => '210700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'region_code' => '210711',
                'region_name' => '太和区',
                'region_level' => 3,
                'parent_region_code' => '210700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'region_code' => '210726',
                'region_name' => '黑山县',
                'region_level' => 3,
                'parent_region_code' => '210700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'region_code' => '210727',
                'region_name' => '义县',
                'region_level' => 3,
                'parent_region_code' => '210700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'region_code' => '210781',
                'region_name' => '凌海市',
                'region_level' => 3,
                'parent_region_code' => '210800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'region_code' => '210782',
                'region_name' => '北镇市',
                'region_level' => 3,
                'parent_region_code' => '210800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'region_code' => '210800',
                'region_name' => '营口市',
                'region_level' => 2,
                'parent_region_code' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'region_code' => '210801',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '210800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'region_code' => '210802',
                'region_name' => '站前区',
                'region_level' => 3,
                'parent_region_code' => '210800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'region_code' => '210803',
                'region_name' => '西市区',
                'region_level' => 3,
                'parent_region_code' => '210800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'region_code' => '210804',
                'region_name' => '鲅鱼圈区',
                'region_level' => 3,
                'parent_region_code' => '210800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'region_code' => '210811',
                'region_name' => '老边区',
                'region_level' => 3,
                'parent_region_code' => '210800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'region_code' => '210881',
                'region_name' => '盖州市',
                'region_level' => 3,
                'parent_region_code' => '210900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'region_code' => '210882',
                'region_name' => '大石桥市',
                'region_level' => 3,
                'parent_region_code' => '210900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'region_code' => '210900',
                'region_name' => '阜新市',
                'region_level' => 2,
                'parent_region_code' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'region_code' => '210901',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '210900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'region_code' => '210902',
                'region_name' => '海州区',
                'region_level' => 3,
                'parent_region_code' => '210900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'region_code' => '210903',
                'region_name' => '新邱区',
                'region_level' => 3,
                'parent_region_code' => '210900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'region_code' => '210904',
                'region_name' => '太平区',
                'region_level' => 3,
                'parent_region_code' => '210900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'region_code' => '210905',
                'region_name' => '清河门区',
                'region_level' => 3,
                'parent_region_code' => '210900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'region_code' => '210911',
                'region_name' => '细河区',
                'region_level' => 3,
                'parent_region_code' => '210900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'region_code' => '210921',
                'region_name' => '阜新蒙古族自治县',
                'region_level' => 3,
                'parent_region_code' => '210900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'region_code' => '210922',
                'region_name' => '彰武县',
                'region_level' => 3,
                'parent_region_code' => '210900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'region_code' => '211000',
                'region_name' => '辽阳市',
                'region_level' => 2,
                'parent_region_code' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'region_code' => '211001',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '211000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'region_code' => '211002',
                'region_name' => '白塔区',
                'region_level' => 3,
                'parent_region_code' => '211000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'region_code' => '211003',
                'region_name' => '文圣区',
                'region_level' => 3,
                'parent_region_code' => '211000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'region_code' => '211004',
                'region_name' => '宏伟区',
                'region_level' => 3,
                'parent_region_code' => '211000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'region_code' => '211005',
                'region_name' => '弓长岭区',
                'region_level' => 3,
                'parent_region_code' => '211000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'region_code' => '211011',
                'region_name' => '太子河区',
                'region_level' => 3,
                'parent_region_code' => '211000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'region_code' => '211021',
                'region_name' => '辽阳县',
                'region_level' => 3,
                'parent_region_code' => '211000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'region_code' => '211081',
                'region_name' => '灯塔市',
                'region_level' => 3,
                'parent_region_code' => '211100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'region_code' => '211100',
                'region_name' => '盘锦市',
                'region_level' => 2,
                'parent_region_code' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'region_code' => '211101',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '211100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'region_code' => '211102',
                'region_name' => '双台子区',
                'region_level' => 3,
                'parent_region_code' => '211100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'region_code' => '211103',
                'region_name' => '兴隆台区',
                'region_level' => 3,
                'parent_region_code' => '211100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'region_code' => '211121',
                'region_name' => '大洼县',
                'region_level' => 3,
                'parent_region_code' => '211100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'region_code' => '211122',
                'region_name' => '盘山县',
                'region_level' => 3,
                'parent_region_code' => '211100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'region_code' => '211200',
                'region_name' => '铁岭市',
                'region_level' => 2,
                'parent_region_code' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'region_code' => '211201',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '211200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'region_code' => '211202',
                'region_name' => '银州区',
                'region_level' => 3,
                'parent_region_code' => '211200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'region_code' => '211204',
                'region_name' => '清河区',
                'region_level' => 3,
                'parent_region_code' => '211200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'region_code' => '211221',
                'region_name' => '铁岭县',
                'region_level' => 3,
                'parent_region_code' => '211200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'region_code' => '211223',
                'region_name' => '西丰县',
                'region_level' => 3,
                'parent_region_code' => '211200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'region_code' => '211224',
                'region_name' => '昌图县',
                'region_level' => 3,
                'parent_region_code' => '211200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'region_code' => '211281',
                'region_name' => '调兵山市',
                'region_level' => 3,
                'parent_region_code' => '211300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'region_code' => '211282',
                'region_name' => '开原市',
                'region_level' => 3,
                'parent_region_code' => '211300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'region_code' => '211300',
                'region_name' => '朝阳市',
                'region_level' => 2,
                'parent_region_code' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'region_code' => '211301',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '211300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'region_code' => '211302',
                'region_name' => '双塔区',
                'region_level' => 3,
                'parent_region_code' => '211300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'region_code' => '211303',
                'region_name' => '龙城区',
                'region_level' => 3,
                'parent_region_code' => '211300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'region_code' => '211321',
                'region_name' => '朝阳县',
                'region_level' => 3,
                'parent_region_code' => '211300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'region_code' => '211322',
                'region_name' => '建平县',
                'region_level' => 3,
                'parent_region_code' => '211300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'region_code' => '211324',
                'region_name' => '喀喇沁左翼蒙古族自治县',
                'region_level' => 3,
                'parent_region_code' => '211300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'region_code' => '211381',
                'region_name' => '北票市',
                'region_level' => 3,
                'parent_region_code' => '211400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'region_code' => '211382',
                'region_name' => '凌源市',
                'region_level' => 3,
                'parent_region_code' => '211400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'region_code' => '211400',
                'region_name' => '葫芦岛市',
                'region_level' => 2,
                'parent_region_code' => '210000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'region_code' => '211401',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '211400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'region_code' => '211402',
                'region_name' => '连山区',
                'region_level' => 3,
                'parent_region_code' => '211400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'region_code' => '211403',
                'region_name' => '龙港区',
                'region_level' => 3,
                'parent_region_code' => '211400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'region_code' => '211404',
                'region_name' => '南票区',
                'region_level' => 3,
                'parent_region_code' => '211400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'region_code' => '211421',
                'region_name' => '绥中县',
                'region_level' => 3,
                'parent_region_code' => '211400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'region_code' => '211422',
                'region_name' => '建昌县',
                'region_level' => 3,
                'parent_region_code' => '211400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'region_code' => '211481',
                'region_name' => '兴城市',
                'region_level' => 3,
                'parent_region_code' => '211500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'region_code' => '220000',
                'region_name' => '吉林省',
                'region_level' => 1,
                'parent_region_code' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'region_code' => '220100',
                'region_name' => '长春市',
                'region_level' => 2,
                'parent_region_code' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'region_code' => '220101',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '220100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'region_code' => '220102',
                'region_name' => '南关区',
                'region_level' => 3,
                'parent_region_code' => '220100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'region_code' => '220103',
                'region_name' => '宽城区',
                'region_level' => 3,
                'parent_region_code' => '220100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'region_code' => '220104',
                'region_name' => '朝阳区',
                'region_level' => 3,
                'parent_region_code' => '220100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'region_code' => '220105',
                'region_name' => '二道区',
                'region_level' => 3,
                'parent_region_code' => '220100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'region_code' => '220106',
                'region_name' => '绿园区',
                'region_level' => 3,
                'parent_region_code' => '220100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'region_code' => '220112',
                'region_name' => '双阳区',
                'region_level' => 3,
                'parent_region_code' => '220100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'region_code' => '220122',
                'region_name' => '农安县',
                'region_level' => 3,
                'parent_region_code' => '220100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'region_code' => '220181',
                'region_name' => '九台市',
                'region_level' => 3,
                'parent_region_code' => '220200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'region_code' => '220182',
                'region_name' => '榆树市',
                'region_level' => 3,
                'parent_region_code' => '220200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'region_code' => '220183',
                'region_name' => '德惠市',
                'region_level' => 3,
                'parent_region_code' => '220200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'region_code' => '220200',
                'region_name' => '吉林市',
                'region_level' => 2,
                'parent_region_code' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'region_code' => '220201',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '220200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'region_code' => '220202',
                'region_name' => '昌邑区',
                'region_level' => 3,
                'parent_region_code' => '220200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'region_code' => '220203',
                'region_name' => '龙潭区',
                'region_level' => 3,
                'parent_region_code' => '220200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'region_code' => '220204',
                'region_name' => '船营区',
                'region_level' => 3,
                'parent_region_code' => '220200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'region_code' => '220211',
                'region_name' => '丰满区',
                'region_level' => 3,
                'parent_region_code' => '220200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'region_code' => '220221',
                'region_name' => '永吉县',
                'region_level' => 3,
                'parent_region_code' => '220200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'region_code' => '220281',
                'region_name' => '蛟河市',
                'region_level' => 3,
                'parent_region_code' => '220300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'region_code' => '220282',
                'region_name' => '桦甸市',
                'region_level' => 3,
                'parent_region_code' => '220300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'region_code' => '220283',
                'region_name' => '舒兰市',
                'region_level' => 3,
                'parent_region_code' => '220300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'region_code' => '220284',
                'region_name' => '磐石市',
                'region_level' => 3,
                'parent_region_code' => '220300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'region_code' => '220300',
                'region_name' => '四平市',
                'region_level' => 2,
                'parent_region_code' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'region_code' => '220301',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '220300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'region_code' => '220302',
                'region_name' => '铁西区',
                'region_level' => 3,
                'parent_region_code' => '220300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'region_code' => '220303',
                'region_name' => '铁东区',
                'region_level' => 3,
                'parent_region_code' => '220300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'region_code' => '220322',
                'region_name' => '梨树县',
                'region_level' => 3,
                'parent_region_code' => '220300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'region_code' => '220323',
                'region_name' => '伊通满族自治县',
                'region_level' => 3,
                'parent_region_code' => '220300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'region_code' => '220381',
                'region_name' => '公主岭市',
                'region_level' => 3,
                'parent_region_code' => '220400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'region_code' => '220382',
                'region_name' => '双辽市',
                'region_level' => 3,
                'parent_region_code' => '220400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'region_code' => '220400',
                'region_name' => '辽源市',
                'region_level' => 2,
                'parent_region_code' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'region_code' => '220401',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '220400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'region_code' => '220402',
                'region_name' => '龙山区',
                'region_level' => 3,
                'parent_region_code' => '220400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'region_code' => '220403',
                'region_name' => '西安区',
                'region_level' => 3,
                'parent_region_code' => '220400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'region_code' => '220421',
                'region_name' => '东丰县',
                'region_level' => 3,
                'parent_region_code' => '220400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'region_code' => '220422',
                'region_name' => '东辽县',
                'region_level' => 3,
                'parent_region_code' => '220400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'region_code' => '220500',
                'region_name' => '通化市',
                'region_level' => 2,
                'parent_region_code' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'region_code' => '220501',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '220500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'region_code' => '220502',
                'region_name' => '东昌区',
                'region_level' => 3,
                'parent_region_code' => '220500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'region_code' => '220503',
                'region_name' => '二道江区',
                'region_level' => 3,
                'parent_region_code' => '220500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'region_code' => '220521',
                'region_name' => '通化县',
                'region_level' => 3,
                'parent_region_code' => '220500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'region_code' => '220523',
                'region_name' => '辉南县',
                'region_level' => 3,
                'parent_region_code' => '220500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'region_code' => '220524',
                'region_name' => '柳河县',
                'region_level' => 3,
                'parent_region_code' => '220500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'region_code' => '220581',
                'region_name' => '梅河口市',
                'region_level' => 3,
                'parent_region_code' => '220600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'region_code' => '220582',
                'region_name' => '集安市',
                'region_level' => 3,
                'parent_region_code' => '220600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'region_code' => '220600',
                'region_name' => '白山市',
                'region_level' => 2,
                'parent_region_code' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'region_code' => '220601',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '220600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'region_code' => '220602',
                'region_name' => '浑江区',
                'region_level' => 3,
                'parent_region_code' => '220600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'region_code' => '220605',
                'region_name' => '江源区',
                'region_level' => 3,
                'parent_region_code' => '220600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'region_code' => '220621',
                'region_name' => '抚松县',
                'region_level' => 3,
                'parent_region_code' => '220600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'region_code' => '220622',
                'region_name' => '靖宇县',
                'region_level' => 3,
                'parent_region_code' => '220600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'region_code' => '220623',
                'region_name' => '长白朝鲜族自治县',
                'region_level' => 3,
                'parent_region_code' => '220600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'region_code' => '220681',
                'region_name' => '临江市',
                'region_level' => 3,
                'parent_region_code' => '220700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'region_code' => '220700',
                'region_name' => '松原市',
                'region_level' => 2,
                'parent_region_code' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'region_code' => '220701',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '220700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'region_code' => '220702',
                'region_name' => '宁江区',
                'region_level' => 3,
                'parent_region_code' => '220700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'region_code' => '220721',
                'region_name' => '前郭尔罗斯蒙古族自治县',
                'region_level' => 3,
                'parent_region_code' => '220700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'region_code' => '220722',
                'region_name' => '长岭县',
                'region_level' => 3,
                'parent_region_code' => '220700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'region_code' => '220723',
                'region_name' => '乾安县',
                'region_level' => 3,
                'parent_region_code' => '220700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'region_code' => '220724',
                'region_name' => '扶余县',
                'region_level' => 3,
                'parent_region_code' => '220700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'region_code' => '220800',
                'region_name' => '白城市',
                'region_level' => 2,
                'parent_region_code' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'region_code' => '220801',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '220800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'region_code' => '220802',
                'region_name' => '洮北区',
                'region_level' => 3,
                'parent_region_code' => '220800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'region_code' => '220821',
                'region_name' => '镇赉县',
                'region_level' => 3,
                'parent_region_code' => '220800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'region_code' => '220822',
                'region_name' => '通榆县',
                'region_level' => 3,
                'parent_region_code' => '220800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'region_code' => '220881',
                'region_name' => '洮南市',
                'region_level' => 3,
                'parent_region_code' => '220900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'region_code' => '220882',
                'region_name' => '大安市',
                'region_level' => 3,
                'parent_region_code' => '220900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'region_code' => '222400',
                'region_name' => '延边朝鲜族自治州',
                'region_level' => 2,
                'parent_region_code' => '220000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'region_code' => '222401',
                'region_name' => '延吉市',
                'region_level' => 3,
                'parent_region_code' => '222400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'region_code' => '222402',
                'region_name' => '图们市',
                'region_level' => 3,
                'parent_region_code' => '222400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'region_code' => '222403',
                'region_name' => '敦化市',
                'region_level' => 3,
                'parent_region_code' => '222400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'region_code' => '222404',
                'region_name' => '珲春市',
                'region_level' => 3,
                'parent_region_code' => '222400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'region_code' => '222405',
                'region_name' => '龙井市',
                'region_level' => 3,
                'parent_region_code' => '222400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'region_code' => '222406',
                'region_name' => '和龙市',
                'region_level' => 3,
                'parent_region_code' => '222400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'region_code' => '222424',
                'region_name' => '汪清县',
                'region_level' => 3,
                'parent_region_code' => '222400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'region_code' => '222426',
                'region_name' => '安图县',
                'region_level' => 3,
                'parent_region_code' => '222400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'region_code' => '230000',
                'region_name' => '黑龙江省',
                'region_level' => 1,
                'parent_region_code' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'region_code' => '230100',
                'region_name' => '哈尔滨市',
                'region_level' => 2,
                'parent_region_code' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'region_code' => '230101',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '230100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'region_code' => '230102',
                'region_name' => '道里区',
                'region_level' => 3,
                'parent_region_code' => '230100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'region_code' => '230103',
                'region_name' => '南岗区',
                'region_level' => 3,
                'parent_region_code' => '230100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'region_code' => '230104',
                'region_name' => '道外区',
                'region_level' => 3,
                'parent_region_code' => '230100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'region_code' => '230108',
                'region_name' => '平房区',
                'region_level' => 3,
                'parent_region_code' => '230100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'region_code' => '230109',
                'region_name' => '松北区',
                'region_level' => 3,
                'parent_region_code' => '230100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'region_code' => '230110',
                'region_name' => '香坊区',
                'region_level' => 3,
                'parent_region_code' => '230100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'region_code' => '230111',
                'region_name' => '呼兰区',
                'region_level' => 3,
                'parent_region_code' => '230100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'region_code' => '230112',
                'region_name' => '阿城区',
                'region_level' => 3,
                'parent_region_code' => '230100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'region_code' => '230123',
                'region_name' => '依兰县',
                'region_level' => 3,
                'parent_region_code' => '230100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'region_code' => '230124',
                'region_name' => '方正县',
                'region_level' => 3,
                'parent_region_code' => '230100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'region_code' => '230125',
                'region_name' => '宾县',
                'region_level' => 3,
                'parent_region_code' => '230100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'region_code' => '230126',
                'region_name' => '巴彦县',
                'region_level' => 3,
                'parent_region_code' => '230100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'region_code' => '230127',
                'region_name' => '木兰县',
                'region_level' => 3,
                'parent_region_code' => '230100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'region_code' => '230128',
                'region_name' => '通河县',
                'region_level' => 3,
                'parent_region_code' => '230100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'region_code' => '230129',
                'region_name' => '延寿县',
                'region_level' => 3,
                'parent_region_code' => '230100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('regions')->insert(array (
            0 => 
            array (
                'region_code' => '230182',
                'region_name' => '双城市',
                'region_level' => 3,
                'parent_region_code' => '230200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'region_code' => '230183',
                'region_name' => '尚志市',
                'region_level' => 3,
                'parent_region_code' => '230200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'region_code' => '230184',
                'region_name' => '五常市',
                'region_level' => 3,
                'parent_region_code' => '230200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'region_code' => '230200',
                'region_name' => '齐齐哈尔市',
                'region_level' => 2,
                'parent_region_code' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'region_code' => '230201',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '230200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'region_code' => '230202',
                'region_name' => '龙沙区',
                'region_level' => 3,
                'parent_region_code' => '230200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'region_code' => '230203',
                'region_name' => '建华区',
                'region_level' => 3,
                'parent_region_code' => '230200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'region_code' => '230204',
                'region_name' => '铁锋区',
                'region_level' => 3,
                'parent_region_code' => '230200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'region_code' => '230205',
                'region_name' => '昂昂溪区',
                'region_level' => 3,
                'parent_region_code' => '230200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'region_code' => '230206',
                'region_name' => '富拉尔基区',
                'region_level' => 3,
                'parent_region_code' => '230200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'region_code' => '230207',
                'region_name' => '碾子山区',
                'region_level' => 3,
                'parent_region_code' => '230200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'region_code' => '230208',
                'region_name' => '梅里斯达斡尔族区',
                'region_level' => 3,
                'parent_region_code' => '230200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'region_code' => '230221',
                'region_name' => '龙江县',
                'region_level' => 3,
                'parent_region_code' => '230200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'region_code' => '230223',
                'region_name' => '依安县',
                'region_level' => 3,
                'parent_region_code' => '230200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'region_code' => '230224',
                'region_name' => '泰来县',
                'region_level' => 3,
                'parent_region_code' => '230200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'region_code' => '230225',
                'region_name' => '甘南县',
                'region_level' => 3,
                'parent_region_code' => '230200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'region_code' => '230227',
                'region_name' => '富裕县',
                'region_level' => 3,
                'parent_region_code' => '230200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'region_code' => '230229',
                'region_name' => '克山县',
                'region_level' => 3,
                'parent_region_code' => '230200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'region_code' => '230230',
                'region_name' => '克东县',
                'region_level' => 3,
                'parent_region_code' => '230200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'region_code' => '230231',
                'region_name' => '拜泉县',
                'region_level' => 3,
                'parent_region_code' => '230200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'region_code' => '230281',
                'region_name' => '讷河市',
                'region_level' => 3,
                'parent_region_code' => '230300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'region_code' => '230300',
                'region_name' => '鸡西市',
                'region_level' => 2,
                'parent_region_code' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'region_code' => '230301',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '230300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'region_code' => '230302',
                'region_name' => '鸡冠区',
                'region_level' => 3,
                'parent_region_code' => '230300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'region_code' => '230303',
                'region_name' => '恒山区',
                'region_level' => 3,
                'parent_region_code' => '230300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'region_code' => '230304',
                'region_name' => '滴道区',
                'region_level' => 3,
                'parent_region_code' => '230300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'region_code' => '230305',
                'region_name' => '梨树区',
                'region_level' => 3,
                'parent_region_code' => '230300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'region_code' => '230306',
                'region_name' => '城子河区',
                'region_level' => 3,
                'parent_region_code' => '230300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'region_code' => '230307',
                'region_name' => '麻山区',
                'region_level' => 3,
                'parent_region_code' => '230300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'region_code' => '230321',
                'region_name' => '鸡东县',
                'region_level' => 3,
                'parent_region_code' => '230300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'region_code' => '230381',
                'region_name' => '虎林市',
                'region_level' => 3,
                'parent_region_code' => '230400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'region_code' => '230382',
                'region_name' => '密山市',
                'region_level' => 3,
                'parent_region_code' => '230400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'region_code' => '230400',
                'region_name' => '鹤岗市',
                'region_level' => 2,
                'parent_region_code' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'region_code' => '230401',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '230400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'region_code' => '230402',
                'region_name' => '向阳区',
                'region_level' => 3,
                'parent_region_code' => '230400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'region_code' => '230403',
                'region_name' => '工农区',
                'region_level' => 3,
                'parent_region_code' => '230400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'region_code' => '230404',
                'region_name' => '南山区',
                'region_level' => 3,
                'parent_region_code' => '230400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'region_code' => '230405',
                'region_name' => '兴安区',
                'region_level' => 3,
                'parent_region_code' => '230400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'region_code' => '230406',
                'region_name' => '东山区',
                'region_level' => 3,
                'parent_region_code' => '230400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'region_code' => '230407',
                'region_name' => '兴山区',
                'region_level' => 3,
                'parent_region_code' => '230400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'region_code' => '230421',
                'region_name' => '萝北县',
                'region_level' => 3,
                'parent_region_code' => '230400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'region_code' => '230422',
                'region_name' => '绥滨县',
                'region_level' => 3,
                'parent_region_code' => '230400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'region_code' => '230500',
                'region_name' => '双鸭山市',
                'region_level' => 2,
                'parent_region_code' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'region_code' => '230501',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '230500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'region_code' => '230502',
                'region_name' => '尖山区',
                'region_level' => 3,
                'parent_region_code' => '230500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'region_code' => '230503',
                'region_name' => '岭东区',
                'region_level' => 3,
                'parent_region_code' => '230500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'region_code' => '230505',
                'region_name' => '四方台区',
                'region_level' => 3,
                'parent_region_code' => '230500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'region_code' => '230506',
                'region_name' => '宝山区',
                'region_level' => 3,
                'parent_region_code' => '230500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'region_code' => '230521',
                'region_name' => '集贤县',
                'region_level' => 3,
                'parent_region_code' => '230500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'region_code' => '230522',
                'region_name' => '友谊县',
                'region_level' => 3,
                'parent_region_code' => '230500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'region_code' => '230523',
                'region_name' => '宝清县',
                'region_level' => 3,
                'parent_region_code' => '230500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'region_code' => '230524',
                'region_name' => '饶河县',
                'region_level' => 3,
                'parent_region_code' => '230500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'region_code' => '230600',
                'region_name' => '大庆市',
                'region_level' => 2,
                'parent_region_code' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'region_code' => '230601',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '230600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'region_code' => '230602',
                'region_name' => '萨尔图区',
                'region_level' => 3,
                'parent_region_code' => '230600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'region_code' => '230603',
                'region_name' => '龙凤区',
                'region_level' => 3,
                'parent_region_code' => '230600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'region_code' => '230604',
                'region_name' => '让胡路区',
                'region_level' => 3,
                'parent_region_code' => '230600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'region_code' => '230605',
                'region_name' => '红岗区',
                'region_level' => 3,
                'parent_region_code' => '230600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'region_code' => '230606',
                'region_name' => '大同区',
                'region_level' => 3,
                'parent_region_code' => '230600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'region_code' => '230621',
                'region_name' => '肇州县',
                'region_level' => 3,
                'parent_region_code' => '230600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'region_code' => '230622',
                'region_name' => '肇源县',
                'region_level' => 3,
                'parent_region_code' => '230600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'region_code' => '230623',
                'region_name' => '林甸县',
                'region_level' => 3,
                'parent_region_code' => '230600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'region_code' => '230624',
                'region_name' => '杜尔伯特蒙古族自治县',
                'region_level' => 3,
                'parent_region_code' => '230600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'region_code' => '230700',
                'region_name' => '伊春市',
                'region_level' => 2,
                'parent_region_code' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'region_code' => '230701',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '230700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'region_code' => '230702',
                'region_name' => '伊春区',
                'region_level' => 3,
                'parent_region_code' => '230700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'region_code' => '230703',
                'region_name' => '南岔区',
                'region_level' => 3,
                'parent_region_code' => '230700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'region_code' => '230704',
                'region_name' => '友好区',
                'region_level' => 3,
                'parent_region_code' => '230700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'region_code' => '230705',
                'region_name' => '西林区',
                'region_level' => 3,
                'parent_region_code' => '230700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'region_code' => '230706',
                'region_name' => '翠峦区',
                'region_level' => 3,
                'parent_region_code' => '230700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'region_code' => '230707',
                'region_name' => '新青区',
                'region_level' => 3,
                'parent_region_code' => '230700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'region_code' => '230708',
                'region_name' => '美溪区',
                'region_level' => 3,
                'parent_region_code' => '230700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'region_code' => '230709',
                'region_name' => '金山屯区',
                'region_level' => 3,
                'parent_region_code' => '230700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'region_code' => '230710',
                'region_name' => '五营区',
                'region_level' => 3,
                'parent_region_code' => '230700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'region_code' => '230711',
                'region_name' => '乌马河区',
                'region_level' => 3,
                'parent_region_code' => '230700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'region_code' => '230712',
                'region_name' => '汤旺河区',
                'region_level' => 3,
                'parent_region_code' => '230700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'region_code' => '230713',
                'region_name' => '带岭区',
                'region_level' => 3,
                'parent_region_code' => '230700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'region_code' => '230714',
                'region_name' => '乌伊岭区',
                'region_level' => 3,
                'parent_region_code' => '230700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'region_code' => '230715',
                'region_name' => '红星区',
                'region_level' => 3,
                'parent_region_code' => '230700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'region_code' => '230716',
                'region_name' => '上甘岭区',
                'region_level' => 3,
                'parent_region_code' => '230700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'region_code' => '230722',
                'region_name' => '嘉荫县',
                'region_level' => 3,
                'parent_region_code' => '230700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'region_code' => '230781',
                'region_name' => '铁力市',
                'region_level' => 3,
                'parent_region_code' => '230800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'region_code' => '230800',
                'region_name' => '佳木斯市',
                'region_level' => 2,
                'parent_region_code' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'region_code' => '230801',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '230800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'region_code' => '230803',
                'region_name' => '向阳区',
                'region_level' => 3,
                'parent_region_code' => '230800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'region_code' => '230804',
                'region_name' => '前进区',
                'region_level' => 3,
                'parent_region_code' => '230800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'region_code' => '230805',
                'region_name' => '东风区',
                'region_level' => 3,
                'parent_region_code' => '230800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'region_code' => '230811',
                'region_name' => '郊区',
                'region_level' => 3,
                'parent_region_code' => '230800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'region_code' => '230822',
                'region_name' => '桦南县',
                'region_level' => 3,
                'parent_region_code' => '230800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'region_code' => '230826',
                'region_name' => '桦川县',
                'region_level' => 3,
                'parent_region_code' => '230800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'region_code' => '230828',
                'region_name' => '汤原县',
                'region_level' => 3,
                'parent_region_code' => '230800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'region_code' => '230833',
                'region_name' => '抚远县',
                'region_level' => 3,
                'parent_region_code' => '230800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'region_code' => '230881',
                'region_name' => '同江市',
                'region_level' => 3,
                'parent_region_code' => '230900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'region_code' => '230882',
                'region_name' => '富锦市',
                'region_level' => 3,
                'parent_region_code' => '230900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'region_code' => '230900',
                'region_name' => '七台河市',
                'region_level' => 2,
                'parent_region_code' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'region_code' => '230901',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '230900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'region_code' => '230902',
                'region_name' => '新兴区',
                'region_level' => 3,
                'parent_region_code' => '230900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'region_code' => '230903',
                'region_name' => '桃山区',
                'region_level' => 3,
                'parent_region_code' => '230900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'region_code' => '230904',
                'region_name' => '茄子河区',
                'region_level' => 3,
                'parent_region_code' => '230900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'region_code' => '230921',
                'region_name' => '勃利县',
                'region_level' => 3,
                'parent_region_code' => '230900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'region_code' => '231000',
                'region_name' => '牡丹江市',
                'region_level' => 2,
                'parent_region_code' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'region_code' => '231001',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '231000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'region_code' => '231002',
                'region_name' => '东安区',
                'region_level' => 3,
                'parent_region_code' => '231000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'region_code' => '231003',
                'region_name' => '阳明区',
                'region_level' => 3,
                'parent_region_code' => '231000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'region_code' => '231004',
                'region_name' => '爱民区',
                'region_level' => 3,
                'parent_region_code' => '231000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'region_code' => '231005',
                'region_name' => '西安区',
                'region_level' => 3,
                'parent_region_code' => '231000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'region_code' => '231024',
                'region_name' => '东宁县',
                'region_level' => 3,
                'parent_region_code' => '231000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'region_code' => '231025',
                'region_name' => '林口县',
                'region_level' => 3,
                'parent_region_code' => '231000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'region_code' => '231081',
                'region_name' => '绥芬河市',
                'region_level' => 3,
                'parent_region_code' => '231100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'region_code' => '231083',
                'region_name' => '海林市',
                'region_level' => 3,
                'parent_region_code' => '231100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'region_code' => '231084',
                'region_name' => '宁安市',
                'region_level' => 3,
                'parent_region_code' => '231100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'region_code' => '231085',
                'region_name' => '穆棱市',
                'region_level' => 3,
                'parent_region_code' => '231100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'region_code' => '231100',
                'region_name' => '黑河市',
                'region_level' => 2,
                'parent_region_code' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'region_code' => '231101',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '231100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'region_code' => '231102',
                'region_name' => '爱辉区',
                'region_level' => 3,
                'parent_region_code' => '231100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'region_code' => '231121',
                'region_name' => '嫩江县',
                'region_level' => 3,
                'parent_region_code' => '231100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'region_code' => '231123',
                'region_name' => '逊克县',
                'region_level' => 3,
                'parent_region_code' => '231100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'region_code' => '231124',
                'region_name' => '孙吴县',
                'region_level' => 3,
                'parent_region_code' => '231100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'region_code' => '231181',
                'region_name' => '北安市',
                'region_level' => 3,
                'parent_region_code' => '231200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'region_code' => '231182',
                'region_name' => '五大连池市',
                'region_level' => 3,
                'parent_region_code' => '231200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'region_code' => '231200',
                'region_name' => '绥化市',
                'region_level' => 2,
                'parent_region_code' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'region_code' => '231201',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '231200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'region_code' => '231202',
                'region_name' => '北林区',
                'region_level' => 3,
                'parent_region_code' => '231200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'region_code' => '231221',
                'region_name' => '望奎县',
                'region_level' => 3,
                'parent_region_code' => '231200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'region_code' => '231222',
                'region_name' => '兰西县',
                'region_level' => 3,
                'parent_region_code' => '231200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'region_code' => '231223',
                'region_name' => '青冈县',
                'region_level' => 3,
                'parent_region_code' => '231200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'region_code' => '231224',
                'region_name' => '庆安县',
                'region_level' => 3,
                'parent_region_code' => '231200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'region_code' => '231225',
                'region_name' => '明水县',
                'region_level' => 3,
                'parent_region_code' => '231200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'region_code' => '231226',
                'region_name' => '绥棱县',
                'region_level' => 3,
                'parent_region_code' => '231200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'region_code' => '231281',
                'region_name' => '安达市',
                'region_level' => 3,
                'parent_region_code' => '231300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'region_code' => '231282',
                'region_name' => '肇东市',
                'region_level' => 3,
                'parent_region_code' => '231300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'region_code' => '231283',
                'region_name' => '海伦市',
                'region_level' => 3,
                'parent_region_code' => '231300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'region_code' => '232700',
                'region_name' => '大兴安岭地区',
                'region_level' => 2,
                'parent_region_code' => '230000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'region_code' => '232721',
                'region_name' => '呼玛县',
                'region_level' => 3,
                'parent_region_code' => '232700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'region_code' => '232722',
                'region_name' => '塔河县',
                'region_level' => 3,
                'parent_region_code' => '232700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'region_code' => '232723',
                'region_name' => '漠河县',
                'region_level' => 3,
                'parent_region_code' => '232700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'region_code' => '310000',
                'region_name' => '上海市',
                'region_level' => 1,
                'parent_region_code' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'region_code' => '310100',
                'region_name' => '市辖区',
                'region_level' => 2,
                'parent_region_code' => '310000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'region_code' => '310101',
                'region_name' => '黄浦区',
                'region_level' => 3,
                'parent_region_code' => '310100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'region_code' => '310104',
                'region_name' => '徐汇区',
                'region_level' => 3,
                'parent_region_code' => '310100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'region_code' => '310105',
                'region_name' => '长宁区',
                'region_level' => 3,
                'parent_region_code' => '310100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'region_code' => '310106',
                'region_name' => '静安区',
                'region_level' => 3,
                'parent_region_code' => '310100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'region_code' => '310107',
                'region_name' => '普陀区',
                'region_level' => 3,
                'parent_region_code' => '310100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'region_code' => '310108',
                'region_name' => '闸北区',
                'region_level' => 3,
                'parent_region_code' => '310100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'region_code' => '310109',
                'region_name' => '虹口区',
                'region_level' => 3,
                'parent_region_code' => '310100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'region_code' => '310110',
                'region_name' => '杨浦区',
                'region_level' => 3,
                'parent_region_code' => '310100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'region_code' => '310112',
                'region_name' => '闵行区',
                'region_level' => 3,
                'parent_region_code' => '310100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'region_code' => '310113',
                'region_name' => '宝山区',
                'region_level' => 3,
                'parent_region_code' => '310100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'region_code' => '310114',
                'region_name' => '嘉定区',
                'region_level' => 3,
                'parent_region_code' => '310100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'region_code' => '310115',
                'region_name' => '浦东新区',
                'region_level' => 3,
                'parent_region_code' => '310100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'region_code' => '310116',
                'region_name' => '金山区',
                'region_level' => 3,
                'parent_region_code' => '310100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'region_code' => '310117',
                'region_name' => '松江区',
                'region_level' => 3,
                'parent_region_code' => '310100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'region_code' => '310118',
                'region_name' => '青浦区',
                'region_level' => 3,
                'parent_region_code' => '310100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'region_code' => '310120',
                'region_name' => '奉贤区',
                'region_level' => 3,
                'parent_region_code' => '310100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'region_code' => '310200',
                'region_name' => '县',
                'region_level' => 2,
                'parent_region_code' => '310000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'region_code' => '310230',
                'region_name' => '崇明县',
                'region_level' => 3,
                'parent_region_code' => '310200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'region_code' => '320000',
                'region_name' => '江苏省',
                'region_level' => 1,
                'parent_region_code' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'region_code' => '320100',
                'region_name' => '南京市',
                'region_level' => 2,
                'parent_region_code' => '320000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'region_code' => '320101',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '320100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'region_code' => '320102',
                'region_name' => '玄武区',
                'region_level' => 3,
                'parent_region_code' => '320100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'region_code' => '320103',
                'region_name' => '白下区',
                'region_level' => 3,
                'parent_region_code' => '320100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'region_code' => '320104',
                'region_name' => '秦淮区',
                'region_level' => 3,
                'parent_region_code' => '320100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'region_code' => '320105',
                'region_name' => '建邺区',
                'region_level' => 3,
                'parent_region_code' => '320100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'region_code' => '320106',
                'region_name' => '鼓楼区',
                'region_level' => 3,
                'parent_region_code' => '320100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'region_code' => '320107',
                'region_name' => '下关区',
                'region_level' => 3,
                'parent_region_code' => '320100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'region_code' => '320111',
                'region_name' => '浦口区',
                'region_level' => 3,
                'parent_region_code' => '320100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'region_code' => '320113',
                'region_name' => '栖霞区',
                'region_level' => 3,
                'parent_region_code' => '320100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'region_code' => '320114',
                'region_name' => '雨花台区',
                'region_level' => 3,
                'parent_region_code' => '320100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'region_code' => '320115',
                'region_name' => '江宁区',
                'region_level' => 3,
                'parent_region_code' => '320100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'region_code' => '320116',
                'region_name' => '六合区',
                'region_level' => 3,
                'parent_region_code' => '320100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'region_code' => '320124',
                'region_name' => '溧水县',
                'region_level' => 3,
                'parent_region_code' => '320100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'region_code' => '320125',
                'region_name' => '高淳县',
                'region_level' => 3,
                'parent_region_code' => '320100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'region_code' => '320200',
                'region_name' => '无锡市',
                'region_level' => 2,
                'parent_region_code' => '320000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'region_code' => '320201',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '320200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'region_code' => '320202',
                'region_name' => '崇安区',
                'region_level' => 3,
                'parent_region_code' => '320200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'region_code' => '320203',
                'region_name' => '南长区',
                'region_level' => 3,
                'parent_region_code' => '320200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'region_code' => '320204',
                'region_name' => '北塘区',
                'region_level' => 3,
                'parent_region_code' => '320200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'region_code' => '320205',
                'region_name' => '锡山区',
                'region_level' => 3,
                'parent_region_code' => '320200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'region_code' => '320206',
                'region_name' => '惠山区',
                'region_level' => 3,
                'parent_region_code' => '320200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'region_code' => '320211',
                'region_name' => '滨湖区',
                'region_level' => 3,
                'parent_region_code' => '320200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'region_code' => '320281',
                'region_name' => '江阴市',
                'region_level' => 3,
                'parent_region_code' => '320300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'region_code' => '320282',
                'region_name' => '宜兴市',
                'region_level' => 3,
                'parent_region_code' => '320300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'region_code' => '320300',
                'region_name' => '徐州市',
                'region_level' => 2,
                'parent_region_code' => '320000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'region_code' => '320301',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '320300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'region_code' => '320302',
                'region_name' => '鼓楼区',
                'region_level' => 3,
                'parent_region_code' => '320300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'region_code' => '320303',
                'region_name' => '云龙区',
                'region_level' => 3,
                'parent_region_code' => '320300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'region_code' => '320305',
                'region_name' => '贾汪区',
                'region_level' => 3,
                'parent_region_code' => '320300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'region_code' => '320311',
                'region_name' => '泉山区',
                'region_level' => 3,
                'parent_region_code' => '320300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'region_code' => '320312',
                'region_name' => '铜山区',
                'region_level' => 3,
                'parent_region_code' => '320300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'region_code' => '320321',
                'region_name' => '丰县',
                'region_level' => 3,
                'parent_region_code' => '320300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'region_code' => '320322',
                'region_name' => '沛县',
                'region_level' => 3,
                'parent_region_code' => '320300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'region_code' => '320324',
                'region_name' => '睢宁县',
                'region_level' => 3,
                'parent_region_code' => '320300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'region_code' => '320381',
                'region_name' => '新沂市',
                'region_level' => 3,
                'parent_region_code' => '320400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'region_code' => '320382',
                'region_name' => '邳州市',
                'region_level' => 3,
                'parent_region_code' => '320400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'region_code' => '320400',
                'region_name' => '常州市',
                'region_level' => 2,
                'parent_region_code' => '320000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'region_code' => '320401',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '320400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'region_code' => '320402',
                'region_name' => '天宁区',
                'region_level' => 3,
                'parent_region_code' => '320400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'region_code' => '320404',
                'region_name' => '钟楼区',
                'region_level' => 3,
                'parent_region_code' => '320400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'region_code' => '320405',
                'region_name' => '戚墅堰区',
                'region_level' => 3,
                'parent_region_code' => '320400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'region_code' => '320411',
                'region_name' => '新北区',
                'region_level' => 3,
                'parent_region_code' => '320400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'region_code' => '320412',
                'region_name' => '武进区',
                'region_level' => 3,
                'parent_region_code' => '320400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'region_code' => '320481',
                'region_name' => '溧阳市',
                'region_level' => 3,
                'parent_region_code' => '320500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'region_code' => '320482',
                'region_name' => '金坛市',
                'region_level' => 3,
                'parent_region_code' => '320500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'region_code' => '320500',
                'region_name' => '苏州市',
                'region_level' => 2,
                'parent_region_code' => '320000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'region_code' => '320501',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '320500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'region_code' => '320505',
                'region_name' => '虎丘区',
                'region_level' => 3,
                'parent_region_code' => '320500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'region_code' => '320506',
                'region_name' => '吴中区',
                'region_level' => 3,
                'parent_region_code' => '320500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'region_code' => '320507',
                'region_name' => '相城区',
                'region_level' => 3,
                'parent_region_code' => '320500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'region_code' => '320508',
                'region_name' => '姑苏区',
                'region_level' => 3,
                'parent_region_code' => '320500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'region_code' => '320509',
                'region_name' => '吴江区',
                'region_level' => 3,
                'parent_region_code' => '320500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'region_code' => '320581',
                'region_name' => '常熟市',
                'region_level' => 3,
                'parent_region_code' => '320600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'region_code' => '320582',
                'region_name' => '张家港市',
                'region_level' => 3,
                'parent_region_code' => '320600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'region_code' => '320583',
                'region_name' => '昆山市',
                'region_level' => 3,
                'parent_region_code' => '320600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'region_code' => '320585',
                'region_name' => '太仓市',
                'region_level' => 3,
                'parent_region_code' => '320600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'region_code' => '320600',
                'region_name' => '南通市',
                'region_level' => 2,
                'parent_region_code' => '320000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'region_code' => '320601',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '320600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'region_code' => '320602',
                'region_name' => '崇川区',
                'region_level' => 3,
                'parent_region_code' => '320600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'region_code' => '320611',
                'region_name' => '港闸区',
                'region_level' => 3,
                'parent_region_code' => '320600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'region_code' => '320612',
                'region_name' => '通州区',
                'region_level' => 3,
                'parent_region_code' => '320600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'region_code' => '320621',
                'region_name' => '海安县',
                'region_level' => 3,
                'parent_region_code' => '320600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'region_code' => '320623',
                'region_name' => '如东县',
                'region_level' => 3,
                'parent_region_code' => '320600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'region_code' => '320681',
                'region_name' => '启东市',
                'region_level' => 3,
                'parent_region_code' => '320700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'region_code' => '320682',
                'region_name' => '如皋市',
                'region_level' => 3,
                'parent_region_code' => '320700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'region_code' => '320684',
                'region_name' => '海门市',
                'region_level' => 3,
                'parent_region_code' => '320700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'region_code' => '320700',
                'region_name' => '连云港市',
                'region_level' => 2,
                'parent_region_code' => '320000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'region_code' => '320701',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '320700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'region_code' => '320703',
                'region_name' => '连云区',
                'region_level' => 3,
                'parent_region_code' => '320700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'region_code' => '320705',
                'region_name' => '新浦区',
                'region_level' => 3,
                'parent_region_code' => '320700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'region_code' => '320706',
                'region_name' => '海州区',
                'region_level' => 3,
                'parent_region_code' => '320700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'region_code' => '320721',
                'region_name' => '赣榆县',
                'region_level' => 3,
                'parent_region_code' => '320700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'region_code' => '320722',
                'region_name' => '东海县',
                'region_level' => 3,
                'parent_region_code' => '320700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'region_code' => '320723',
                'region_name' => '灌云县',
                'region_level' => 3,
                'parent_region_code' => '320700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'region_code' => '320724',
                'region_name' => '灌南县',
                'region_level' => 3,
                'parent_region_code' => '320700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'region_code' => '320800',
                'region_name' => '淮安市',
                'region_level' => 2,
                'parent_region_code' => '320000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'region_code' => '320801',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '320800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'region_code' => '320802',
                'region_name' => '清河区',
                'region_level' => 3,
                'parent_region_code' => '320800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'region_code' => '320803',
                'region_name' => '淮安区',
                'region_level' => 3,
                'parent_region_code' => '320800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'region_code' => '320804',
                'region_name' => '淮阴区',
                'region_level' => 3,
                'parent_region_code' => '320800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'region_code' => '320811',
                'region_name' => '清浦区',
                'region_level' => 3,
                'parent_region_code' => '320800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'region_code' => '320826',
                'region_name' => '涟水县',
                'region_level' => 3,
                'parent_region_code' => '320800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'region_code' => '320829',
                'region_name' => '洪泽县',
                'region_level' => 3,
                'parent_region_code' => '320800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'region_code' => '320830',
                'region_name' => '盱眙县',
                'region_level' => 3,
                'parent_region_code' => '320800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'region_code' => '320831',
                'region_name' => '金湖县',
                'region_level' => 3,
                'parent_region_code' => '320800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'region_code' => '320900',
                'region_name' => '盐城市',
                'region_level' => 2,
                'parent_region_code' => '320000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'region_code' => '320901',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '320900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'region_code' => '320902',
                'region_name' => '亭湖区',
                'region_level' => 3,
                'parent_region_code' => '320900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'region_code' => '320903',
                'region_name' => '盐都区',
                'region_level' => 3,
                'parent_region_code' => '320900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'region_code' => '320921',
                'region_name' => '响水县',
                'region_level' => 3,
                'parent_region_code' => '320900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'region_code' => '320922',
                'region_name' => '滨海县',
                'region_level' => 3,
                'parent_region_code' => '320900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'region_code' => '320923',
                'region_name' => '阜宁县',
                'region_level' => 3,
                'parent_region_code' => '320900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'region_code' => '320924',
                'region_name' => '射阳县',
                'region_level' => 3,
                'parent_region_code' => '320900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'region_code' => '320925',
                'region_name' => '建湖县',
                'region_level' => 3,
                'parent_region_code' => '320900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'region_code' => '320981',
                'region_name' => '东台市',
                'region_level' => 3,
                'parent_region_code' => '321000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'region_code' => '320982',
                'region_name' => '大丰市',
                'region_level' => 3,
                'parent_region_code' => '321000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'region_code' => '321000',
                'region_name' => '扬州市',
                'region_level' => 2,
                'parent_region_code' => '320000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'region_code' => '321001',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '321000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'region_code' => '321002',
                'region_name' => '广陵区',
                'region_level' => 3,
                'parent_region_code' => '321000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'region_code' => '321003',
                'region_name' => '邗江区',
                'region_level' => 3,
                'parent_region_code' => '321000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'region_code' => '321012',
                'region_name' => '江都区',
                'region_level' => 3,
                'parent_region_code' => '321000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'region_code' => '321023',
                'region_name' => '宝应县',
                'region_level' => 3,
                'parent_region_code' => '321000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'region_code' => '321081',
                'region_name' => '仪征市',
                'region_level' => 3,
                'parent_region_code' => '321100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'region_code' => '321084',
                'region_name' => '高邮市',
                'region_level' => 3,
                'parent_region_code' => '321100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'region_code' => '321100',
                'region_name' => '镇江市',
                'region_level' => 2,
                'parent_region_code' => '320000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'region_code' => '321101',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '321100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'region_code' => '321102',
                'region_name' => '京口区',
                'region_level' => 3,
                'parent_region_code' => '321100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'region_code' => '321111',
                'region_name' => '润州区',
                'region_level' => 3,
                'parent_region_code' => '321100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'region_code' => '321112',
                'region_name' => '丹徒区',
                'region_level' => 3,
                'parent_region_code' => '321100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'region_code' => '321181',
                'region_name' => '丹阳市',
                'region_level' => 3,
                'parent_region_code' => '321200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'region_code' => '321182',
                'region_name' => '扬中市',
                'region_level' => 3,
                'parent_region_code' => '321200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'region_code' => '321183',
                'region_name' => '句容市',
                'region_level' => 3,
                'parent_region_code' => '321200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'region_code' => '321200',
                'region_name' => '泰州市',
                'region_level' => 2,
                'parent_region_code' => '320000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'region_code' => '321201',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '321200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'region_code' => '321202',
                'region_name' => '海陵区',
                'region_level' => 3,
                'parent_region_code' => '321200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'region_code' => '321203',
                'region_name' => '高港区',
                'region_level' => 3,
                'parent_region_code' => '321200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'region_code' => '321281',
                'region_name' => '兴化市',
                'region_level' => 3,
                'parent_region_code' => '321300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'region_code' => '321282',
                'region_name' => '靖江市',
                'region_level' => 3,
                'parent_region_code' => '321300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'region_code' => '321283',
                'region_name' => '泰兴市',
                'region_level' => 3,
                'parent_region_code' => '321300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'region_code' => '321284',
                'region_name' => '姜堰市',
                'region_level' => 3,
                'parent_region_code' => '321300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'region_code' => '321300',
                'region_name' => '宿迁市',
                'region_level' => 2,
                'parent_region_code' => '320000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'region_code' => '321301',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '321300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'region_code' => '321302',
                'region_name' => '宿城区',
                'region_level' => 3,
                'parent_region_code' => '321300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'region_code' => '321311',
                'region_name' => '宿豫区',
                'region_level' => 3,
                'parent_region_code' => '321300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'region_code' => '321322',
                'region_name' => '沭阳县',
                'region_level' => 3,
                'parent_region_code' => '321300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'region_code' => '321323',
                'region_name' => '泗阳县',
                'region_level' => 3,
                'parent_region_code' => '321300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'region_code' => '321324',
                'region_name' => '泗洪县',
                'region_level' => 3,
                'parent_region_code' => '321300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'region_code' => '330000',
                'region_name' => '浙江省',
                'region_level' => 1,
                'parent_region_code' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'region_code' => '330100',
                'region_name' => '杭州市',
                'region_level' => 2,
                'parent_region_code' => '330000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'region_code' => '330101',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '330100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'region_code' => '330102',
                'region_name' => '上城区',
                'region_level' => 3,
                'parent_region_code' => '330100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'region_code' => '330103',
                'region_name' => '下城区',
                'region_level' => 3,
                'parent_region_code' => '330100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'region_code' => '330104',
                'region_name' => '江干区',
                'region_level' => 3,
                'parent_region_code' => '330100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'region_code' => '330105',
                'region_name' => '拱墅区',
                'region_level' => 3,
                'parent_region_code' => '330100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'region_code' => '330106',
                'region_name' => '西湖区',
                'region_level' => 3,
                'parent_region_code' => '330100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'region_code' => '330108',
                'region_name' => '滨江区',
                'region_level' => 3,
                'parent_region_code' => '330100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'region_code' => '330109',
                'region_name' => '萧山区',
                'region_level' => 3,
                'parent_region_code' => '330100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'region_code' => '330110',
                'region_name' => '余杭区',
                'region_level' => 3,
                'parent_region_code' => '330100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'region_code' => '330122',
                'region_name' => '桐庐县',
                'region_level' => 3,
                'parent_region_code' => '330100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'region_code' => '330127',
                'region_name' => '淳安县',
                'region_level' => 3,
                'parent_region_code' => '330100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'region_code' => '330182',
                'region_name' => '建德市',
                'region_level' => 3,
                'parent_region_code' => '330200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'region_code' => '330183',
                'region_name' => '富阳市',
                'region_level' => 3,
                'parent_region_code' => '330200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'region_code' => '330185',
                'region_name' => '临安市',
                'region_level' => 3,
                'parent_region_code' => '330200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'region_code' => '330200',
                'region_name' => '宁波市',
                'region_level' => 2,
                'parent_region_code' => '330000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'region_code' => '330201',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '330200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'region_code' => '330203',
                'region_name' => '海曙区',
                'region_level' => 3,
                'parent_region_code' => '330200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'region_code' => '330204',
                'region_name' => '江东区',
                'region_level' => 3,
                'parent_region_code' => '330200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'region_code' => '330205',
                'region_name' => '江北区',
                'region_level' => 3,
                'parent_region_code' => '330200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'region_code' => '330206',
                'region_name' => '北仑区',
                'region_level' => 3,
                'parent_region_code' => '330200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'region_code' => '330211',
                'region_name' => '镇海区',
                'region_level' => 3,
                'parent_region_code' => '330200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'region_code' => '330212',
                'region_name' => '鄞州区',
                'region_level' => 3,
                'parent_region_code' => '330200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'region_code' => '330225',
                'region_name' => '象山县',
                'region_level' => 3,
                'parent_region_code' => '330200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'region_code' => '330226',
                'region_name' => '宁海县',
                'region_level' => 3,
                'parent_region_code' => '330200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'region_code' => '330281',
                'region_name' => '余姚市',
                'region_level' => 3,
                'parent_region_code' => '330300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'region_code' => '330282',
                'region_name' => '慈溪市',
                'region_level' => 3,
                'parent_region_code' => '330300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'region_code' => '330283',
                'region_name' => '奉化市',
                'region_level' => 3,
                'parent_region_code' => '330300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'region_code' => '330300',
                'region_name' => '温州市',
                'region_level' => 2,
                'parent_region_code' => '330000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'region_code' => '330301',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '330300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'region_code' => '330302',
                'region_name' => '鹿城区',
                'region_level' => 3,
                'parent_region_code' => '330300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'region_code' => '330303',
                'region_name' => '龙湾区',
                'region_level' => 3,
                'parent_region_code' => '330300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'region_code' => '330304',
                'region_name' => '瓯海区',
                'region_level' => 3,
                'parent_region_code' => '330300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'region_code' => '330322',
                'region_name' => '洞头县',
                'region_level' => 3,
                'parent_region_code' => '330300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'region_code' => '330324',
                'region_name' => '永嘉县',
                'region_level' => 3,
                'parent_region_code' => '330300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'region_code' => '330326',
                'region_name' => '平阳县',
                'region_level' => 3,
                'parent_region_code' => '330300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'region_code' => '330327',
                'region_name' => '苍南县',
                'region_level' => 3,
                'parent_region_code' => '330300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'region_code' => '330328',
                'region_name' => '文成县',
                'region_level' => 3,
                'parent_region_code' => '330300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'region_code' => '330329',
                'region_name' => '泰顺县',
                'region_level' => 3,
                'parent_region_code' => '330300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'region_code' => '330381',
                'region_name' => '瑞安市',
                'region_level' => 3,
                'parent_region_code' => '330400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'region_code' => '330382',
                'region_name' => '乐清市',
                'region_level' => 3,
                'parent_region_code' => '330400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'region_code' => '330400',
                'region_name' => '嘉兴市',
                'region_level' => 2,
                'parent_region_code' => '330000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'region_code' => '330401',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '330400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'region_code' => '330402',
                'region_name' => '南湖区',
                'region_level' => 3,
                'parent_region_code' => '330400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'region_code' => '330411',
                'region_name' => '秀洲区',
                'region_level' => 3,
                'parent_region_code' => '330400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'region_code' => '330421',
                'region_name' => '嘉善县',
                'region_level' => 3,
                'parent_region_code' => '330400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'region_code' => '330424',
                'region_name' => '海盐县',
                'region_level' => 3,
                'parent_region_code' => '330400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'region_code' => '330481',
                'region_name' => '海宁市',
                'region_level' => 3,
                'parent_region_code' => '330500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'region_code' => '330482',
                'region_name' => '平湖市',
                'region_level' => 3,
                'parent_region_code' => '330500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'region_code' => '330483',
                'region_name' => '桐乡市',
                'region_level' => 3,
                'parent_region_code' => '330500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'region_code' => '330500',
                'region_name' => '湖州市',
                'region_level' => 2,
                'parent_region_code' => '330000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'region_code' => '330501',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '330500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'region_code' => '330502',
                'region_name' => '吴兴区',
                'region_level' => 3,
                'parent_region_code' => '330500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'region_code' => '330503',
                'region_name' => '南浔区',
                'region_level' => 3,
                'parent_region_code' => '330500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'region_code' => '330521',
                'region_name' => '德清县',
                'region_level' => 3,
                'parent_region_code' => '330500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'region_code' => '330522',
                'region_name' => '长兴县',
                'region_level' => 3,
                'parent_region_code' => '330500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'region_code' => '330523',
                'region_name' => '安吉县',
                'region_level' => 3,
                'parent_region_code' => '330500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'region_code' => '330600',
                'region_name' => '绍兴市',
                'region_level' => 2,
                'parent_region_code' => '330000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'region_code' => '330601',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '330600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'region_code' => '330602',
                'region_name' => '越城区',
                'region_level' => 3,
                'parent_region_code' => '330600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'region_code' => '330621',
                'region_name' => '绍兴县',
                'region_level' => 3,
                'parent_region_code' => '330600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'region_code' => '330624',
                'region_name' => '新昌县',
                'region_level' => 3,
                'parent_region_code' => '330600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'region_code' => '330681',
                'region_name' => '诸暨市',
                'region_level' => 3,
                'parent_region_code' => '330700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'region_code' => '330682',
                'region_name' => '上虞市',
                'region_level' => 3,
                'parent_region_code' => '330700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'region_code' => '330683',
                'region_name' => '嵊州市',
                'region_level' => 3,
                'parent_region_code' => '330700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'region_code' => '330700',
                'region_name' => '金华市',
                'region_level' => 2,
                'parent_region_code' => '330000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'region_code' => '330701',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '330700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'region_code' => '330702',
                'region_name' => '婺城区',
                'region_level' => 3,
                'parent_region_code' => '330700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'region_code' => '330703',
                'region_name' => '金东区',
                'region_level' => 3,
                'parent_region_code' => '330700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'region_code' => '330723',
                'region_name' => '武义县',
                'region_level' => 3,
                'parent_region_code' => '330700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'region_code' => '330726',
                'region_name' => '浦江县',
                'region_level' => 3,
                'parent_region_code' => '330700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'region_code' => '330727',
                'region_name' => '磐安县',
                'region_level' => 3,
                'parent_region_code' => '330700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'region_code' => '330781',
                'region_name' => '兰溪市',
                'region_level' => 3,
                'parent_region_code' => '330800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'region_code' => '330782',
                'region_name' => '义乌市',
                'region_level' => 3,
                'parent_region_code' => '330800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'region_code' => '330783',
                'region_name' => '东阳市',
                'region_level' => 3,
                'parent_region_code' => '330800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'region_code' => '330784',
                'region_name' => '永康市',
                'region_level' => 3,
                'parent_region_code' => '330800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'region_code' => '330800',
                'region_name' => '衢州市',
                'region_level' => 2,
                'parent_region_code' => '330000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'region_code' => '330801',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '330800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'region_code' => '330802',
                'region_name' => '柯城区',
                'region_level' => 3,
                'parent_region_code' => '330800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'region_code' => '330803',
                'region_name' => '衢江区',
                'region_level' => 3,
                'parent_region_code' => '330800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'region_code' => '330822',
                'region_name' => '常山县',
                'region_level' => 3,
                'parent_region_code' => '330800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'region_code' => '330824',
                'region_name' => '开化县',
                'region_level' => 3,
                'parent_region_code' => '330800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'region_code' => '330825',
                'region_name' => '龙游县',
                'region_level' => 3,
                'parent_region_code' => '330800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'region_code' => '330881',
                'region_name' => '江山市',
                'region_level' => 3,
                'parent_region_code' => '330900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'region_code' => '330900',
                'region_name' => '舟山市',
                'region_level' => 2,
                'parent_region_code' => '330000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'region_code' => '330901',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '330900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'region_code' => '330902',
                'region_name' => '定海区',
                'region_level' => 3,
                'parent_region_code' => '330900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'region_code' => '330903',
                'region_name' => '普陀区',
                'region_level' => 3,
                'parent_region_code' => '330900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'region_code' => '330921',
                'region_name' => '岱山县',
                'region_level' => 3,
                'parent_region_code' => '330900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'region_code' => '330922',
                'region_name' => '嵊泗县',
                'region_level' => 3,
                'parent_region_code' => '330900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'region_code' => '331000',
                'region_name' => '台州市',
                'region_level' => 2,
                'parent_region_code' => '330000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'region_code' => '331001',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '331000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'region_code' => '331002',
                'region_name' => '椒江区',
                'region_level' => 3,
                'parent_region_code' => '331000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'region_code' => '331003',
                'region_name' => '黄岩区',
                'region_level' => 3,
                'parent_region_code' => '331000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'region_code' => '331004',
                'region_name' => '路桥区',
                'region_level' => 3,
                'parent_region_code' => '331000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'region_code' => '331021',
                'region_name' => '玉环县',
                'region_level' => 3,
                'parent_region_code' => '331000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'region_code' => '331022',
                'region_name' => '三门县',
                'region_level' => 3,
                'parent_region_code' => '331000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'region_code' => '331023',
                'region_name' => '天台县',
                'region_level' => 3,
                'parent_region_code' => '331000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'region_code' => '331024',
                'region_name' => '仙居县',
                'region_level' => 3,
                'parent_region_code' => '331000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'region_code' => '331081',
                'region_name' => '温岭市',
                'region_level' => 3,
                'parent_region_code' => '331100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'region_code' => '331082',
                'region_name' => '临海市',
                'region_level' => 3,
                'parent_region_code' => '331100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'region_code' => '331100',
                'region_name' => '丽水市',
                'region_level' => 2,
                'parent_region_code' => '330000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'region_code' => '331101',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '331100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'region_code' => '331102',
                'region_name' => '莲都区',
                'region_level' => 3,
                'parent_region_code' => '331100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'region_code' => '331121',
                'region_name' => '青田县',
                'region_level' => 3,
                'parent_region_code' => '331100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'region_code' => '331122',
                'region_name' => '缙云县',
                'region_level' => 3,
                'parent_region_code' => '331100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'region_code' => '331123',
                'region_name' => '遂昌县',
                'region_level' => 3,
                'parent_region_code' => '331100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'region_code' => '331124',
                'region_name' => '松阳县',
                'region_level' => 3,
                'parent_region_code' => '331100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'region_code' => '331125',
                'region_name' => '云和县',
                'region_level' => 3,
                'parent_region_code' => '331100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'region_code' => '331126',
                'region_name' => '庆元县',
                'region_level' => 3,
                'parent_region_code' => '331100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'region_code' => '331127',
                'region_name' => '景宁畲族自治县',
                'region_level' => 3,
                'parent_region_code' => '331100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'region_code' => '331181',
                'region_name' => '龙泉市',
                'region_level' => 3,
                'parent_region_code' => '331200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'region_code' => '340000',
                'region_name' => '安徽省',
                'region_level' => 1,
                'parent_region_code' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'region_code' => '340100',
                'region_name' => '合肥市',
                'region_level' => 2,
                'parent_region_code' => '340000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'region_code' => '340101',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '340100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'region_code' => '340102',
                'region_name' => '瑶海区',
                'region_level' => 3,
                'parent_region_code' => '340100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'region_code' => '340103',
                'region_name' => '庐阳区',
                'region_level' => 3,
                'parent_region_code' => '340100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'region_code' => '340104',
                'region_name' => '蜀山区',
                'region_level' => 3,
                'parent_region_code' => '340100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'region_code' => '340111',
                'region_name' => '包河区',
                'region_level' => 3,
                'parent_region_code' => '340100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'region_code' => '340121',
                'region_name' => '长丰县',
                'region_level' => 3,
                'parent_region_code' => '340100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'region_code' => '340122',
                'region_name' => '肥东县',
                'region_level' => 3,
                'parent_region_code' => '340100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'region_code' => '340123',
                'region_name' => '肥西县',
                'region_level' => 3,
                'parent_region_code' => '340100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'region_code' => '340124',
                'region_name' => '庐江县',
                'region_level' => 3,
                'parent_region_code' => '340100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'region_code' => '340181',
                'region_name' => '巢湖市',
                'region_level' => 3,
                'parent_region_code' => '340200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'region_code' => '340200',
                'region_name' => '芜湖市',
                'region_level' => 2,
                'parent_region_code' => '340000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'region_code' => '340201',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '340200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'region_code' => '340202',
                'region_name' => '镜湖区',
                'region_level' => 3,
                'parent_region_code' => '340200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'region_code' => '340203',
                'region_name' => '弋江区',
                'region_level' => 3,
                'parent_region_code' => '340200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'region_code' => '340207',
                'region_name' => '鸠江区',
                'region_level' => 3,
                'parent_region_code' => '340200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'region_code' => '340208',
                'region_name' => '三山区',
                'region_level' => 3,
                'parent_region_code' => '340200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'region_code' => '340221',
                'region_name' => '芜湖县',
                'region_level' => 3,
                'parent_region_code' => '340200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'region_code' => '340222',
                'region_name' => '繁昌县',
                'region_level' => 3,
                'parent_region_code' => '340200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'region_code' => '340223',
                'region_name' => '南陵县',
                'region_level' => 3,
                'parent_region_code' => '340200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'region_code' => '340225',
                'region_name' => '无为县',
                'region_level' => 3,
                'parent_region_code' => '340200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'region_code' => '340300',
                'region_name' => '蚌埠市',
                'region_level' => 2,
                'parent_region_code' => '340000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'region_code' => '340301',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '340300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'region_code' => '340302',
                'region_name' => '龙子湖区',
                'region_level' => 3,
                'parent_region_code' => '340300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'region_code' => '340303',
                'region_name' => '蚌山区',
                'region_level' => 3,
                'parent_region_code' => '340300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'region_code' => '340304',
                'region_name' => '禹会区',
                'region_level' => 3,
                'parent_region_code' => '340300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'region_code' => '340311',
                'region_name' => '淮上区',
                'region_level' => 3,
                'parent_region_code' => '340300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'region_code' => '340321',
                'region_name' => '怀远县',
                'region_level' => 3,
                'parent_region_code' => '340300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'region_code' => '340322',
                'region_name' => '五河县',
                'region_level' => 3,
                'parent_region_code' => '340300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'region_code' => '340323',
                'region_name' => '固镇县',
                'region_level' => 3,
                'parent_region_code' => '340300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'region_code' => '340400',
                'region_name' => '淮南市',
                'region_level' => 2,
                'parent_region_code' => '340000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'region_code' => '340401',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '340400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'region_code' => '340402',
                'region_name' => '大通区',
                'region_level' => 3,
                'parent_region_code' => '340400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'region_code' => '340403',
                'region_name' => '田家庵区',
                'region_level' => 3,
                'parent_region_code' => '340400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'region_code' => '340404',
                'region_name' => '谢家集区',
                'region_level' => 3,
                'parent_region_code' => '340400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'region_code' => '340405',
                'region_name' => '八公山区',
                'region_level' => 3,
                'parent_region_code' => '340400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'region_code' => '340406',
                'region_name' => '潘集区',
                'region_level' => 3,
                'parent_region_code' => '340400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'region_code' => '340421',
                'region_name' => '凤台县',
                'region_level' => 3,
                'parent_region_code' => '340400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'region_code' => '340500',
                'region_name' => '马鞍山市',
                'region_level' => 2,
                'parent_region_code' => '340000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'region_code' => '340501',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '340500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'region_code' => '340503',
                'region_name' => '花山区',
                'region_level' => 3,
                'parent_region_code' => '340500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'region_code' => '340504',
                'region_name' => '雨山区',
                'region_level' => 3,
                'parent_region_code' => '340500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'region_code' => '340506',
                'region_name' => '博望区',
                'region_level' => 3,
                'parent_region_code' => '340500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'region_code' => '340521',
                'region_name' => '当涂县',
                'region_level' => 3,
                'parent_region_code' => '340500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'region_code' => '340522',
                'region_name' => '含山县',
                'region_level' => 3,
                'parent_region_code' => '340500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'region_code' => '340523',
                'region_name' => '和县',
                'region_level' => 3,
                'parent_region_code' => '340500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'region_code' => '340600',
                'region_name' => '淮北市',
                'region_level' => 2,
                'parent_region_code' => '340000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'region_code' => '340601',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '340600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'region_code' => '340602',
                'region_name' => '杜集区',
                'region_level' => 3,
                'parent_region_code' => '340600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'region_code' => '340603',
                'region_name' => '相山区',
                'region_level' => 3,
                'parent_region_code' => '340600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'region_code' => '340604',
                'region_name' => '烈山区',
                'region_level' => 3,
                'parent_region_code' => '340600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'region_code' => '340621',
                'region_name' => '濉溪县',
                'region_level' => 3,
                'parent_region_code' => '340600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'region_code' => '340700',
                'region_name' => '铜陵市',
                'region_level' => 2,
                'parent_region_code' => '340000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'region_code' => '340701',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '340700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'region_code' => '340702',
                'region_name' => '铜官山区',
                'region_level' => 3,
                'parent_region_code' => '340700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'region_code' => '340703',
                'region_name' => '狮子山区',
                'region_level' => 3,
                'parent_region_code' => '340700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'region_code' => '340711',
                'region_name' => '郊区',
                'region_level' => 3,
                'parent_region_code' => '340700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'region_code' => '340721',
                'region_name' => '铜陵县',
                'region_level' => 3,
                'parent_region_code' => '340700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'region_code' => '340800',
                'region_name' => '安庆市',
                'region_level' => 2,
                'parent_region_code' => '340000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'region_code' => '340801',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '340800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'region_code' => '340802',
                'region_name' => '迎江区',
                'region_level' => 3,
                'parent_region_code' => '340800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'region_code' => '340803',
                'region_name' => '大观区',
                'region_level' => 3,
                'parent_region_code' => '340800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'region_code' => '340811',
                'region_name' => '宜秀区',
                'region_level' => 3,
                'parent_region_code' => '340800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'region_code' => '340822',
                'region_name' => '怀宁县',
                'region_level' => 3,
                'parent_region_code' => '340800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'region_code' => '340823',
                'region_name' => '枞阳县',
                'region_level' => 3,
                'parent_region_code' => '340800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'region_code' => '340824',
                'region_name' => '潜山县',
                'region_level' => 3,
                'parent_region_code' => '340800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'region_code' => '340825',
                'region_name' => '太湖县',
                'region_level' => 3,
                'parent_region_code' => '340800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'region_code' => '340826',
                'region_name' => '宿松县',
                'region_level' => 3,
                'parent_region_code' => '340800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'region_code' => '340827',
                'region_name' => '望江县',
                'region_level' => 3,
                'parent_region_code' => '340800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'region_code' => '340828',
                'region_name' => '岳西县',
                'region_level' => 3,
                'parent_region_code' => '340800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'region_code' => '340881',
                'region_name' => '桐城市',
                'region_level' => 3,
                'parent_region_code' => '340900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'region_code' => '341000',
                'region_name' => '黄山市',
                'region_level' => 2,
                'parent_region_code' => '340000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'region_code' => '341001',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '341000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'region_code' => '341002',
                'region_name' => '屯溪区',
                'region_level' => 3,
                'parent_region_code' => '341000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'region_code' => '341003',
                'region_name' => '黄山区',
                'region_level' => 3,
                'parent_region_code' => '341000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'region_code' => '341004',
                'region_name' => '徽州区',
                'region_level' => 3,
                'parent_region_code' => '341000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'region_code' => '341021',
                'region_name' => '歙县',
                'region_level' => 3,
                'parent_region_code' => '341000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'region_code' => '341022',
                'region_name' => '休宁县',
                'region_level' => 3,
                'parent_region_code' => '341000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'region_code' => '341023',
                'region_name' => '黟县',
                'region_level' => 3,
                'parent_region_code' => '341000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'region_code' => '341024',
                'region_name' => '祁门县',
                'region_level' => 3,
                'parent_region_code' => '341000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'region_code' => '341100',
                'region_name' => '滁州市',
                'region_level' => 2,
                'parent_region_code' => '340000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'region_code' => '341101',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '341100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'region_code' => '341102',
                'region_name' => '琅琊区',
                'region_level' => 3,
                'parent_region_code' => '341100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'region_code' => '341103',
                'region_name' => '南谯区',
                'region_level' => 3,
                'parent_region_code' => '341100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'region_code' => '341122',
                'region_name' => '来安县',
                'region_level' => 3,
                'parent_region_code' => '341100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'region_code' => '341124',
                'region_name' => '全椒县',
                'region_level' => 3,
                'parent_region_code' => '341100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'region_code' => '341125',
                'region_name' => '定远县',
                'region_level' => 3,
                'parent_region_code' => '341100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'region_code' => '341126',
                'region_name' => '凤阳县',
                'region_level' => 3,
                'parent_region_code' => '341100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'region_code' => '341181',
                'region_name' => '天长市',
                'region_level' => 3,
                'parent_region_code' => '341200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'region_code' => '341182',
                'region_name' => '明光市',
                'region_level' => 3,
                'parent_region_code' => '341200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'region_code' => '341200',
                'region_name' => '阜阳市',
                'region_level' => 2,
                'parent_region_code' => '340000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'region_code' => '341201',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '341200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'region_code' => '341202',
                'region_name' => '颍州区',
                'region_level' => 3,
                'parent_region_code' => '341200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'region_code' => '341203',
                'region_name' => '颍东区',
                'region_level' => 3,
                'parent_region_code' => '341200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'region_code' => '341204',
                'region_name' => '颍泉区',
                'region_level' => 3,
                'parent_region_code' => '341200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'region_code' => '341221',
                'region_name' => '临泉县',
                'region_level' => 3,
                'parent_region_code' => '341200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'region_code' => '341222',
                'region_name' => '太和县',
                'region_level' => 3,
                'parent_region_code' => '341200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'region_code' => '341225',
                'region_name' => '阜南县',
                'region_level' => 3,
                'parent_region_code' => '341200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'region_code' => '341226',
                'region_name' => '颍上县',
                'region_level' => 3,
                'parent_region_code' => '341200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'region_code' => '341282',
                'region_name' => '界首市',
                'region_level' => 3,
                'parent_region_code' => '341300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'region_code' => '341300',
                'region_name' => '宿州市',
                'region_level' => 2,
                'parent_region_code' => '340000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('regions')->insert(array (
            0 => 
            array (
                'region_code' => '341301',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '341300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'region_code' => '341302',
                'region_name' => '埇桥区',
                'region_level' => 3,
                'parent_region_code' => '341300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'region_code' => '341321',
                'region_name' => '砀山县',
                'region_level' => 3,
                'parent_region_code' => '341300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'region_code' => '341322',
                'region_name' => '萧县',
                'region_level' => 3,
                'parent_region_code' => '341300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'region_code' => '341323',
                'region_name' => '灵璧县',
                'region_level' => 3,
                'parent_region_code' => '341300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'region_code' => '341324',
                'region_name' => '泗县',
                'region_level' => 3,
                'parent_region_code' => '341300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'region_code' => '341500',
                'region_name' => '六安市',
                'region_level' => 2,
                'parent_region_code' => '340000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'region_code' => '341501',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '341500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'region_code' => '341502',
                'region_name' => '金安区',
                'region_level' => 3,
                'parent_region_code' => '341500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'region_code' => '341503',
                'region_name' => '裕安区',
                'region_level' => 3,
                'parent_region_code' => '341500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'region_code' => '341521',
                'region_name' => '寿县',
                'region_level' => 3,
                'parent_region_code' => '341500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'region_code' => '341522',
                'region_name' => '霍邱县',
                'region_level' => 3,
                'parent_region_code' => '341500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'region_code' => '341523',
                'region_name' => '舒城县',
                'region_level' => 3,
                'parent_region_code' => '341500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'region_code' => '341524',
                'region_name' => '金寨县',
                'region_level' => 3,
                'parent_region_code' => '341500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'region_code' => '341525',
                'region_name' => '霍山县',
                'region_level' => 3,
                'parent_region_code' => '341500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'region_code' => '341600',
                'region_name' => '亳州市',
                'region_level' => 2,
                'parent_region_code' => '340000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'region_code' => '341601',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '341600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'region_code' => '341602',
                'region_name' => '谯城区',
                'region_level' => 3,
                'parent_region_code' => '341600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'region_code' => '341621',
                'region_name' => '涡阳县',
                'region_level' => 3,
                'parent_region_code' => '341600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'region_code' => '341622',
                'region_name' => '蒙城县',
                'region_level' => 3,
                'parent_region_code' => '341600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'region_code' => '341623',
                'region_name' => '利辛县',
                'region_level' => 3,
                'parent_region_code' => '341600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'region_code' => '341700',
                'region_name' => '池州市',
                'region_level' => 2,
                'parent_region_code' => '340000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'region_code' => '341701',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '341700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'region_code' => '341702',
                'region_name' => '贵池区',
                'region_level' => 3,
                'parent_region_code' => '341700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'region_code' => '341721',
                'region_name' => '东至县',
                'region_level' => 3,
                'parent_region_code' => '341700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'region_code' => '341722',
                'region_name' => '石台县',
                'region_level' => 3,
                'parent_region_code' => '341700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'region_code' => '341723',
                'region_name' => '青阳县',
                'region_level' => 3,
                'parent_region_code' => '341700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'region_code' => '341800',
                'region_name' => '宣城市',
                'region_level' => 2,
                'parent_region_code' => '340000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'region_code' => '341801',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '341800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'region_code' => '341802',
                'region_name' => '宣州区',
                'region_level' => 3,
                'parent_region_code' => '341800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'region_code' => '341821',
                'region_name' => '郎溪县',
                'region_level' => 3,
                'parent_region_code' => '341800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'region_code' => '341822',
                'region_name' => '广德县',
                'region_level' => 3,
                'parent_region_code' => '341800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'region_code' => '341823',
                'region_name' => '泾县',
                'region_level' => 3,
                'parent_region_code' => '341800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'region_code' => '341824',
                'region_name' => '绩溪县',
                'region_level' => 3,
                'parent_region_code' => '341800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'region_code' => '341825',
                'region_name' => '旌德县',
                'region_level' => 3,
                'parent_region_code' => '341800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'region_code' => '341881',
                'region_name' => '宁国市',
                'region_level' => 3,
                'parent_region_code' => '341900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'region_code' => '350000',
                'region_name' => '福建省',
                'region_level' => 1,
                'parent_region_code' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'region_code' => '350100',
                'region_name' => '福州市',
                'region_level' => 2,
                'parent_region_code' => '350000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'region_code' => '350101',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '350100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'region_code' => '350102',
                'region_name' => '鼓楼区',
                'region_level' => 3,
                'parent_region_code' => '350100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'region_code' => '350103',
                'region_name' => '台江区',
                'region_level' => 3,
                'parent_region_code' => '350100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'region_code' => '350104',
                'region_name' => '仓山区',
                'region_level' => 3,
                'parent_region_code' => '350100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'region_code' => '350105',
                'region_name' => '马尾区',
                'region_level' => 3,
                'parent_region_code' => '350100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'region_code' => '350111',
                'region_name' => '晋安区',
                'region_level' => 3,
                'parent_region_code' => '350100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'region_code' => '350121',
                'region_name' => '闽侯县',
                'region_level' => 3,
                'parent_region_code' => '350100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'region_code' => '350122',
                'region_name' => '连江县',
                'region_level' => 3,
                'parent_region_code' => '350100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'region_code' => '350123',
                'region_name' => '罗源县',
                'region_level' => 3,
                'parent_region_code' => '350100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'region_code' => '350124',
                'region_name' => '闽清县',
                'region_level' => 3,
                'parent_region_code' => '350100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'region_code' => '350125',
                'region_name' => '永泰县',
                'region_level' => 3,
                'parent_region_code' => '350100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'region_code' => '350128',
                'region_name' => '平潭县',
                'region_level' => 3,
                'parent_region_code' => '350100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'region_code' => '350181',
                'region_name' => '福清市',
                'region_level' => 3,
                'parent_region_code' => '350200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'region_code' => '350182',
                'region_name' => '长乐市',
                'region_level' => 3,
                'parent_region_code' => '350200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'region_code' => '350200',
                'region_name' => '厦门市',
                'region_level' => 2,
                'parent_region_code' => '350000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'region_code' => '350201',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '350200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'region_code' => '350203',
                'region_name' => '思明区',
                'region_level' => 3,
                'parent_region_code' => '350200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'region_code' => '350205',
                'region_name' => '海沧区',
                'region_level' => 3,
                'parent_region_code' => '350200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'region_code' => '350206',
                'region_name' => '湖里区',
                'region_level' => 3,
                'parent_region_code' => '350200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'region_code' => '350211',
                'region_name' => '集美区',
                'region_level' => 3,
                'parent_region_code' => '350200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'region_code' => '350212',
                'region_name' => '同安区',
                'region_level' => 3,
                'parent_region_code' => '350200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'region_code' => '350213',
                'region_name' => '翔安区',
                'region_level' => 3,
                'parent_region_code' => '350200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'region_code' => '350300',
                'region_name' => '莆田市',
                'region_level' => 2,
                'parent_region_code' => '350000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'region_code' => '350301',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '350300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'region_code' => '350302',
                'region_name' => '城厢区',
                'region_level' => 3,
                'parent_region_code' => '350300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'region_code' => '350303',
                'region_name' => '涵江区',
                'region_level' => 3,
                'parent_region_code' => '350300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'region_code' => '350304',
                'region_name' => '荔城区',
                'region_level' => 3,
                'parent_region_code' => '350300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'region_code' => '350305',
                'region_name' => '秀屿区',
                'region_level' => 3,
                'parent_region_code' => '350300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'region_code' => '350322',
                'region_name' => '仙游县',
                'region_level' => 3,
                'parent_region_code' => '350300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'region_code' => '350400',
                'region_name' => '三明市',
                'region_level' => 2,
                'parent_region_code' => '350000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'region_code' => '350401',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '350400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'region_code' => '350402',
                'region_name' => '梅列区',
                'region_level' => 3,
                'parent_region_code' => '350400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'region_code' => '350403',
                'region_name' => '三元区',
                'region_level' => 3,
                'parent_region_code' => '350400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'region_code' => '350421',
                'region_name' => '明溪县',
                'region_level' => 3,
                'parent_region_code' => '350400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'region_code' => '350423',
                'region_name' => '清流县',
                'region_level' => 3,
                'parent_region_code' => '350400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'region_code' => '350424',
                'region_name' => '宁化县',
                'region_level' => 3,
                'parent_region_code' => '350400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'region_code' => '350425',
                'region_name' => '大田县',
                'region_level' => 3,
                'parent_region_code' => '350400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'region_code' => '350426',
                'region_name' => '尤溪县',
                'region_level' => 3,
                'parent_region_code' => '350400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'region_code' => '350427',
                'region_name' => '沙县',
                'region_level' => 3,
                'parent_region_code' => '350400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'region_code' => '350428',
                'region_name' => '将乐县',
                'region_level' => 3,
                'parent_region_code' => '350400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'region_code' => '350429',
                'region_name' => '泰宁县',
                'region_level' => 3,
                'parent_region_code' => '350400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'region_code' => '350430',
                'region_name' => '建宁县',
                'region_level' => 3,
                'parent_region_code' => '350400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'region_code' => '350481',
                'region_name' => '永安市',
                'region_level' => 3,
                'parent_region_code' => '350500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'region_code' => '350500',
                'region_name' => '泉州市',
                'region_level' => 2,
                'parent_region_code' => '350000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'region_code' => '350501',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '350500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'region_code' => '350502',
                'region_name' => '鲤城区',
                'region_level' => 3,
                'parent_region_code' => '350500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'region_code' => '350503',
                'region_name' => '丰泽区',
                'region_level' => 3,
                'parent_region_code' => '350500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'region_code' => '350504',
                'region_name' => '洛江区',
                'region_level' => 3,
                'parent_region_code' => '350500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'region_code' => '350505',
                'region_name' => '泉港区',
                'region_level' => 3,
                'parent_region_code' => '350500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'region_code' => '350521',
                'region_name' => '惠安县',
                'region_level' => 3,
                'parent_region_code' => '350500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'region_code' => '350524',
                'region_name' => '安溪县',
                'region_level' => 3,
                'parent_region_code' => '350500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'region_code' => '350525',
                'region_name' => '永春县',
                'region_level' => 3,
                'parent_region_code' => '350500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'region_code' => '350526',
                'region_name' => '德化县',
                'region_level' => 3,
                'parent_region_code' => '350500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'region_code' => '350527',
                'region_name' => '金门县',
                'region_level' => 3,
                'parent_region_code' => '350500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'region_code' => '350581',
                'region_name' => '石狮市',
                'region_level' => 3,
                'parent_region_code' => '350600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'region_code' => '350582',
                'region_name' => '晋江市',
                'region_level' => 3,
                'parent_region_code' => '350600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'region_code' => '350583',
                'region_name' => '南安市',
                'region_level' => 3,
                'parent_region_code' => '350600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'region_code' => '350600',
                'region_name' => '漳州市',
                'region_level' => 2,
                'parent_region_code' => '350000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'region_code' => '350601',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '350600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'region_code' => '350602',
                'region_name' => '芗城区',
                'region_level' => 3,
                'parent_region_code' => '350600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'region_code' => '350603',
                'region_name' => '龙文区',
                'region_level' => 3,
                'parent_region_code' => '350600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'region_code' => '350622',
                'region_name' => '云霄县',
                'region_level' => 3,
                'parent_region_code' => '350600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'region_code' => '350623',
                'region_name' => '漳浦县',
                'region_level' => 3,
                'parent_region_code' => '350600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'region_code' => '350624',
                'region_name' => '诏安县',
                'region_level' => 3,
                'parent_region_code' => '350600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'region_code' => '350625',
                'region_name' => '长泰县',
                'region_level' => 3,
                'parent_region_code' => '350600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'region_code' => '350626',
                'region_name' => '东山县',
                'region_level' => 3,
                'parent_region_code' => '350600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'region_code' => '350627',
                'region_name' => '南靖县',
                'region_level' => 3,
                'parent_region_code' => '350600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'region_code' => '350628',
                'region_name' => '平和县',
                'region_level' => 3,
                'parent_region_code' => '350600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'region_code' => '350629',
                'region_name' => '华安县',
                'region_level' => 3,
                'parent_region_code' => '350600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'region_code' => '350681',
                'region_name' => '龙海市',
                'region_level' => 3,
                'parent_region_code' => '350700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'region_code' => '350700',
                'region_name' => '南平市',
                'region_level' => 2,
                'parent_region_code' => '350000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'region_code' => '350701',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '350700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'region_code' => '350702',
                'region_name' => '延平区',
                'region_level' => 3,
                'parent_region_code' => '350700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'region_code' => '350721',
                'region_name' => '顺昌县',
                'region_level' => 3,
                'parent_region_code' => '350700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'region_code' => '350722',
                'region_name' => '浦城县',
                'region_level' => 3,
                'parent_region_code' => '350700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'region_code' => '350723',
                'region_name' => '光泽县',
                'region_level' => 3,
                'parent_region_code' => '350700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'region_code' => '350724',
                'region_name' => '松溪县',
                'region_level' => 3,
                'parent_region_code' => '350700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'region_code' => '350725',
                'region_name' => '政和县',
                'region_level' => 3,
                'parent_region_code' => '350700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'region_code' => '350781',
                'region_name' => '邵武市',
                'region_level' => 3,
                'parent_region_code' => '350800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'region_code' => '350782',
                'region_name' => '武夷山市',
                'region_level' => 3,
                'parent_region_code' => '350800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'region_code' => '350783',
                'region_name' => '建瓯市',
                'region_level' => 3,
                'parent_region_code' => '350800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'region_code' => '350784',
                'region_name' => '建阳市',
                'region_level' => 3,
                'parent_region_code' => '350800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'region_code' => '350800',
                'region_name' => '龙岩市',
                'region_level' => 2,
                'parent_region_code' => '350000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'region_code' => '350801',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '350800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'region_code' => '350802',
                'region_name' => '新罗区',
                'region_level' => 3,
                'parent_region_code' => '350800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'region_code' => '350821',
                'region_name' => '长汀县',
                'region_level' => 3,
                'parent_region_code' => '350800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'region_code' => '350822',
                'region_name' => '永定县',
                'region_level' => 3,
                'parent_region_code' => '350800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'region_code' => '350823',
                'region_name' => '上杭县',
                'region_level' => 3,
                'parent_region_code' => '350800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'region_code' => '350824',
                'region_name' => '武平县',
                'region_level' => 3,
                'parent_region_code' => '350800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'region_code' => '350825',
                'region_name' => '连城县',
                'region_level' => 3,
                'parent_region_code' => '350800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'region_code' => '350881',
                'region_name' => '漳平市',
                'region_level' => 3,
                'parent_region_code' => '350900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'region_code' => '350900',
                'region_name' => '宁德市',
                'region_level' => 2,
                'parent_region_code' => '350000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'region_code' => '350901',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '350900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'region_code' => '350902',
                'region_name' => '蕉城区',
                'region_level' => 3,
                'parent_region_code' => '350900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'region_code' => '350921',
                'region_name' => '霞浦县',
                'region_level' => 3,
                'parent_region_code' => '350900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'region_code' => '350922',
                'region_name' => '古田县',
                'region_level' => 3,
                'parent_region_code' => '350900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'region_code' => '350923',
                'region_name' => '屏南县',
                'region_level' => 3,
                'parent_region_code' => '350900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'region_code' => '350924',
                'region_name' => '寿宁县',
                'region_level' => 3,
                'parent_region_code' => '350900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'region_code' => '350925',
                'region_name' => '周宁县',
                'region_level' => 3,
                'parent_region_code' => '350900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'region_code' => '350926',
                'region_name' => '柘荣县',
                'region_level' => 3,
                'parent_region_code' => '350900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'region_code' => '350981',
                'region_name' => '福安市',
                'region_level' => 3,
                'parent_region_code' => '351000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'region_code' => '350982',
                'region_name' => '福鼎市',
                'region_level' => 3,
                'parent_region_code' => '351000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'region_code' => '360000',
                'region_name' => '江西省',
                'region_level' => 1,
                'parent_region_code' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'region_code' => '360100',
                'region_name' => '南昌市',
                'region_level' => 2,
                'parent_region_code' => '360000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'region_code' => '360101',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '360100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'region_code' => '360102',
                'region_name' => '东湖区',
                'region_level' => 3,
                'parent_region_code' => '360100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'region_code' => '360103',
                'region_name' => '西湖区',
                'region_level' => 3,
                'parent_region_code' => '360100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'region_code' => '360104',
                'region_name' => '青云谱区',
                'region_level' => 3,
                'parent_region_code' => '360100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'region_code' => '360105',
                'region_name' => '湾里区',
                'region_level' => 3,
                'parent_region_code' => '360100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'region_code' => '360111',
                'region_name' => '青山湖区',
                'region_level' => 3,
                'parent_region_code' => '360100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'region_code' => '360121',
                'region_name' => '南昌县',
                'region_level' => 3,
                'parent_region_code' => '360100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'region_code' => '360122',
                'region_name' => '新建县',
                'region_level' => 3,
                'parent_region_code' => '360100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'region_code' => '360123',
                'region_name' => '安义县',
                'region_level' => 3,
                'parent_region_code' => '360100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'region_code' => '360124',
                'region_name' => '进贤县',
                'region_level' => 3,
                'parent_region_code' => '360100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'region_code' => '360200',
                'region_name' => '景德镇市',
                'region_level' => 2,
                'parent_region_code' => '360000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'region_code' => '360201',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '360200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'region_code' => '360202',
                'region_name' => '昌江区',
                'region_level' => 3,
                'parent_region_code' => '360200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'region_code' => '360203',
                'region_name' => '珠山区',
                'region_level' => 3,
                'parent_region_code' => '360200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'region_code' => '360222',
                'region_name' => '浮梁县',
                'region_level' => 3,
                'parent_region_code' => '360200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'region_code' => '360281',
                'region_name' => '乐平市',
                'region_level' => 3,
                'parent_region_code' => '360300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'region_code' => '360300',
                'region_name' => '萍乡市',
                'region_level' => 2,
                'parent_region_code' => '360000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'region_code' => '360301',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '360300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'region_code' => '360302',
                'region_name' => '安源区',
                'region_level' => 3,
                'parent_region_code' => '360300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'region_code' => '360313',
                'region_name' => '湘东区',
                'region_level' => 3,
                'parent_region_code' => '360300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'region_code' => '360321',
                'region_name' => '莲花县',
                'region_level' => 3,
                'parent_region_code' => '360300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'region_code' => '360322',
                'region_name' => '上栗县',
                'region_level' => 3,
                'parent_region_code' => '360300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'region_code' => '360323',
                'region_name' => '芦溪县',
                'region_level' => 3,
                'parent_region_code' => '360300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'region_code' => '360400',
                'region_name' => '九江市',
                'region_level' => 2,
                'parent_region_code' => '360000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'region_code' => '360401',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '360400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'region_code' => '360402',
                'region_name' => '庐山区',
                'region_level' => 3,
                'parent_region_code' => '360400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'region_code' => '360403',
                'region_name' => '浔阳区',
                'region_level' => 3,
                'parent_region_code' => '360400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'region_code' => '360421',
                'region_name' => '九江县',
                'region_level' => 3,
                'parent_region_code' => '360400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'region_code' => '360423',
                'region_name' => '武宁县',
                'region_level' => 3,
                'parent_region_code' => '360400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'region_code' => '360424',
                'region_name' => '修水县',
                'region_level' => 3,
                'parent_region_code' => '360400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'region_code' => '360425',
                'region_name' => '永修县',
                'region_level' => 3,
                'parent_region_code' => '360400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'region_code' => '360426',
                'region_name' => '德安县',
                'region_level' => 3,
                'parent_region_code' => '360400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'region_code' => '360427',
                'region_name' => '星子县',
                'region_level' => 3,
                'parent_region_code' => '360400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'region_code' => '360428',
                'region_name' => '都昌县',
                'region_level' => 3,
                'parent_region_code' => '360400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'region_code' => '360429',
                'region_name' => '湖口县',
                'region_level' => 3,
                'parent_region_code' => '360400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'region_code' => '360430',
                'region_name' => '彭泽县',
                'region_level' => 3,
                'parent_region_code' => '360400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'region_code' => '360481',
                'region_name' => '瑞昌市',
                'region_level' => 3,
                'parent_region_code' => '360500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'region_code' => '360482',
                'region_name' => '共青城市',
                'region_level' => 3,
                'parent_region_code' => '360500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'region_code' => '360500',
                'region_name' => '新余市',
                'region_level' => 2,
                'parent_region_code' => '360000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'region_code' => '360501',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '360500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'region_code' => '360502',
                'region_name' => '渝水区',
                'region_level' => 3,
                'parent_region_code' => '360500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'region_code' => '360521',
                'region_name' => '分宜县',
                'region_level' => 3,
                'parent_region_code' => '360500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'region_code' => '360600',
                'region_name' => '鹰潭市',
                'region_level' => 2,
                'parent_region_code' => '360000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'region_code' => '360601',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '360600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'region_code' => '360602',
                'region_name' => '月湖区',
                'region_level' => 3,
                'parent_region_code' => '360600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'region_code' => '360622',
                'region_name' => '余江县',
                'region_level' => 3,
                'parent_region_code' => '360600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'region_code' => '360681',
                'region_name' => '贵溪市',
                'region_level' => 3,
                'parent_region_code' => '360700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'region_code' => '360700',
                'region_name' => '赣州市',
                'region_level' => 2,
                'parent_region_code' => '360000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'region_code' => '360701',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '360700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'region_code' => '360702',
                'region_name' => '章贡区',
                'region_level' => 3,
                'parent_region_code' => '360700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'region_code' => '360721',
                'region_name' => '赣县',
                'region_level' => 3,
                'parent_region_code' => '360700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'region_code' => '360722',
                'region_name' => '信丰县',
                'region_level' => 3,
                'parent_region_code' => '360700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'region_code' => '360723',
                'region_name' => '大余县',
                'region_level' => 3,
                'parent_region_code' => '360700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'region_code' => '360724',
                'region_name' => '上犹县',
                'region_level' => 3,
                'parent_region_code' => '360700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'region_code' => '360725',
                'region_name' => '崇义县',
                'region_level' => 3,
                'parent_region_code' => '360700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'region_code' => '360726',
                'region_name' => '安远县',
                'region_level' => 3,
                'parent_region_code' => '360700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'region_code' => '360727',
                'region_name' => '龙南县',
                'region_level' => 3,
                'parent_region_code' => '360700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'region_code' => '360728',
                'region_name' => '定南县',
                'region_level' => 3,
                'parent_region_code' => '360700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'region_code' => '360729',
                'region_name' => '全南县',
                'region_level' => 3,
                'parent_region_code' => '360700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'region_code' => '360730',
                'region_name' => '宁都县',
                'region_level' => 3,
                'parent_region_code' => '360700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'region_code' => '360731',
                'region_name' => '于都县',
                'region_level' => 3,
                'parent_region_code' => '360700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'region_code' => '360732',
                'region_name' => '兴国县',
                'region_level' => 3,
                'parent_region_code' => '360700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'region_code' => '360733',
                'region_name' => '会昌县',
                'region_level' => 3,
                'parent_region_code' => '360700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'region_code' => '360734',
                'region_name' => '寻乌县',
                'region_level' => 3,
                'parent_region_code' => '360700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'region_code' => '360735',
                'region_name' => '石城县',
                'region_level' => 3,
                'parent_region_code' => '360700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'region_code' => '360781',
                'region_name' => '瑞金市',
                'region_level' => 3,
                'parent_region_code' => '360800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'region_code' => '360782',
                'region_name' => '南康市',
                'region_level' => 3,
                'parent_region_code' => '360800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'region_code' => '360800',
                'region_name' => '吉安市',
                'region_level' => 2,
                'parent_region_code' => '360000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'region_code' => '360801',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '360800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'region_code' => '360802',
                'region_name' => '吉州区',
                'region_level' => 3,
                'parent_region_code' => '360800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'region_code' => '360803',
                'region_name' => '青原区',
                'region_level' => 3,
                'parent_region_code' => '360800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'region_code' => '360821',
                'region_name' => '吉安县',
                'region_level' => 3,
                'parent_region_code' => '360800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'region_code' => '360822',
                'region_name' => '吉水县',
                'region_level' => 3,
                'parent_region_code' => '360800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'region_code' => '360823',
                'region_name' => '峡江县',
                'region_level' => 3,
                'parent_region_code' => '360800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'region_code' => '360824',
                'region_name' => '新干县',
                'region_level' => 3,
                'parent_region_code' => '360800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'region_code' => '360825',
                'region_name' => '永丰县',
                'region_level' => 3,
                'parent_region_code' => '360800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'region_code' => '360826',
                'region_name' => '泰和县',
                'region_level' => 3,
                'parent_region_code' => '360800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'region_code' => '360827',
                'region_name' => '遂川县',
                'region_level' => 3,
                'parent_region_code' => '360800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'region_code' => '360828',
                'region_name' => '万安县',
                'region_level' => 3,
                'parent_region_code' => '360800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'region_code' => '360829',
                'region_name' => '安福县',
                'region_level' => 3,
                'parent_region_code' => '360800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'region_code' => '360830',
                'region_name' => '永新县',
                'region_level' => 3,
                'parent_region_code' => '360800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'region_code' => '360881',
                'region_name' => '井冈山市',
                'region_level' => 3,
                'parent_region_code' => '360900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'region_code' => '360900',
                'region_name' => '宜春市',
                'region_level' => 2,
                'parent_region_code' => '360000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'region_code' => '360901',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '360900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'region_code' => '360902',
                'region_name' => '袁州区',
                'region_level' => 3,
                'parent_region_code' => '360900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'region_code' => '360921',
                'region_name' => '奉新县',
                'region_level' => 3,
                'parent_region_code' => '360900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'region_code' => '360922',
                'region_name' => '万载县',
                'region_level' => 3,
                'parent_region_code' => '360900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'region_code' => '360923',
                'region_name' => '上高县',
                'region_level' => 3,
                'parent_region_code' => '360900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'region_code' => '360924',
                'region_name' => '宜丰县',
                'region_level' => 3,
                'parent_region_code' => '360900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'region_code' => '360925',
                'region_name' => '靖安县',
                'region_level' => 3,
                'parent_region_code' => '360900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'region_code' => '360926',
                'region_name' => '铜鼓县',
                'region_level' => 3,
                'parent_region_code' => '360900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'region_code' => '360981',
                'region_name' => '丰城市',
                'region_level' => 3,
                'parent_region_code' => '361000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'region_code' => '360982',
                'region_name' => '樟树市',
                'region_level' => 3,
                'parent_region_code' => '361000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'region_code' => '360983',
                'region_name' => '高安市',
                'region_level' => 3,
                'parent_region_code' => '361000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'region_code' => '361000',
                'region_name' => '抚州市',
                'region_level' => 2,
                'parent_region_code' => '360000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'region_code' => '361001',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '361000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'region_code' => '361002',
                'region_name' => '临川区',
                'region_level' => 3,
                'parent_region_code' => '361000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'region_code' => '361021',
                'region_name' => '南城县',
                'region_level' => 3,
                'parent_region_code' => '361000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'region_code' => '361022',
                'region_name' => '黎川县',
                'region_level' => 3,
                'parent_region_code' => '361000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'region_code' => '361023',
                'region_name' => '南丰县',
                'region_level' => 3,
                'parent_region_code' => '361000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'region_code' => '361024',
                'region_name' => '崇仁县',
                'region_level' => 3,
                'parent_region_code' => '361000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'region_code' => '361025',
                'region_name' => '乐安县',
                'region_level' => 3,
                'parent_region_code' => '361000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'region_code' => '361026',
                'region_name' => '宜黄县',
                'region_level' => 3,
                'parent_region_code' => '361000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'region_code' => '361027',
                'region_name' => '金溪县',
                'region_level' => 3,
                'parent_region_code' => '361000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'region_code' => '361028',
                'region_name' => '资溪县',
                'region_level' => 3,
                'parent_region_code' => '361000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'region_code' => '361029',
                'region_name' => '东乡县',
                'region_level' => 3,
                'parent_region_code' => '361000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'region_code' => '361030',
                'region_name' => '广昌县',
                'region_level' => 3,
                'parent_region_code' => '361000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'region_code' => '361100',
                'region_name' => '上饶市',
                'region_level' => 2,
                'parent_region_code' => '360000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'region_code' => '361101',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '361100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'region_code' => '361102',
                'region_name' => '信州区',
                'region_level' => 3,
                'parent_region_code' => '361100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'region_code' => '361121',
                'region_name' => '上饶县',
                'region_level' => 3,
                'parent_region_code' => '361100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'region_code' => '361122',
                'region_name' => '广丰县',
                'region_level' => 3,
                'parent_region_code' => '361100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'region_code' => '361123',
                'region_name' => '玉山县',
                'region_level' => 3,
                'parent_region_code' => '361100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'region_code' => '361124',
                'region_name' => '铅山县',
                'region_level' => 3,
                'parent_region_code' => '361100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'region_code' => '361125',
                'region_name' => '横峰县',
                'region_level' => 3,
                'parent_region_code' => '361100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'region_code' => '361126',
                'region_name' => '弋阳县',
                'region_level' => 3,
                'parent_region_code' => '361100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'region_code' => '361127',
                'region_name' => '余干县',
                'region_level' => 3,
                'parent_region_code' => '361100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'region_code' => '361128',
                'region_name' => '鄱阳县',
                'region_level' => 3,
                'parent_region_code' => '361100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'region_code' => '361129',
                'region_name' => '万年县',
                'region_level' => 3,
                'parent_region_code' => '361100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'region_code' => '361130',
                'region_name' => '婺源县',
                'region_level' => 3,
                'parent_region_code' => '361100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'region_code' => '361181',
                'region_name' => '德兴市',
                'region_level' => 3,
                'parent_region_code' => '361200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'region_code' => '370000',
                'region_name' => '山东省',
                'region_level' => 1,
                'parent_region_code' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'region_code' => '370100',
                'region_name' => '济南市',
                'region_level' => 2,
                'parent_region_code' => '370000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'region_code' => '370101',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '370100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'region_code' => '370102',
                'region_name' => '历下区',
                'region_level' => 3,
                'parent_region_code' => '370100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'region_code' => '370103',
                'region_name' => '市中区',
                'region_level' => 3,
                'parent_region_code' => '370100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'region_code' => '370104',
                'region_name' => '槐荫区',
                'region_level' => 3,
                'parent_region_code' => '370100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'region_code' => '370105',
                'region_name' => '天桥区',
                'region_level' => 3,
                'parent_region_code' => '370100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'region_code' => '370112',
                'region_name' => '历城区',
                'region_level' => 3,
                'parent_region_code' => '370100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'region_code' => '370113',
                'region_name' => '长清区',
                'region_level' => 3,
                'parent_region_code' => '370100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'region_code' => '370124',
                'region_name' => '平阴县',
                'region_level' => 3,
                'parent_region_code' => '370100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'region_code' => '370125',
                'region_name' => '济阳县',
                'region_level' => 3,
                'parent_region_code' => '370100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'region_code' => '370126',
                'region_name' => '商河县',
                'region_level' => 3,
                'parent_region_code' => '370100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'region_code' => '370181',
                'region_name' => '章丘市',
                'region_level' => 3,
                'parent_region_code' => '370200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'region_code' => '370200',
                'region_name' => '青岛市',
                'region_level' => 2,
                'parent_region_code' => '370000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'region_code' => '370201',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '370200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'region_code' => '370202',
                'region_name' => '市南区',
                'region_level' => 3,
                'parent_region_code' => '370200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'region_code' => '370203',
                'region_name' => '市北区',
                'region_level' => 3,
                'parent_region_code' => '370200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'region_code' => '370205',
                'region_name' => '四方区',
                'region_level' => 3,
                'parent_region_code' => '370200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'region_code' => '370211',
                'region_name' => '黄岛区',
                'region_level' => 3,
                'parent_region_code' => '370200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'region_code' => '370212',
                'region_name' => '崂山区',
                'region_level' => 3,
                'parent_region_code' => '370200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'region_code' => '370213',
                'region_name' => '李沧区',
                'region_level' => 3,
                'parent_region_code' => '370200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'region_code' => '370214',
                'region_name' => '城阳区',
                'region_level' => 3,
                'parent_region_code' => '370200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'region_code' => '370281',
                'region_name' => '胶州市',
                'region_level' => 3,
                'parent_region_code' => '370300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'region_code' => '370282',
                'region_name' => '即墨市',
                'region_level' => 3,
                'parent_region_code' => '370300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'region_code' => '370283',
                'region_name' => '平度市',
                'region_level' => 3,
                'parent_region_code' => '370300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'region_code' => '370284',
                'region_name' => '胶南市',
                'region_level' => 3,
                'parent_region_code' => '370300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'region_code' => '370285',
                'region_name' => '莱西市',
                'region_level' => 3,
                'parent_region_code' => '370300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'region_code' => '370300',
                'region_name' => '淄博市',
                'region_level' => 2,
                'parent_region_code' => '370000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'region_code' => '370301',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '370300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'region_code' => '370302',
                'region_name' => '淄川区',
                'region_level' => 3,
                'parent_region_code' => '370300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'region_code' => '370303',
                'region_name' => '张店区',
                'region_level' => 3,
                'parent_region_code' => '370300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'region_code' => '370304',
                'region_name' => '博山区',
                'region_level' => 3,
                'parent_region_code' => '370300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'region_code' => '370305',
                'region_name' => '临淄区',
                'region_level' => 3,
                'parent_region_code' => '370300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'region_code' => '370306',
                'region_name' => '周村区',
                'region_level' => 3,
                'parent_region_code' => '370300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'region_code' => '370321',
                'region_name' => '桓台县',
                'region_level' => 3,
                'parent_region_code' => '370300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'region_code' => '370322',
                'region_name' => '高青县',
                'region_level' => 3,
                'parent_region_code' => '370300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'region_code' => '370323',
                'region_name' => '沂源县',
                'region_level' => 3,
                'parent_region_code' => '370300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'region_code' => '370400',
                'region_name' => '枣庄市',
                'region_level' => 2,
                'parent_region_code' => '370000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'region_code' => '370401',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '370400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'region_code' => '370402',
                'region_name' => '市中区',
                'region_level' => 3,
                'parent_region_code' => '370400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'region_code' => '370403',
                'region_name' => '薛城区',
                'region_level' => 3,
                'parent_region_code' => '370400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'region_code' => '370404',
                'region_name' => '峄城区',
                'region_level' => 3,
                'parent_region_code' => '370400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'region_code' => '370405',
                'region_name' => '台儿庄区',
                'region_level' => 3,
                'parent_region_code' => '370400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'region_code' => '370406',
                'region_name' => '山亭区',
                'region_level' => 3,
                'parent_region_code' => '370400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'region_code' => '370481',
                'region_name' => '滕州市',
                'region_level' => 3,
                'parent_region_code' => '370500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'region_code' => '370500',
                'region_name' => '东营市',
                'region_level' => 2,
                'parent_region_code' => '370000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'region_code' => '370501',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '370500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'region_code' => '370502',
                'region_name' => '东营区',
                'region_level' => 3,
                'parent_region_code' => '370500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'region_code' => '370503',
                'region_name' => '河口区',
                'region_level' => 3,
                'parent_region_code' => '370500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'region_code' => '370521',
                'region_name' => '垦利县',
                'region_level' => 3,
                'parent_region_code' => '370500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'region_code' => '370522',
                'region_name' => '利津县',
                'region_level' => 3,
                'parent_region_code' => '370500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'region_code' => '370523',
                'region_name' => '广饶县',
                'region_level' => 3,
                'parent_region_code' => '370500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'region_code' => '370600',
                'region_name' => '烟台市',
                'region_level' => 2,
                'parent_region_code' => '370000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'region_code' => '370601',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '370600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'region_code' => '370602',
                'region_name' => '芝罘区',
                'region_level' => 3,
                'parent_region_code' => '370600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'region_code' => '370611',
                'region_name' => '福山区',
                'region_level' => 3,
                'parent_region_code' => '370600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'region_code' => '370612',
                'region_name' => '牟平区',
                'region_level' => 3,
                'parent_region_code' => '370600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'region_code' => '370613',
                'region_name' => '莱山区',
                'region_level' => 3,
                'parent_region_code' => '370600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'region_code' => '370634',
                'region_name' => '长岛县',
                'region_level' => 3,
                'parent_region_code' => '370600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'region_code' => '370681',
                'region_name' => '龙口市',
                'region_level' => 3,
                'parent_region_code' => '370700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'region_code' => '370682',
                'region_name' => '莱阳市',
                'region_level' => 3,
                'parent_region_code' => '370700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'region_code' => '370683',
                'region_name' => '莱州市',
                'region_level' => 3,
                'parent_region_code' => '370700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'region_code' => '370684',
                'region_name' => '蓬莱市',
                'region_level' => 3,
                'parent_region_code' => '370700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'region_code' => '370685',
                'region_name' => '招远市',
                'region_level' => 3,
                'parent_region_code' => '370700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'region_code' => '370686',
                'region_name' => '栖霞市',
                'region_level' => 3,
                'parent_region_code' => '370700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'region_code' => '370687',
                'region_name' => '海阳市',
                'region_level' => 3,
                'parent_region_code' => '370700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'region_code' => '370700',
                'region_name' => '潍坊市',
                'region_level' => 2,
                'parent_region_code' => '370000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'region_code' => '370701',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '370700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'region_code' => '370702',
                'region_name' => '潍城区',
                'region_level' => 3,
                'parent_region_code' => '370700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'region_code' => '370703',
                'region_name' => '寒亭区',
                'region_level' => 3,
                'parent_region_code' => '370700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'region_code' => '370704',
                'region_name' => '坊子区',
                'region_level' => 3,
                'parent_region_code' => '370700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'region_code' => '370705',
                'region_name' => '奎文区',
                'region_level' => 3,
                'parent_region_code' => '370700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'region_code' => '370724',
                'region_name' => '临朐县',
                'region_level' => 3,
                'parent_region_code' => '370700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'region_code' => '370725',
                'region_name' => '昌乐县',
                'region_level' => 3,
                'parent_region_code' => '370700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'region_code' => '370781',
                'region_name' => '青州市',
                'region_level' => 3,
                'parent_region_code' => '370800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'region_code' => '370782',
                'region_name' => '诸城市',
                'region_level' => 3,
                'parent_region_code' => '370800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'region_code' => '370783',
                'region_name' => '寿光市',
                'region_level' => 3,
                'parent_region_code' => '370800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'region_code' => '370784',
                'region_name' => '安丘市',
                'region_level' => 3,
                'parent_region_code' => '370800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'region_code' => '370785',
                'region_name' => '高密市',
                'region_level' => 3,
                'parent_region_code' => '370800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'region_code' => '370786',
                'region_name' => '昌邑市',
                'region_level' => 3,
                'parent_region_code' => '370800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'region_code' => '370800',
                'region_name' => '济宁市',
                'region_level' => 2,
                'parent_region_code' => '370000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'region_code' => '370801',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '370800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'region_code' => '370802',
                'region_name' => '市中区',
                'region_level' => 3,
                'parent_region_code' => '370800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'region_code' => '370811',
                'region_name' => '任城区',
                'region_level' => 3,
                'parent_region_code' => '370800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'region_code' => '370826',
                'region_name' => '微山县',
                'region_level' => 3,
                'parent_region_code' => '370800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'region_code' => '370827',
                'region_name' => '鱼台县',
                'region_level' => 3,
                'parent_region_code' => '370800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'region_code' => '370828',
                'region_name' => '金乡县',
                'region_level' => 3,
                'parent_region_code' => '370800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'region_code' => '370829',
                'region_name' => '嘉祥县',
                'region_level' => 3,
                'parent_region_code' => '370800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'region_code' => '370830',
                'region_name' => '汶上县',
                'region_level' => 3,
                'parent_region_code' => '370800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'region_code' => '370831',
                'region_name' => '泗水县',
                'region_level' => 3,
                'parent_region_code' => '370800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'region_code' => '370832',
                'region_name' => '梁山县',
                'region_level' => 3,
                'parent_region_code' => '370800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'region_code' => '370881',
                'region_name' => '曲阜市',
                'region_level' => 3,
                'parent_region_code' => '370900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'region_code' => '370882',
                'region_name' => '兖州市',
                'region_level' => 3,
                'parent_region_code' => '370900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'region_code' => '370883',
                'region_name' => '邹城市',
                'region_level' => 3,
                'parent_region_code' => '370900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'region_code' => '370900',
                'region_name' => '泰安市',
                'region_level' => 2,
                'parent_region_code' => '370000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'region_code' => '370901',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '370900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'region_code' => '370902',
                'region_name' => '泰山区',
                'region_level' => 3,
                'parent_region_code' => '370900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'region_code' => '370911',
                'region_name' => '岱岳区',
                'region_level' => 3,
                'parent_region_code' => '370900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'region_code' => '370921',
                'region_name' => '宁阳县',
                'region_level' => 3,
                'parent_region_code' => '370900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'region_code' => '370923',
                'region_name' => '东平县',
                'region_level' => 3,
                'parent_region_code' => '370900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'region_code' => '370982',
                'region_name' => '新泰市',
                'region_level' => 3,
                'parent_region_code' => '371000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'region_code' => '370983',
                'region_name' => '肥城市',
                'region_level' => 3,
                'parent_region_code' => '371000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'region_code' => '371000',
                'region_name' => '威海市',
                'region_level' => 2,
                'parent_region_code' => '370000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'region_code' => '371001',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '371000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'region_code' => '371002',
                'region_name' => '环翠区',
                'region_level' => 3,
                'parent_region_code' => '371000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'region_code' => '371081',
                'region_name' => '文登市',
                'region_level' => 3,
                'parent_region_code' => '371100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'region_code' => '371082',
                'region_name' => '荣成市',
                'region_level' => 3,
                'parent_region_code' => '371100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'region_code' => '371083',
                'region_name' => '乳山市',
                'region_level' => 3,
                'parent_region_code' => '371100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'region_code' => '371100',
                'region_name' => '日照市',
                'region_level' => 2,
                'parent_region_code' => '370000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'region_code' => '371101',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '371100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'region_code' => '371102',
                'region_name' => '东港区',
                'region_level' => 3,
                'parent_region_code' => '371100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'region_code' => '371103',
                'region_name' => '岚山区',
                'region_level' => 3,
                'parent_region_code' => '371100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'region_code' => '371121',
                'region_name' => '五莲县',
                'region_level' => 3,
                'parent_region_code' => '371100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'region_code' => '371122',
                'region_name' => '莒县',
                'region_level' => 3,
                'parent_region_code' => '371100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'region_code' => '371200',
                'region_name' => '莱芜市',
                'region_level' => 2,
                'parent_region_code' => '370000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'region_code' => '371201',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '371200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'region_code' => '371202',
                'region_name' => '莱城区',
                'region_level' => 3,
                'parent_region_code' => '371200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'region_code' => '371203',
                'region_name' => '钢城区',
                'region_level' => 3,
                'parent_region_code' => '371200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'region_code' => '371300',
                'region_name' => '临沂市',
                'region_level' => 2,
                'parent_region_code' => '370000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'region_code' => '371301',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '371300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'region_code' => '371302',
                'region_name' => '兰山区',
                'region_level' => 3,
                'parent_region_code' => '371300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'region_code' => '371311',
                'region_name' => '罗庄区',
                'region_level' => 3,
                'parent_region_code' => '371300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'region_code' => '371312',
                'region_name' => '河东区',
                'region_level' => 3,
                'parent_region_code' => '371300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'region_code' => '371321',
                'region_name' => '沂南县',
                'region_level' => 3,
                'parent_region_code' => '371300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'region_code' => '371322',
                'region_name' => '郯城县',
                'region_level' => 3,
                'parent_region_code' => '371300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'region_code' => '371323',
                'region_name' => '沂水县',
                'region_level' => 3,
                'parent_region_code' => '371300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'region_code' => '371324',
                'region_name' => '苍山县',
                'region_level' => 3,
                'parent_region_code' => '371300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'region_code' => '371325',
                'region_name' => '费县',
                'region_level' => 3,
                'parent_region_code' => '371300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'region_code' => '371326',
                'region_name' => '平邑县',
                'region_level' => 3,
                'parent_region_code' => '371300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'region_code' => '371327',
                'region_name' => '莒南县',
                'region_level' => 3,
                'parent_region_code' => '371300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'region_code' => '371328',
                'region_name' => '蒙阴县',
                'region_level' => 3,
                'parent_region_code' => '371300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'region_code' => '371329',
                'region_name' => '临沭县',
                'region_level' => 3,
                'parent_region_code' => '371300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'region_code' => '371400',
                'region_name' => '德州市',
                'region_level' => 2,
                'parent_region_code' => '370000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'region_code' => '371401',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '371400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'region_code' => '371402',
                'region_name' => '德城区',
                'region_level' => 3,
                'parent_region_code' => '371400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'region_code' => '371421',
                'region_name' => '陵县',
                'region_level' => 3,
                'parent_region_code' => '371400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'region_code' => '371422',
                'region_name' => '宁津县',
                'region_level' => 3,
                'parent_region_code' => '371400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'region_code' => '371423',
                'region_name' => '庆云县',
                'region_level' => 3,
                'parent_region_code' => '371400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'region_code' => '371424',
                'region_name' => '临邑县',
                'region_level' => 3,
                'parent_region_code' => '371400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'region_code' => '371425',
                'region_name' => '齐河县',
                'region_level' => 3,
                'parent_region_code' => '371400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'region_code' => '371426',
                'region_name' => '平原县',
                'region_level' => 3,
                'parent_region_code' => '371400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'region_code' => '371427',
                'region_name' => '夏津县',
                'region_level' => 3,
                'parent_region_code' => '371400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'region_code' => '371428',
                'region_name' => '武城县',
                'region_level' => 3,
                'parent_region_code' => '371400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'region_code' => '371481',
                'region_name' => '乐陵市',
                'region_level' => 3,
                'parent_region_code' => '371500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'region_code' => '371482',
                'region_name' => '禹城市',
                'region_level' => 3,
                'parent_region_code' => '371500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'region_code' => '371500',
                'region_name' => '聊城市',
                'region_level' => 2,
                'parent_region_code' => '370000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'region_code' => '371501',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '371500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'region_code' => '371502',
                'region_name' => '东昌府区',
                'region_level' => 3,
                'parent_region_code' => '371500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'region_code' => '371521',
                'region_name' => '阳谷县',
                'region_level' => 3,
                'parent_region_code' => '371500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'region_code' => '371522',
                'region_name' => '莘县',
                'region_level' => 3,
                'parent_region_code' => '371500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'region_code' => '371523',
                'region_name' => '茌平县',
                'region_level' => 3,
                'parent_region_code' => '371500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'region_code' => '371524',
                'region_name' => '东阿县',
                'region_level' => 3,
                'parent_region_code' => '371500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'region_code' => '371525',
                'region_name' => '冠县',
                'region_level' => 3,
                'parent_region_code' => '371500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'region_code' => '371526',
                'region_name' => '高唐县',
                'region_level' => 3,
                'parent_region_code' => '371500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'region_code' => '371581',
                'region_name' => '临清市',
                'region_level' => 3,
                'parent_region_code' => '371600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'region_code' => '371600',
                'region_name' => '滨州市',
                'region_level' => 2,
                'parent_region_code' => '370000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'region_code' => '371601',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '371600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'region_code' => '371602',
                'region_name' => '滨城区',
                'region_level' => 3,
                'parent_region_code' => '371600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'region_code' => '371621',
                'region_name' => '惠民县',
                'region_level' => 3,
                'parent_region_code' => '371600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'region_code' => '371622',
                'region_name' => '阳信县',
                'region_level' => 3,
                'parent_region_code' => '371600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'region_code' => '371623',
                'region_name' => '无棣县',
                'region_level' => 3,
                'parent_region_code' => '371600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'region_code' => '371624',
                'region_name' => '沾化县',
                'region_level' => 3,
                'parent_region_code' => '371600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'region_code' => '371625',
                'region_name' => '博兴县',
                'region_level' => 3,
                'parent_region_code' => '371600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'region_code' => '371626',
                'region_name' => '邹平县',
                'region_level' => 3,
                'parent_region_code' => '371600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'region_code' => '371700',
                'region_name' => '菏泽市',
                'region_level' => 2,
                'parent_region_code' => '370000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'region_code' => '371701',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '371700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'region_code' => '371702',
                'region_name' => '牡丹区',
                'region_level' => 3,
                'parent_region_code' => '371700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'region_code' => '371721',
                'region_name' => '曹县',
                'region_level' => 3,
                'parent_region_code' => '371700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'region_code' => '371722',
                'region_name' => '单县',
                'region_level' => 3,
                'parent_region_code' => '371700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'region_code' => '371723',
                'region_name' => '成武县',
                'region_level' => 3,
                'parent_region_code' => '371700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'region_code' => '371724',
                'region_name' => '巨野县',
                'region_level' => 3,
                'parent_region_code' => '371700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'region_code' => '371725',
                'region_name' => '郓城县',
                'region_level' => 3,
                'parent_region_code' => '371700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'region_code' => '371726',
                'region_name' => '鄄城县',
                'region_level' => 3,
                'parent_region_code' => '371700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'region_code' => '371727',
                'region_name' => '定陶县',
                'region_level' => 3,
                'parent_region_code' => '371700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'region_code' => '371728',
                'region_name' => '东明县',
                'region_level' => 3,
                'parent_region_code' => '371700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'region_code' => '410000',
                'region_name' => '河南省',
                'region_level' => 1,
                'parent_region_code' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'region_code' => '410100',
                'region_name' => '郑州市',
                'region_level' => 2,
                'parent_region_code' => '410000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'region_code' => '410101',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '410100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'region_code' => '410102',
                'region_name' => '中原区',
                'region_level' => 3,
                'parent_region_code' => '410100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'region_code' => '410103',
                'region_name' => '二七区',
                'region_level' => 3,
                'parent_region_code' => '410100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'region_code' => '410104',
                'region_name' => '管城回族区',
                'region_level' => 3,
                'parent_region_code' => '410100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'region_code' => '410105',
                'region_name' => '金水区',
                'region_level' => 3,
                'parent_region_code' => '410100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'region_code' => '410106',
                'region_name' => '上街区',
                'region_level' => 3,
                'parent_region_code' => '410100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'region_code' => '410108',
                'region_name' => '惠济区',
                'region_level' => 3,
                'parent_region_code' => '410100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'region_code' => '410122',
                'region_name' => '中牟县',
                'region_level' => 3,
                'parent_region_code' => '410100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'region_code' => '410181',
                'region_name' => '巩义市',
                'region_level' => 3,
                'parent_region_code' => '410200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'region_code' => '410182',
                'region_name' => '荥阳市',
                'region_level' => 3,
                'parent_region_code' => '410200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'region_code' => '410183',
                'region_name' => '新密市',
                'region_level' => 3,
                'parent_region_code' => '410200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'region_code' => '410184',
                'region_name' => '新郑市',
                'region_level' => 3,
                'parent_region_code' => '410200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'region_code' => '410185',
                'region_name' => '登封市',
                'region_level' => 3,
                'parent_region_code' => '410200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'region_code' => '410200',
                'region_name' => '开封市',
                'region_level' => 2,
                'parent_region_code' => '410000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'region_code' => '410201',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '410200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'region_code' => '410202',
                'region_name' => '龙亭区',
                'region_level' => 3,
                'parent_region_code' => '410200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'region_code' => '410203',
                'region_name' => '顺河回族区',
                'region_level' => 3,
                'parent_region_code' => '410200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'region_code' => '410204',
                'region_name' => '鼓楼区',
                'region_level' => 3,
                'parent_region_code' => '410200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'region_code' => '410205',
                'region_name' => '禹王台区',
                'region_level' => 3,
                'parent_region_code' => '410200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'region_code' => '410211',
                'region_name' => '金明区',
                'region_level' => 3,
                'parent_region_code' => '410200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'region_code' => '410221',
                'region_name' => '杞县',
                'region_level' => 3,
                'parent_region_code' => '410200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'region_code' => '410222',
                'region_name' => '通许县',
                'region_level' => 3,
                'parent_region_code' => '410200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'region_code' => '410223',
                'region_name' => '尉氏县',
                'region_level' => 3,
                'parent_region_code' => '410200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'region_code' => '410224',
                'region_name' => '开封县',
                'region_level' => 3,
                'parent_region_code' => '410200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'region_code' => '410225',
                'region_name' => '兰考县',
                'region_level' => 3,
                'parent_region_code' => '410200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'region_code' => '410300',
                'region_name' => '洛阳市',
                'region_level' => 2,
                'parent_region_code' => '410000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'region_code' => '410301',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '410300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'region_code' => '410302',
                'region_name' => '老城区',
                'region_level' => 3,
                'parent_region_code' => '410300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'region_code' => '410303',
                'region_name' => '西工区',
                'region_level' => 3,
                'parent_region_code' => '410300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'region_code' => '410304',
                'region_name' => '瀍河回族区',
                'region_level' => 3,
                'parent_region_code' => '410300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'region_code' => '410305',
                'region_name' => '涧西区',
                'region_level' => 3,
                'parent_region_code' => '410300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'region_code' => '410306',
                'region_name' => '吉利区',
                'region_level' => 3,
                'parent_region_code' => '410300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'region_code' => '410311',
                'region_name' => '洛龙区',
                'region_level' => 3,
                'parent_region_code' => '410300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'region_code' => '410322',
                'region_name' => '孟津县',
                'region_level' => 3,
                'parent_region_code' => '410300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'region_code' => '410323',
                'region_name' => '新安县',
                'region_level' => 3,
                'parent_region_code' => '410300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'region_code' => '410324',
                'region_name' => '栾川县',
                'region_level' => 3,
                'parent_region_code' => '410300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'region_code' => '410325',
                'region_name' => '嵩县',
                'region_level' => 3,
                'parent_region_code' => '410300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'region_code' => '410326',
                'region_name' => '汝阳县',
                'region_level' => 3,
                'parent_region_code' => '410300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'region_code' => '410327',
                'region_name' => '宜阳县',
                'region_level' => 3,
                'parent_region_code' => '410300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'region_code' => '410328',
                'region_name' => '洛宁县',
                'region_level' => 3,
                'parent_region_code' => '410300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'region_code' => '410329',
                'region_name' => '伊川县',
                'region_level' => 3,
                'parent_region_code' => '410300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'region_code' => '410381',
                'region_name' => '偃师市',
                'region_level' => 3,
                'parent_region_code' => '410400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'region_code' => '410400',
                'region_name' => '平顶山市',
                'region_level' => 2,
                'parent_region_code' => '410000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'region_code' => '410401',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '410400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'region_code' => '410402',
                'region_name' => '新华区',
                'region_level' => 3,
                'parent_region_code' => '410400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'region_code' => '410403',
                'region_name' => '卫东区',
                'region_level' => 3,
                'parent_region_code' => '410400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'region_code' => '410404',
                'region_name' => '石龙区',
                'region_level' => 3,
                'parent_region_code' => '410400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'region_code' => '410411',
                'region_name' => '湛河区',
                'region_level' => 3,
                'parent_region_code' => '410400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'region_code' => '410421',
                'region_name' => '宝丰县',
                'region_level' => 3,
                'parent_region_code' => '410400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'region_code' => '410422',
                'region_name' => '叶县',
                'region_level' => 3,
                'parent_region_code' => '410400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'region_code' => '410423',
                'region_name' => '鲁山县',
                'region_level' => 3,
                'parent_region_code' => '410400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'region_code' => '410425',
                'region_name' => '郏县',
                'region_level' => 3,
                'parent_region_code' => '410400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'region_code' => '410481',
                'region_name' => '舞钢市',
                'region_level' => 3,
                'parent_region_code' => '410500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'region_code' => '410482',
                'region_name' => '汝州市',
                'region_level' => 3,
                'parent_region_code' => '410500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'region_code' => '410500',
                'region_name' => '安阳市',
                'region_level' => 2,
                'parent_region_code' => '410000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'region_code' => '410501',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '410500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'region_code' => '410502',
                'region_name' => '文峰区',
                'region_level' => 3,
                'parent_region_code' => '410500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'region_code' => '410503',
                'region_name' => '北关区',
                'region_level' => 3,
                'parent_region_code' => '410500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'region_code' => '410505',
                'region_name' => '殷都区',
                'region_level' => 3,
                'parent_region_code' => '410500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'region_code' => '410506',
                'region_name' => '龙安区',
                'region_level' => 3,
                'parent_region_code' => '410500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('regions')->insert(array (
            0 => 
            array (
                'region_code' => '410522',
                'region_name' => '安阳县',
                'region_level' => 3,
                'parent_region_code' => '410500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'region_code' => '410523',
                'region_name' => '汤阴县',
                'region_level' => 3,
                'parent_region_code' => '410500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'region_code' => '410526',
                'region_name' => '滑县',
                'region_level' => 3,
                'parent_region_code' => '410500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'region_code' => '410527',
                'region_name' => '内黄县',
                'region_level' => 3,
                'parent_region_code' => '410500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'region_code' => '410581',
                'region_name' => '林州市',
                'region_level' => 3,
                'parent_region_code' => '410600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'region_code' => '410600',
                'region_name' => '鹤壁市',
                'region_level' => 2,
                'parent_region_code' => '410000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'region_code' => '410601',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '410600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'region_code' => '410602',
                'region_name' => '鹤山区',
                'region_level' => 3,
                'parent_region_code' => '410600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'region_code' => '410603',
                'region_name' => '山城区',
                'region_level' => 3,
                'parent_region_code' => '410600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'region_code' => '410611',
                'region_name' => '淇滨区',
                'region_level' => 3,
                'parent_region_code' => '410600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'region_code' => '410621',
                'region_name' => '浚县',
                'region_level' => 3,
                'parent_region_code' => '410600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'region_code' => '410622',
                'region_name' => '淇县',
                'region_level' => 3,
                'parent_region_code' => '410600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'region_code' => '410700',
                'region_name' => '新乡市',
                'region_level' => 2,
                'parent_region_code' => '410000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'region_code' => '410701',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '410700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'region_code' => '410702',
                'region_name' => '红旗区',
                'region_level' => 3,
                'parent_region_code' => '410700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'region_code' => '410703',
                'region_name' => '卫滨区',
                'region_level' => 3,
                'parent_region_code' => '410700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'region_code' => '410704',
                'region_name' => '凤泉区',
                'region_level' => 3,
                'parent_region_code' => '410700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'region_code' => '410711',
                'region_name' => '牧野区',
                'region_level' => 3,
                'parent_region_code' => '410700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'region_code' => '410721',
                'region_name' => '新乡县',
                'region_level' => 3,
                'parent_region_code' => '410700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'region_code' => '410724',
                'region_name' => '获嘉县',
                'region_level' => 3,
                'parent_region_code' => '410700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'region_code' => '410725',
                'region_name' => '原阳县',
                'region_level' => 3,
                'parent_region_code' => '410700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'region_code' => '410726',
                'region_name' => '延津县',
                'region_level' => 3,
                'parent_region_code' => '410700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'region_code' => '410727',
                'region_name' => '封丘县',
                'region_level' => 3,
                'parent_region_code' => '410700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'region_code' => '410728',
                'region_name' => '长垣县',
                'region_level' => 3,
                'parent_region_code' => '410700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'region_code' => '410781',
                'region_name' => '卫辉市',
                'region_level' => 3,
                'parent_region_code' => '410800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'region_code' => '410782',
                'region_name' => '辉县市',
                'region_level' => 3,
                'parent_region_code' => '410800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'region_code' => '410800',
                'region_name' => '焦作市',
                'region_level' => 2,
                'parent_region_code' => '410000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'region_code' => '410801',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '410800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'region_code' => '410802',
                'region_name' => '解放区',
                'region_level' => 3,
                'parent_region_code' => '410800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'region_code' => '410803',
                'region_name' => '中站区',
                'region_level' => 3,
                'parent_region_code' => '410800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'region_code' => '410804',
                'region_name' => '马村区',
                'region_level' => 3,
                'parent_region_code' => '410800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'region_code' => '410811',
                'region_name' => '山阳区',
                'region_level' => 3,
                'parent_region_code' => '410800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'region_code' => '410821',
                'region_name' => '修武县',
                'region_level' => 3,
                'parent_region_code' => '410800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'region_code' => '410822',
                'region_name' => '博爱县',
                'region_level' => 3,
                'parent_region_code' => '410800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'region_code' => '410823',
                'region_name' => '武陟县',
                'region_level' => 3,
                'parent_region_code' => '410800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'region_code' => '410825',
                'region_name' => '温县',
                'region_level' => 3,
                'parent_region_code' => '410800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'region_code' => '410882',
                'region_name' => '沁阳市',
                'region_level' => 3,
                'parent_region_code' => '410900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'region_code' => '410883',
                'region_name' => '孟州市',
                'region_level' => 3,
                'parent_region_code' => '410900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'region_code' => '410900',
                'region_name' => '濮阳市',
                'region_level' => 2,
                'parent_region_code' => '410000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'region_code' => '410901',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '410900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'region_code' => '410902',
                'region_name' => '华龙区',
                'region_level' => 3,
                'parent_region_code' => '410900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'region_code' => '410922',
                'region_name' => '清丰县',
                'region_level' => 3,
                'parent_region_code' => '410900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'region_code' => '410923',
                'region_name' => '南乐县',
                'region_level' => 3,
                'parent_region_code' => '410900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'region_code' => '410926',
                'region_name' => '范县',
                'region_level' => 3,
                'parent_region_code' => '410900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'region_code' => '410927',
                'region_name' => '台前县',
                'region_level' => 3,
                'parent_region_code' => '410900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'region_code' => '410928',
                'region_name' => '濮阳县',
                'region_level' => 3,
                'parent_region_code' => '410900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'region_code' => '411000',
                'region_name' => '许昌市',
                'region_level' => 2,
                'parent_region_code' => '410000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'region_code' => '411001',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '411000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'region_code' => '411002',
                'region_name' => '魏都区',
                'region_level' => 3,
                'parent_region_code' => '411000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'region_code' => '411023',
                'region_name' => '许昌县',
                'region_level' => 3,
                'parent_region_code' => '411000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'region_code' => '411024',
                'region_name' => '鄢陵县',
                'region_level' => 3,
                'parent_region_code' => '411000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'region_code' => '411025',
                'region_name' => '襄城县',
                'region_level' => 3,
                'parent_region_code' => '411000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'region_code' => '411081',
                'region_name' => '禹州市',
                'region_level' => 3,
                'parent_region_code' => '411100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'region_code' => '411082',
                'region_name' => '长葛市',
                'region_level' => 3,
                'parent_region_code' => '411100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'region_code' => '411100',
                'region_name' => '漯河市',
                'region_level' => 2,
                'parent_region_code' => '410000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'region_code' => '411101',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '411100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'region_code' => '411102',
                'region_name' => '源汇区',
                'region_level' => 3,
                'parent_region_code' => '411100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'region_code' => '411103',
                'region_name' => '郾城区',
                'region_level' => 3,
                'parent_region_code' => '411100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'region_code' => '411104',
                'region_name' => '召陵区',
                'region_level' => 3,
                'parent_region_code' => '411100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'region_code' => '411121',
                'region_name' => '舞阳县',
                'region_level' => 3,
                'parent_region_code' => '411100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'region_code' => '411122',
                'region_name' => '临颍县',
                'region_level' => 3,
                'parent_region_code' => '411100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'region_code' => '411200',
                'region_name' => '三门峡市',
                'region_level' => 2,
                'parent_region_code' => '410000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'region_code' => '411201',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '411200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'region_code' => '411202',
                'region_name' => '湖滨区',
                'region_level' => 3,
                'parent_region_code' => '411200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'region_code' => '411221',
                'region_name' => '渑池县',
                'region_level' => 3,
                'parent_region_code' => '411200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'region_code' => '411222',
                'region_name' => '陕县',
                'region_level' => 3,
                'parent_region_code' => '411200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'region_code' => '411224',
                'region_name' => '卢氏县',
                'region_level' => 3,
                'parent_region_code' => '411200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'region_code' => '411281',
                'region_name' => '义马市',
                'region_level' => 3,
                'parent_region_code' => '411300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'region_code' => '411282',
                'region_name' => '灵宝市',
                'region_level' => 3,
                'parent_region_code' => '411300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'region_code' => '411300',
                'region_name' => '南阳市',
                'region_level' => 2,
                'parent_region_code' => '410000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'region_code' => '411301',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '411300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'region_code' => '411302',
                'region_name' => '宛城区',
                'region_level' => 3,
                'parent_region_code' => '411300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'region_code' => '411303',
                'region_name' => '卧龙区',
                'region_level' => 3,
                'parent_region_code' => '411300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'region_code' => '411321',
                'region_name' => '南召县',
                'region_level' => 3,
                'parent_region_code' => '411300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'region_code' => '411322',
                'region_name' => '方城县',
                'region_level' => 3,
                'parent_region_code' => '411300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'region_code' => '411323',
                'region_name' => '西峡县',
                'region_level' => 3,
                'parent_region_code' => '411300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'region_code' => '411324',
                'region_name' => '镇平县',
                'region_level' => 3,
                'parent_region_code' => '411300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'region_code' => '411325',
                'region_name' => '内乡县',
                'region_level' => 3,
                'parent_region_code' => '411300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'region_code' => '411326',
                'region_name' => '淅川县',
                'region_level' => 3,
                'parent_region_code' => '411300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'region_code' => '411327',
                'region_name' => '社旗县',
                'region_level' => 3,
                'parent_region_code' => '411300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'region_code' => '411328',
                'region_name' => '唐河县',
                'region_level' => 3,
                'parent_region_code' => '411300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'region_code' => '411329',
                'region_name' => '新野县',
                'region_level' => 3,
                'parent_region_code' => '411300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'region_code' => '411330',
                'region_name' => '桐柏县',
                'region_level' => 3,
                'parent_region_code' => '411300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'region_code' => '411381',
                'region_name' => '邓州市',
                'region_level' => 3,
                'parent_region_code' => '411400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'region_code' => '411400',
                'region_name' => '商丘市',
                'region_level' => 2,
                'parent_region_code' => '410000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'region_code' => '411401',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '411400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'region_code' => '411402',
                'region_name' => '梁园区',
                'region_level' => 3,
                'parent_region_code' => '411400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'region_code' => '411403',
                'region_name' => '睢阳区',
                'region_level' => 3,
                'parent_region_code' => '411400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'region_code' => '411421',
                'region_name' => '民权县',
                'region_level' => 3,
                'parent_region_code' => '411400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'region_code' => '411422',
                'region_name' => '睢县',
                'region_level' => 3,
                'parent_region_code' => '411400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'region_code' => '411423',
                'region_name' => '宁陵县',
                'region_level' => 3,
                'parent_region_code' => '411400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'region_code' => '411424',
                'region_name' => '柘城县',
                'region_level' => 3,
                'parent_region_code' => '411400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'region_code' => '411425',
                'region_name' => '虞城县',
                'region_level' => 3,
                'parent_region_code' => '411400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'region_code' => '411426',
                'region_name' => '夏邑县',
                'region_level' => 3,
                'parent_region_code' => '411400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'region_code' => '411481',
                'region_name' => '永城市',
                'region_level' => 3,
                'parent_region_code' => '411500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'region_code' => '411500',
                'region_name' => '信阳市',
                'region_level' => 2,
                'parent_region_code' => '410000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'region_code' => '411501',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '411500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'region_code' => '411502',
                'region_name' => '浉河区',
                'region_level' => 3,
                'parent_region_code' => '411500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'region_code' => '411503',
                'region_name' => '平桥区',
                'region_level' => 3,
                'parent_region_code' => '411500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'region_code' => '411521',
                'region_name' => '罗山县',
                'region_level' => 3,
                'parent_region_code' => '411500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'region_code' => '411522',
                'region_name' => '光山县',
                'region_level' => 3,
                'parent_region_code' => '411500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'region_code' => '411523',
                'region_name' => '新县',
                'region_level' => 3,
                'parent_region_code' => '411500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'region_code' => '411524',
                'region_name' => '商城县',
                'region_level' => 3,
                'parent_region_code' => '411500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'region_code' => '411525',
                'region_name' => '固始县',
                'region_level' => 3,
                'parent_region_code' => '411500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'region_code' => '411526',
                'region_name' => '潢川县',
                'region_level' => 3,
                'parent_region_code' => '411500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'region_code' => '411527',
                'region_name' => '淮滨县',
                'region_level' => 3,
                'parent_region_code' => '411500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'region_code' => '411528',
                'region_name' => '息县',
                'region_level' => 3,
                'parent_region_code' => '411500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'region_code' => '411600',
                'region_name' => '周口市',
                'region_level' => 2,
                'parent_region_code' => '410000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'region_code' => '411601',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '411600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'region_code' => '411602',
                'region_name' => '川汇区',
                'region_level' => 3,
                'parent_region_code' => '411600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'region_code' => '411621',
                'region_name' => '扶沟县',
                'region_level' => 3,
                'parent_region_code' => '411600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'region_code' => '411622',
                'region_name' => '西华县',
                'region_level' => 3,
                'parent_region_code' => '411600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'region_code' => '411623',
                'region_name' => '商水县',
                'region_level' => 3,
                'parent_region_code' => '411600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'region_code' => '411624',
                'region_name' => '沈丘县',
                'region_level' => 3,
                'parent_region_code' => '411600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'region_code' => '411625',
                'region_name' => '郸城县',
                'region_level' => 3,
                'parent_region_code' => '411600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'region_code' => '411626',
                'region_name' => '淮阳县',
                'region_level' => 3,
                'parent_region_code' => '411600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'region_code' => '411627',
                'region_name' => '太康县',
                'region_level' => 3,
                'parent_region_code' => '411600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'region_code' => '411628',
                'region_name' => '鹿邑县',
                'region_level' => 3,
                'parent_region_code' => '411600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'region_code' => '411681',
                'region_name' => '项城市',
                'region_level' => 3,
                'parent_region_code' => '411700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'region_code' => '411700',
                'region_name' => '驻马店市',
                'region_level' => 2,
                'parent_region_code' => '410000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'region_code' => '411701',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '411700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'region_code' => '411702',
                'region_name' => '驿城区',
                'region_level' => 3,
                'parent_region_code' => '411700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'region_code' => '411721',
                'region_name' => '西平县',
                'region_level' => 3,
                'parent_region_code' => '411700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'region_code' => '411722',
                'region_name' => '上蔡县',
                'region_level' => 3,
                'parent_region_code' => '411700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'region_code' => '411723',
                'region_name' => '平舆县',
                'region_level' => 3,
                'parent_region_code' => '411700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'region_code' => '411724',
                'region_name' => '正阳县',
                'region_level' => 3,
                'parent_region_code' => '411700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'region_code' => '411725',
                'region_name' => '确山县',
                'region_level' => 3,
                'parent_region_code' => '411700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'region_code' => '411726',
                'region_name' => '泌阳县',
                'region_level' => 3,
                'parent_region_code' => '411700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'region_code' => '411727',
                'region_name' => '汝南县',
                'region_level' => 3,
                'parent_region_code' => '411700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'region_code' => '411728',
                'region_name' => '遂平县',
                'region_level' => 3,
                'parent_region_code' => '411700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'region_code' => '411729',
                'region_name' => '新蔡县',
                'region_level' => 3,
                'parent_region_code' => '411700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'region_code' => '419000',
                'region_name' => '省直辖县级行政区划',
                'region_level' => 2,
                'parent_region_code' => '420000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'region_code' => '419001',
                'region_name' => '济源市',
                'region_level' => 3,
                'parent_region_code' => '419000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'region_code' => '420000',
                'region_name' => '湖北省',
                'region_level' => 1,
                'parent_region_code' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'region_code' => '420100',
                'region_name' => '武汉市',
                'region_level' => 2,
                'parent_region_code' => '420000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'region_code' => '420101',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '420100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'region_code' => '420102',
                'region_name' => '江岸区',
                'region_level' => 3,
                'parent_region_code' => '420100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'region_code' => '420103',
                'region_name' => '江汉区',
                'region_level' => 3,
                'parent_region_code' => '420100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'region_code' => '420104',
                'region_name' => '硚口区',
                'region_level' => 3,
                'parent_region_code' => '420100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'region_code' => '420105',
                'region_name' => '汉阳区',
                'region_level' => 3,
                'parent_region_code' => '420100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'region_code' => '420106',
                'region_name' => '武昌区',
                'region_level' => 3,
                'parent_region_code' => '420100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'region_code' => '420107',
                'region_name' => '青山区',
                'region_level' => 3,
                'parent_region_code' => '420100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'region_code' => '420111',
                'region_name' => '洪山区',
                'region_level' => 3,
                'parent_region_code' => '420100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'region_code' => '420112',
                'region_name' => '东西湖区',
                'region_level' => 3,
                'parent_region_code' => '420100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'region_code' => '420113',
                'region_name' => '汉南区',
                'region_level' => 3,
                'parent_region_code' => '420100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'region_code' => '420114',
                'region_name' => '蔡甸区',
                'region_level' => 3,
                'parent_region_code' => '420100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'region_code' => '420115',
                'region_name' => '江夏区',
                'region_level' => 3,
                'parent_region_code' => '420100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'region_code' => '420116',
                'region_name' => '黄陂区',
                'region_level' => 3,
                'parent_region_code' => '420100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'region_code' => '420117',
                'region_name' => '新洲区',
                'region_level' => 3,
                'parent_region_code' => '420100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'region_code' => '420200',
                'region_name' => '黄石市',
                'region_level' => 2,
                'parent_region_code' => '420000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'region_code' => '420201',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '420200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'region_code' => '420202',
                'region_name' => '黄石港区',
                'region_level' => 3,
                'parent_region_code' => '420200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'region_code' => '420203',
                'region_name' => '西塞山区',
                'region_level' => 3,
                'parent_region_code' => '420200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'region_code' => '420204',
                'region_name' => '下陆区',
                'region_level' => 3,
                'parent_region_code' => '420200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'region_code' => '420205',
                'region_name' => '铁山区',
                'region_level' => 3,
                'parent_region_code' => '420200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'region_code' => '420222',
                'region_name' => '阳新县',
                'region_level' => 3,
                'parent_region_code' => '420200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'region_code' => '420281',
                'region_name' => '大冶市',
                'region_level' => 3,
                'parent_region_code' => '420300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'region_code' => '420300',
                'region_name' => '十堰市',
                'region_level' => 2,
                'parent_region_code' => '420000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'region_code' => '420301',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '420300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'region_code' => '420302',
                'region_name' => '茅箭区',
                'region_level' => 3,
                'parent_region_code' => '420300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'region_code' => '420303',
                'region_name' => '张湾区',
                'region_level' => 3,
                'parent_region_code' => '420300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'region_code' => '420321',
                'region_name' => '郧县',
                'region_level' => 3,
                'parent_region_code' => '420300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'region_code' => '420322',
                'region_name' => '郧西县',
                'region_level' => 3,
                'parent_region_code' => '420300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'region_code' => '420323',
                'region_name' => '竹山县',
                'region_level' => 3,
                'parent_region_code' => '420300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'region_code' => '420324',
                'region_name' => '竹溪县',
                'region_level' => 3,
                'parent_region_code' => '420300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'region_code' => '420325',
                'region_name' => '房县',
                'region_level' => 3,
                'parent_region_code' => '420300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'region_code' => '420381',
                'region_name' => '丹江口市',
                'region_level' => 3,
                'parent_region_code' => '420400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'region_code' => '420500',
                'region_name' => '宜昌市',
                'region_level' => 2,
                'parent_region_code' => '420000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'region_code' => '420501',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '420500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'region_code' => '420502',
                'region_name' => '西陵区',
                'region_level' => 3,
                'parent_region_code' => '420500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'region_code' => '420503',
                'region_name' => '伍家岗区',
                'region_level' => 3,
                'parent_region_code' => '420500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'region_code' => '420504',
                'region_name' => '点军区',
                'region_level' => 3,
                'parent_region_code' => '420500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'region_code' => '420505',
                'region_name' => '猇亭区',
                'region_level' => 3,
                'parent_region_code' => '420500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'region_code' => '420506',
                'region_name' => '夷陵区',
                'region_level' => 3,
                'parent_region_code' => '420500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'region_code' => '420525',
                'region_name' => '远安县',
                'region_level' => 3,
                'parent_region_code' => '420500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'region_code' => '420526',
                'region_name' => '兴山县',
                'region_level' => 3,
                'parent_region_code' => '420500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'region_code' => '420527',
                'region_name' => '秭归县',
                'region_level' => 3,
                'parent_region_code' => '420500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'region_code' => '420528',
                'region_name' => '长阳土家族自治县',
                'region_level' => 3,
                'parent_region_code' => '420500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'region_code' => '420529',
                'region_name' => '五峰土家族自治县',
                'region_level' => 3,
                'parent_region_code' => '420500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'region_code' => '420581',
                'region_name' => '宜都市',
                'region_level' => 3,
                'parent_region_code' => '420600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'region_code' => '420582',
                'region_name' => '当阳市',
                'region_level' => 3,
                'parent_region_code' => '420600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'region_code' => '420583',
                'region_name' => '枝江市',
                'region_level' => 3,
                'parent_region_code' => '420600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'region_code' => '420600',
                'region_name' => '襄阳市',
                'region_level' => 2,
                'parent_region_code' => '420000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'region_code' => '420601',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '420600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'region_code' => '420602',
                'region_name' => '襄城区',
                'region_level' => 3,
                'parent_region_code' => '420600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'region_code' => '420606',
                'region_name' => '樊城区',
                'region_level' => 3,
                'parent_region_code' => '420600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'region_code' => '420607',
                'region_name' => '襄州区',
                'region_level' => 3,
                'parent_region_code' => '420600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'region_code' => '420624',
                'region_name' => '南漳县',
                'region_level' => 3,
                'parent_region_code' => '420600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'region_code' => '420625',
                'region_name' => '谷城县',
                'region_level' => 3,
                'parent_region_code' => '420600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'region_code' => '420626',
                'region_name' => '保康县',
                'region_level' => 3,
                'parent_region_code' => '420600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'region_code' => '420682',
                'region_name' => '老河口市',
                'region_level' => 3,
                'parent_region_code' => '420700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'region_code' => '420683',
                'region_name' => '枣阳市',
                'region_level' => 3,
                'parent_region_code' => '420700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'region_code' => '420684',
                'region_name' => '宜城市',
                'region_level' => 3,
                'parent_region_code' => '420700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'region_code' => '420700',
                'region_name' => '鄂州市',
                'region_level' => 2,
                'parent_region_code' => '420000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'region_code' => '420701',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '420700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'region_code' => '420702',
                'region_name' => '梁子湖区',
                'region_level' => 3,
                'parent_region_code' => '420700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'region_code' => '420703',
                'region_name' => '华容区',
                'region_level' => 3,
                'parent_region_code' => '420700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'region_code' => '420704',
                'region_name' => '鄂城区',
                'region_level' => 3,
                'parent_region_code' => '420700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'region_code' => '420800',
                'region_name' => '荆门市',
                'region_level' => 2,
                'parent_region_code' => '420000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'region_code' => '420801',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '420800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'region_code' => '420802',
                'region_name' => '东宝区',
                'region_level' => 3,
                'parent_region_code' => '420800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'region_code' => '420804',
                'region_name' => '掇刀区',
                'region_level' => 3,
                'parent_region_code' => '420800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'region_code' => '420821',
                'region_name' => '京山县',
                'region_level' => 3,
                'parent_region_code' => '420800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'region_code' => '420822',
                'region_name' => '沙洋县',
                'region_level' => 3,
                'parent_region_code' => '420800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'region_code' => '420881',
                'region_name' => '钟祥市',
                'region_level' => 3,
                'parent_region_code' => '420900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'region_code' => '420900',
                'region_name' => '孝感市',
                'region_level' => 2,
                'parent_region_code' => '420000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'region_code' => '420901',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '420900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'region_code' => '420902',
                'region_name' => '孝南区',
                'region_level' => 3,
                'parent_region_code' => '420900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'region_code' => '420921',
                'region_name' => '孝昌县',
                'region_level' => 3,
                'parent_region_code' => '420900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'region_code' => '420922',
                'region_name' => '大悟县',
                'region_level' => 3,
                'parent_region_code' => '420900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'region_code' => '420923',
                'region_name' => '云梦县',
                'region_level' => 3,
                'parent_region_code' => '420900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'region_code' => '420981',
                'region_name' => '应城市',
                'region_level' => 3,
                'parent_region_code' => '421000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'region_code' => '420982',
                'region_name' => '安陆市',
                'region_level' => 3,
                'parent_region_code' => '421000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'region_code' => '420984',
                'region_name' => '汉川市',
                'region_level' => 3,
                'parent_region_code' => '421000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'region_code' => '421000',
                'region_name' => '荆州市',
                'region_level' => 2,
                'parent_region_code' => '420000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'region_code' => '421001',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '421000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'region_code' => '421002',
                'region_name' => '沙市区',
                'region_level' => 3,
                'parent_region_code' => '421000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'region_code' => '421003',
                'region_name' => '荆州区',
                'region_level' => 3,
                'parent_region_code' => '421000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'region_code' => '421022',
                'region_name' => '公安县',
                'region_level' => 3,
                'parent_region_code' => '421000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'region_code' => '421023',
                'region_name' => '监利县',
                'region_level' => 3,
                'parent_region_code' => '421000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'region_code' => '421024',
                'region_name' => '江陵县',
                'region_level' => 3,
                'parent_region_code' => '421000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'region_code' => '421081',
                'region_name' => '石首市',
                'region_level' => 3,
                'parent_region_code' => '421100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'region_code' => '421083',
                'region_name' => '洪湖市',
                'region_level' => 3,
                'parent_region_code' => '421100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'region_code' => '421087',
                'region_name' => '松滋市',
                'region_level' => 3,
                'parent_region_code' => '421100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'region_code' => '421100',
                'region_name' => '黄冈市',
                'region_level' => 2,
                'parent_region_code' => '420000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'region_code' => '421101',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '421100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'region_code' => '421102',
                'region_name' => '黄州区',
                'region_level' => 3,
                'parent_region_code' => '421100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'region_code' => '421121',
                'region_name' => '团风县',
                'region_level' => 3,
                'parent_region_code' => '421100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'region_code' => '421122',
                'region_name' => '红安县',
                'region_level' => 3,
                'parent_region_code' => '421100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'region_code' => '421123',
                'region_name' => '罗田县',
                'region_level' => 3,
                'parent_region_code' => '421100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'region_code' => '421124',
                'region_name' => '英山县',
                'region_level' => 3,
                'parent_region_code' => '421100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'region_code' => '421125',
                'region_name' => '浠水县',
                'region_level' => 3,
                'parent_region_code' => '421100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'region_code' => '421126',
                'region_name' => '蕲春县',
                'region_level' => 3,
                'parent_region_code' => '421100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'region_code' => '421127',
                'region_name' => '黄梅县',
                'region_level' => 3,
                'parent_region_code' => '421100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'region_code' => '421181',
                'region_name' => '麻城市',
                'region_level' => 3,
                'parent_region_code' => '421200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'region_code' => '421182',
                'region_name' => '武穴市',
                'region_level' => 3,
                'parent_region_code' => '421200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'region_code' => '421200',
                'region_name' => '咸宁市',
                'region_level' => 2,
                'parent_region_code' => '420000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'region_code' => '421201',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '421200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'region_code' => '421202',
                'region_name' => '咸安区',
                'region_level' => 3,
                'parent_region_code' => '421200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'region_code' => '421221',
                'region_name' => '嘉鱼县',
                'region_level' => 3,
                'parent_region_code' => '421200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'region_code' => '421222',
                'region_name' => '通城县',
                'region_level' => 3,
                'parent_region_code' => '421200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'region_code' => '421223',
                'region_name' => '崇阳县',
                'region_level' => 3,
                'parent_region_code' => '421200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'region_code' => '421224',
                'region_name' => '通山县',
                'region_level' => 3,
                'parent_region_code' => '421200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'region_code' => '421281',
                'region_name' => '赤壁市',
                'region_level' => 3,
                'parent_region_code' => '421300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'region_code' => '421300',
                'region_name' => '随州市',
                'region_level' => 2,
                'parent_region_code' => '420000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'region_code' => '421301',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '421300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'region_code' => '421303',
                'region_name' => '曾都区',
                'region_level' => 3,
                'parent_region_code' => '421300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'region_code' => '421321',
                'region_name' => '随县',
                'region_level' => 3,
                'parent_region_code' => '421300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'region_code' => '421381',
                'region_name' => '广水市',
                'region_level' => 3,
                'parent_region_code' => '421400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'region_code' => '422800',
                'region_name' => '恩施土家族苗族自治州',
                'region_level' => 2,
                'parent_region_code' => '420000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'region_code' => '422801',
                'region_name' => '恩施市',
                'region_level' => 3,
                'parent_region_code' => '422800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'region_code' => '422802',
                'region_name' => '利川市',
                'region_level' => 3,
                'parent_region_code' => '422800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'region_code' => '422822',
                'region_name' => '建始县',
                'region_level' => 3,
                'parent_region_code' => '422800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'region_code' => '422823',
                'region_name' => '巴东县',
                'region_level' => 3,
                'parent_region_code' => '422800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'region_code' => '422825',
                'region_name' => '宣恩县',
                'region_level' => 3,
                'parent_region_code' => '422800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'region_code' => '422826',
                'region_name' => '咸丰县',
                'region_level' => 3,
                'parent_region_code' => '422800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'region_code' => '422827',
                'region_name' => '来凤县',
                'region_level' => 3,
                'parent_region_code' => '422800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'region_code' => '422828',
                'region_name' => '鹤峰县',
                'region_level' => 3,
                'parent_region_code' => '422800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'region_code' => '429000',
                'region_name' => '省直辖县级行政区划',
                'region_level' => 2,
                'parent_region_code' => '430000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'region_code' => '429004',
                'region_name' => '仙桃市',
                'region_level' => 3,
                'parent_region_code' => '429000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'region_code' => '429005',
                'region_name' => '潜江市',
                'region_level' => 3,
                'parent_region_code' => '429000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'region_code' => '429006',
                'region_name' => '天门市',
                'region_level' => 3,
                'parent_region_code' => '429000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'region_code' => '429021',
                'region_name' => '神农架林区',
                'region_level' => 3,
                'parent_region_code' => '429000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'region_code' => '430000',
                'region_name' => '湖南省',
                'region_level' => 1,
                'parent_region_code' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'region_code' => '430100',
                'region_name' => '长沙市',
                'region_level' => 2,
                'parent_region_code' => '430000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'region_code' => '430101',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '430100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'region_code' => '430102',
                'region_name' => '芙蓉区',
                'region_level' => 3,
                'parent_region_code' => '430100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'region_code' => '430103',
                'region_name' => '天心区',
                'region_level' => 3,
                'parent_region_code' => '430100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'region_code' => '430104',
                'region_name' => '岳麓区',
                'region_level' => 3,
                'parent_region_code' => '430100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'region_code' => '430105',
                'region_name' => '开福区',
                'region_level' => 3,
                'parent_region_code' => '430100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'region_code' => '430111',
                'region_name' => '雨花区',
                'region_level' => 3,
                'parent_region_code' => '430100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'region_code' => '430112',
                'region_name' => '望城区',
                'region_level' => 3,
                'parent_region_code' => '430100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'region_code' => '430121',
                'region_name' => '长沙县',
                'region_level' => 3,
                'parent_region_code' => '430100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'region_code' => '430124',
                'region_name' => '宁乡县',
                'region_level' => 3,
                'parent_region_code' => '430100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'region_code' => '430181',
                'region_name' => '浏阳市',
                'region_level' => 3,
                'parent_region_code' => '430200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'region_code' => '430200',
                'region_name' => '株洲市',
                'region_level' => 2,
                'parent_region_code' => '430000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'region_code' => '430201',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '430200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'region_code' => '430202',
                'region_name' => '荷塘区',
                'region_level' => 3,
                'parent_region_code' => '430200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'region_code' => '430203',
                'region_name' => '芦淞区',
                'region_level' => 3,
                'parent_region_code' => '430200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'region_code' => '430204',
                'region_name' => '石峰区',
                'region_level' => 3,
                'parent_region_code' => '430200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'region_code' => '430211',
                'region_name' => '天元区',
                'region_level' => 3,
                'parent_region_code' => '430200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'region_code' => '430221',
                'region_name' => '株洲县',
                'region_level' => 3,
                'parent_region_code' => '430200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'region_code' => '430223',
                'region_name' => '攸县',
                'region_level' => 3,
                'parent_region_code' => '430200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'region_code' => '430224',
                'region_name' => '茶陵县',
                'region_level' => 3,
                'parent_region_code' => '430200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'region_code' => '430225',
                'region_name' => '炎陵县',
                'region_level' => 3,
                'parent_region_code' => '430200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'region_code' => '430281',
                'region_name' => '醴陵市',
                'region_level' => 3,
                'parent_region_code' => '430300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'region_code' => '430300',
                'region_name' => '湘潭市',
                'region_level' => 2,
                'parent_region_code' => '430000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'region_code' => '430301',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '430300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'region_code' => '430302',
                'region_name' => '雨湖区',
                'region_level' => 3,
                'parent_region_code' => '430300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'region_code' => '430304',
                'region_name' => '岳塘区',
                'region_level' => 3,
                'parent_region_code' => '430300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'region_code' => '430321',
                'region_name' => '湘潭县',
                'region_level' => 3,
                'parent_region_code' => '430300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'region_code' => '430381',
                'region_name' => '湘乡市',
                'region_level' => 3,
                'parent_region_code' => '430400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'region_code' => '430382',
                'region_name' => '韶山市',
                'region_level' => 3,
                'parent_region_code' => '430400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'region_code' => '430400',
                'region_name' => '衡阳市',
                'region_level' => 2,
                'parent_region_code' => '430000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'region_code' => '430401',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '430400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'region_code' => '430405',
                'region_name' => '珠晖区',
                'region_level' => 3,
                'parent_region_code' => '430400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'region_code' => '430406',
                'region_name' => '雁峰区',
                'region_level' => 3,
                'parent_region_code' => '430400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'region_code' => '430407',
                'region_name' => '石鼓区',
                'region_level' => 3,
                'parent_region_code' => '430400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'region_code' => '430408',
                'region_name' => '蒸湘区',
                'region_level' => 3,
                'parent_region_code' => '430400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'region_code' => '430412',
                'region_name' => '南岳区',
                'region_level' => 3,
                'parent_region_code' => '430400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'region_code' => '430421',
                'region_name' => '衡阳县',
                'region_level' => 3,
                'parent_region_code' => '430400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'region_code' => '430422',
                'region_name' => '衡南县',
                'region_level' => 3,
                'parent_region_code' => '430400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'region_code' => '430423',
                'region_name' => '衡山县',
                'region_level' => 3,
                'parent_region_code' => '430400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'region_code' => '430424',
                'region_name' => '衡东县',
                'region_level' => 3,
                'parent_region_code' => '430400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'region_code' => '430426',
                'region_name' => '祁东县',
                'region_level' => 3,
                'parent_region_code' => '430400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'region_code' => '430481',
                'region_name' => '耒阳市',
                'region_level' => 3,
                'parent_region_code' => '430500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'region_code' => '430482',
                'region_name' => '常宁市',
                'region_level' => 3,
                'parent_region_code' => '430500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'region_code' => '430500',
                'region_name' => '邵阳市',
                'region_level' => 2,
                'parent_region_code' => '430000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'region_code' => '430501',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '430500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'region_code' => '430502',
                'region_name' => '双清区',
                'region_level' => 3,
                'parent_region_code' => '430500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'region_code' => '430503',
                'region_name' => '大祥区',
                'region_level' => 3,
                'parent_region_code' => '430500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'region_code' => '430511',
                'region_name' => '北塔区',
                'region_level' => 3,
                'parent_region_code' => '430500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'region_code' => '430521',
                'region_name' => '邵东县',
                'region_level' => 3,
                'parent_region_code' => '430500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'region_code' => '430522',
                'region_name' => '新邵县',
                'region_level' => 3,
                'parent_region_code' => '430500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'region_code' => '430523',
                'region_name' => '邵阳县',
                'region_level' => 3,
                'parent_region_code' => '430500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'region_code' => '430524',
                'region_name' => '隆回县',
                'region_level' => 3,
                'parent_region_code' => '430500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'region_code' => '430525',
                'region_name' => '洞口县',
                'region_level' => 3,
                'parent_region_code' => '430500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'region_code' => '430527',
                'region_name' => '绥宁县',
                'region_level' => 3,
                'parent_region_code' => '430500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'region_code' => '430528',
                'region_name' => '新宁县',
                'region_level' => 3,
                'parent_region_code' => '430500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'region_code' => '430529',
                'region_name' => '城步苗族自治县',
                'region_level' => 3,
                'parent_region_code' => '430500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'region_code' => '430581',
                'region_name' => '武冈市',
                'region_level' => 3,
                'parent_region_code' => '430600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'region_code' => '430600',
                'region_name' => '岳阳市',
                'region_level' => 2,
                'parent_region_code' => '430000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'region_code' => '430601',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '430600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'region_code' => '430602',
                'region_name' => '岳阳楼区',
                'region_level' => 3,
                'parent_region_code' => '430600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'region_code' => '430603',
                'region_name' => '云溪区',
                'region_level' => 3,
                'parent_region_code' => '430600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'region_code' => '430611',
                'region_name' => '君山区',
                'region_level' => 3,
                'parent_region_code' => '430600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'region_code' => '430621',
                'region_name' => '岳阳县',
                'region_level' => 3,
                'parent_region_code' => '430600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'region_code' => '430623',
                'region_name' => '华容县',
                'region_level' => 3,
                'parent_region_code' => '430600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'region_code' => '430624',
                'region_name' => '湘阴县',
                'region_level' => 3,
                'parent_region_code' => '430600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'region_code' => '430626',
                'region_name' => '平江县',
                'region_level' => 3,
                'parent_region_code' => '430600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'region_code' => '430681',
                'region_name' => '汨罗市',
                'region_level' => 3,
                'parent_region_code' => '430700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'region_code' => '430682',
                'region_name' => '临湘市',
                'region_level' => 3,
                'parent_region_code' => '430700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'region_code' => '430700',
                'region_name' => '常德市',
                'region_level' => 2,
                'parent_region_code' => '430000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'region_code' => '430701',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '430700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'region_code' => '430702',
                'region_name' => '武陵区',
                'region_level' => 3,
                'parent_region_code' => '430700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'region_code' => '430703',
                'region_name' => '鼎城区',
                'region_level' => 3,
                'parent_region_code' => '430700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'region_code' => '430721',
                'region_name' => '安乡县',
                'region_level' => 3,
                'parent_region_code' => '430700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'region_code' => '430722',
                'region_name' => '汉寿县',
                'region_level' => 3,
                'parent_region_code' => '430700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'region_code' => '430723',
                'region_name' => '澧县',
                'region_level' => 3,
                'parent_region_code' => '430700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'region_code' => '430724',
                'region_name' => '临澧县',
                'region_level' => 3,
                'parent_region_code' => '430700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'region_code' => '430725',
                'region_name' => '桃源县',
                'region_level' => 3,
                'parent_region_code' => '430700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'region_code' => '430726',
                'region_name' => '石门县',
                'region_level' => 3,
                'parent_region_code' => '430700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'region_code' => '430781',
                'region_name' => '津市市',
                'region_level' => 3,
                'parent_region_code' => '430800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'region_code' => '430800',
                'region_name' => '张家界市',
                'region_level' => 2,
                'parent_region_code' => '430000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'region_code' => '430801',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '430800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'region_code' => '430802',
                'region_name' => '永定区',
                'region_level' => 3,
                'parent_region_code' => '430800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'region_code' => '430811',
                'region_name' => '武陵源区',
                'region_level' => 3,
                'parent_region_code' => '430800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'region_code' => '430821',
                'region_name' => '慈利县',
                'region_level' => 3,
                'parent_region_code' => '430800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'region_code' => '430822',
                'region_name' => '桑植县',
                'region_level' => 3,
                'parent_region_code' => '430800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'region_code' => '430900',
                'region_name' => '益阳市',
                'region_level' => 2,
                'parent_region_code' => '430000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'region_code' => '430901',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '430900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'region_code' => '430902',
                'region_name' => '资阳区',
                'region_level' => 3,
                'parent_region_code' => '430900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'region_code' => '430903',
                'region_name' => '赫山区',
                'region_level' => 3,
                'parent_region_code' => '430900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'region_code' => '430921',
                'region_name' => '南县',
                'region_level' => 3,
                'parent_region_code' => '430900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'region_code' => '430922',
                'region_name' => '桃江县',
                'region_level' => 3,
                'parent_region_code' => '430900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'region_code' => '430923',
                'region_name' => '安化县',
                'region_level' => 3,
                'parent_region_code' => '430900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'region_code' => '430981',
                'region_name' => '沅江市',
                'region_level' => 3,
                'parent_region_code' => '431000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'region_code' => '431000',
                'region_name' => '郴州市',
                'region_level' => 2,
                'parent_region_code' => '430000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'region_code' => '431001',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '431000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'region_code' => '431002',
                'region_name' => '北湖区',
                'region_level' => 3,
                'parent_region_code' => '431000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'region_code' => '431003',
                'region_name' => '苏仙区',
                'region_level' => 3,
                'parent_region_code' => '431000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'region_code' => '431021',
                'region_name' => '桂阳县',
                'region_level' => 3,
                'parent_region_code' => '431000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'region_code' => '431022',
                'region_name' => '宜章县',
                'region_level' => 3,
                'parent_region_code' => '431000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'region_code' => '431023',
                'region_name' => '永兴县',
                'region_level' => 3,
                'parent_region_code' => '431000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'region_code' => '431024',
                'region_name' => '嘉禾县',
                'region_level' => 3,
                'parent_region_code' => '431000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'region_code' => '431025',
                'region_name' => '临武县',
                'region_level' => 3,
                'parent_region_code' => '431000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'region_code' => '431026',
                'region_name' => '汝城县',
                'region_level' => 3,
                'parent_region_code' => '431000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'region_code' => '431027',
                'region_name' => '桂东县',
                'region_level' => 3,
                'parent_region_code' => '431000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'region_code' => '431028',
                'region_name' => '安仁县',
                'region_level' => 3,
                'parent_region_code' => '431000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'region_code' => '431081',
                'region_name' => '资兴市',
                'region_level' => 3,
                'parent_region_code' => '431100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'region_code' => '431100',
                'region_name' => '永州市',
                'region_level' => 2,
                'parent_region_code' => '430000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'region_code' => '431101',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '431100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'region_code' => '431102',
                'region_name' => '零陵区',
                'region_level' => 3,
                'parent_region_code' => '431100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'region_code' => '431103',
                'region_name' => '冷水滩区',
                'region_level' => 3,
                'parent_region_code' => '431100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'region_code' => '431121',
                'region_name' => '祁阳县',
                'region_level' => 3,
                'parent_region_code' => '431100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'region_code' => '431122',
                'region_name' => '东安县',
                'region_level' => 3,
                'parent_region_code' => '431100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'region_code' => '431123',
                'region_name' => '双牌县',
                'region_level' => 3,
                'parent_region_code' => '431100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'region_code' => '431124',
                'region_name' => '道县',
                'region_level' => 3,
                'parent_region_code' => '431100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'region_code' => '431125',
                'region_name' => '江永县',
                'region_level' => 3,
                'parent_region_code' => '431100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'region_code' => '431126',
                'region_name' => '宁远县',
                'region_level' => 3,
                'parent_region_code' => '431100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'region_code' => '431127',
                'region_name' => '蓝山县',
                'region_level' => 3,
                'parent_region_code' => '431100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'region_code' => '431128',
                'region_name' => '新田县',
                'region_level' => 3,
                'parent_region_code' => '431100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'region_code' => '431129',
                'region_name' => '江华瑶族自治县',
                'region_level' => 3,
                'parent_region_code' => '431100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'region_code' => '431200',
                'region_name' => '怀化市',
                'region_level' => 2,
                'parent_region_code' => '430000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'region_code' => '431201',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '431200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'region_code' => '431202',
                'region_name' => '鹤城区',
                'region_level' => 3,
                'parent_region_code' => '431200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'region_code' => '431221',
                'region_name' => '中方县',
                'region_level' => 3,
                'parent_region_code' => '431200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'region_code' => '431222',
                'region_name' => '沅陵县',
                'region_level' => 3,
                'parent_region_code' => '431200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'region_code' => '431223',
                'region_name' => '辰溪县',
                'region_level' => 3,
                'parent_region_code' => '431200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'region_code' => '431224',
                'region_name' => '溆浦县',
                'region_level' => 3,
                'parent_region_code' => '431200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'region_code' => '431225',
                'region_name' => '会同县',
                'region_level' => 3,
                'parent_region_code' => '431200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'region_code' => '431226',
                'region_name' => '麻阳苗族自治县',
                'region_level' => 3,
                'parent_region_code' => '431200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'region_code' => '431227',
                'region_name' => '新晃侗族自治县',
                'region_level' => 3,
                'parent_region_code' => '431200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'region_code' => '431228',
                'region_name' => '芷江侗族自治县',
                'region_level' => 3,
                'parent_region_code' => '431200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'region_code' => '431229',
                'region_name' => '靖州苗族侗族自治县',
                'region_level' => 3,
                'parent_region_code' => '431200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'region_code' => '431230',
                'region_name' => '通道侗族自治县',
                'region_level' => 3,
                'parent_region_code' => '431200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'region_code' => '431281',
                'region_name' => '洪江市',
                'region_level' => 3,
                'parent_region_code' => '431300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'region_code' => '431300',
                'region_name' => '娄底市',
                'region_level' => 2,
                'parent_region_code' => '430000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'region_code' => '431301',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '431300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'region_code' => '431302',
                'region_name' => '娄星区',
                'region_level' => 3,
                'parent_region_code' => '431300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'region_code' => '431321',
                'region_name' => '双峰县',
                'region_level' => 3,
                'parent_region_code' => '431300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'region_code' => '431322',
                'region_name' => '新化县',
                'region_level' => 3,
                'parent_region_code' => '431300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'region_code' => '431381',
                'region_name' => '冷水江市',
                'region_level' => 3,
                'parent_region_code' => '431400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'region_code' => '431382',
                'region_name' => '涟源市',
                'region_level' => 3,
                'parent_region_code' => '431400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'region_code' => '433100',
                'region_name' => '湘西土家族苗族自治州',
                'region_level' => 2,
                'parent_region_code' => '430000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'region_code' => '433101',
                'region_name' => '吉首市',
                'region_level' => 3,
                'parent_region_code' => '433100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'region_code' => '433122',
                'region_name' => '泸溪县',
                'region_level' => 3,
                'parent_region_code' => '433100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'region_code' => '433123',
                'region_name' => '凤凰县',
                'region_level' => 3,
                'parent_region_code' => '433100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'region_code' => '433124',
                'region_name' => '花垣县',
                'region_level' => 3,
                'parent_region_code' => '433100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'region_code' => '433125',
                'region_name' => '保靖县',
                'region_level' => 3,
                'parent_region_code' => '433100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'region_code' => '433126',
                'region_name' => '古丈县',
                'region_level' => 3,
                'parent_region_code' => '433100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'region_code' => '433127',
                'region_name' => '永顺县',
                'region_level' => 3,
                'parent_region_code' => '433100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'region_code' => '433130',
                'region_name' => '龙山县',
                'region_level' => 3,
                'parent_region_code' => '433100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'region_code' => '440000',
                'region_name' => '广东省',
                'region_level' => 1,
                'parent_region_code' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'region_code' => '440100',
                'region_name' => '广州市',
                'region_level' => 2,
                'parent_region_code' => '440000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'region_code' => '440101',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '440100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'region_code' => '440103',
                'region_name' => '荔湾区',
                'region_level' => 3,
                'parent_region_code' => '440100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'region_code' => '440104',
                'region_name' => '越秀区',
                'region_level' => 3,
                'parent_region_code' => '440100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'region_code' => '440105',
                'region_name' => '海珠区',
                'region_level' => 3,
                'parent_region_code' => '440100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'region_code' => '440106',
                'region_name' => '天河区',
                'region_level' => 3,
                'parent_region_code' => '440100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'region_code' => '440111',
                'region_name' => '白云区',
                'region_level' => 3,
                'parent_region_code' => '440100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'region_code' => '440112',
                'region_name' => '黄埔区',
                'region_level' => 3,
                'parent_region_code' => '440100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'region_code' => '440113',
                'region_name' => '番禺区',
                'region_level' => 3,
                'parent_region_code' => '440100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'region_code' => '440114',
                'region_name' => '花都区',
                'region_level' => 3,
                'parent_region_code' => '440100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'region_code' => '440115',
                'region_name' => '南沙区',
                'region_level' => 3,
                'parent_region_code' => '440100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'region_code' => '440116',
                'region_name' => '萝岗区',
                'region_level' => 3,
                'parent_region_code' => '440100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'region_code' => '440183',
                'region_name' => '增城市',
                'region_level' => 3,
                'parent_region_code' => '440200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'region_code' => '440184',
                'region_name' => '从化市',
                'region_level' => 3,
                'parent_region_code' => '440200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'region_code' => '440200',
                'region_name' => '韶关市',
                'region_level' => 2,
                'parent_region_code' => '440000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'region_code' => '440201',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '440200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'region_code' => '440203',
                'region_name' => '武江区',
                'region_level' => 3,
                'parent_region_code' => '440200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'region_code' => '440204',
                'region_name' => '浈江区',
                'region_level' => 3,
                'parent_region_code' => '440200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'region_code' => '440205',
                'region_name' => '曲江区',
                'region_level' => 3,
                'parent_region_code' => '440200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'region_code' => '440222',
                'region_name' => '始兴县',
                'region_level' => 3,
                'parent_region_code' => '440200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'region_code' => '440224',
                'region_name' => '仁化县',
                'region_level' => 3,
                'parent_region_code' => '440200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'region_code' => '440229',
                'region_name' => '翁源县',
                'region_level' => 3,
                'parent_region_code' => '440200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'region_code' => '440232',
                'region_name' => '乳源瑶族自治县',
                'region_level' => 3,
                'parent_region_code' => '440200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'region_code' => '440233',
                'region_name' => '新丰县',
                'region_level' => 3,
                'parent_region_code' => '440200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'region_code' => '440281',
                'region_name' => '乐昌市',
                'region_level' => 3,
                'parent_region_code' => '440300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'region_code' => '440282',
                'region_name' => '南雄市',
                'region_level' => 3,
                'parent_region_code' => '440300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'region_code' => '440300',
                'region_name' => '深圳市',
                'region_level' => 2,
                'parent_region_code' => '440000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'region_code' => '440301',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '440300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'region_code' => '440303',
                'region_name' => '罗湖区',
                'region_level' => 3,
                'parent_region_code' => '440300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'region_code' => '440304',
                'region_name' => '福田区',
                'region_level' => 3,
                'parent_region_code' => '440300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'region_code' => '440305',
                'region_name' => '南山区',
                'region_level' => 3,
                'parent_region_code' => '440300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'region_code' => '440306',
                'region_name' => '宝安区',
                'region_level' => 3,
                'parent_region_code' => '440300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'region_code' => '440307',
                'region_name' => '龙岗区',
                'region_level' => 3,
                'parent_region_code' => '440300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'region_code' => '440308',
                'region_name' => '盐田区',
                'region_level' => 3,
                'parent_region_code' => '440300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'region_code' => '440400',
                'region_name' => '珠海市',
                'region_level' => 2,
                'parent_region_code' => '440000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'region_code' => '440401',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '440400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'region_code' => '440402',
                'region_name' => '香洲区',
                'region_level' => 3,
                'parent_region_code' => '440400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'region_code' => '440403',
                'region_name' => '斗门区',
                'region_level' => 3,
                'parent_region_code' => '440400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'region_code' => '440404',
                'region_name' => '金湾区',
                'region_level' => 3,
                'parent_region_code' => '440400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'region_code' => '440500',
                'region_name' => '汕头市',
                'region_level' => 2,
                'parent_region_code' => '440000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'region_code' => '440501',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '440500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'region_code' => '440507',
                'region_name' => '龙湖区',
                'region_level' => 3,
                'parent_region_code' => '440500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'region_code' => '440511',
                'region_name' => '金平区',
                'region_level' => 3,
                'parent_region_code' => '440500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'region_code' => '440512',
                'region_name' => '濠江区',
                'region_level' => 3,
                'parent_region_code' => '440500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'region_code' => '440513',
                'region_name' => '潮阳区',
                'region_level' => 3,
                'parent_region_code' => '440500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'region_code' => '440514',
                'region_name' => '潮南区',
                'region_level' => 3,
                'parent_region_code' => '440500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'region_code' => '440515',
                'region_name' => '澄海区',
                'region_level' => 3,
                'parent_region_code' => '440500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'region_code' => '440523',
                'region_name' => '南澳县',
                'region_level' => 3,
                'parent_region_code' => '440500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'region_code' => '440600',
                'region_name' => '佛山市',
                'region_level' => 2,
                'parent_region_code' => '440000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'region_code' => '440601',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '440600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'region_code' => '440604',
                'region_name' => '禅城区',
                'region_level' => 3,
                'parent_region_code' => '440600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'region_code' => '440605',
                'region_name' => '南海区',
                'region_level' => 3,
                'parent_region_code' => '440600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'region_code' => '440606',
                'region_name' => '顺德区',
                'region_level' => 3,
                'parent_region_code' => '440600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'region_code' => '440607',
                'region_name' => '三水区',
                'region_level' => 3,
                'parent_region_code' => '440600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'region_code' => '440608',
                'region_name' => '高明区',
                'region_level' => 3,
                'parent_region_code' => '440600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'region_code' => '440700',
                'region_name' => '江门市',
                'region_level' => 2,
                'parent_region_code' => '440000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'region_code' => '440701',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '440700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'region_code' => '440703',
                'region_name' => '蓬江区',
                'region_level' => 3,
                'parent_region_code' => '440700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'region_code' => '440704',
                'region_name' => '江海区',
                'region_level' => 3,
                'parent_region_code' => '440700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'region_code' => '440705',
                'region_name' => '新会区',
                'region_level' => 3,
                'parent_region_code' => '440700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'region_code' => '440781',
                'region_name' => '台山市',
                'region_level' => 3,
                'parent_region_code' => '440800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'region_code' => '440783',
                'region_name' => '开平市',
                'region_level' => 3,
                'parent_region_code' => '440800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'region_code' => '440784',
                'region_name' => '鹤山市',
                'region_level' => 3,
                'parent_region_code' => '440800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'region_code' => '440785',
                'region_name' => '恩平市',
                'region_level' => 3,
                'parent_region_code' => '440800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'region_code' => '440800',
                'region_name' => '湛江市',
                'region_level' => 2,
                'parent_region_code' => '440000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'region_code' => '440801',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '440800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'region_code' => '440802',
                'region_name' => '赤坎区',
                'region_level' => 3,
                'parent_region_code' => '440800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'region_code' => '440803',
                'region_name' => '霞山区',
                'region_level' => 3,
                'parent_region_code' => '440800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'region_code' => '440804',
                'region_name' => '坡头区',
                'region_level' => 3,
                'parent_region_code' => '440800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'region_code' => '440811',
                'region_name' => '麻章区',
                'region_level' => 3,
                'parent_region_code' => '440800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'region_code' => '440823',
                'region_name' => '遂溪县',
                'region_level' => 3,
                'parent_region_code' => '440800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'region_code' => '440825',
                'region_name' => '徐闻县',
                'region_level' => 3,
                'parent_region_code' => '440800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'region_code' => '440881',
                'region_name' => '廉江市',
                'region_level' => 3,
                'parent_region_code' => '440900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'region_code' => '440882',
                'region_name' => '雷州市',
                'region_level' => 3,
                'parent_region_code' => '440900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'region_code' => '440883',
                'region_name' => '吴川市',
                'region_level' => 3,
                'parent_region_code' => '440900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'region_code' => '440900',
                'region_name' => '茂名市',
                'region_level' => 2,
                'parent_region_code' => '440000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'region_code' => '440901',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '440900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'region_code' => '440902',
                'region_name' => '茂南区',
                'region_level' => 3,
                'parent_region_code' => '440900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'region_code' => '440903',
                'region_name' => '茂港区',
                'region_level' => 3,
                'parent_region_code' => '440900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'region_code' => '440923',
                'region_name' => '电白县',
                'region_level' => 3,
                'parent_region_code' => '440900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'region_code' => '440981',
                'region_name' => '高州市',
                'region_level' => 3,
                'parent_region_code' => '441000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'region_code' => '440982',
                'region_name' => '化州市',
                'region_level' => 3,
                'parent_region_code' => '441000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'region_code' => '440983',
                'region_name' => '信宜市',
                'region_level' => 3,
                'parent_region_code' => '441000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'region_code' => '441200',
                'region_name' => '肇庆市',
                'region_level' => 2,
                'parent_region_code' => '440000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'region_code' => '441201',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '441200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'region_code' => '441202',
                'region_name' => '端州区',
                'region_level' => 3,
                'parent_region_code' => '441200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('regions')->insert(array (
            0 => 
            array (
                'region_code' => '441203',
                'region_name' => '鼎湖区',
                'region_level' => 3,
                'parent_region_code' => '441200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'region_code' => '441223',
                'region_name' => '广宁县',
                'region_level' => 3,
                'parent_region_code' => '441200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'region_code' => '441224',
                'region_name' => '怀集县',
                'region_level' => 3,
                'parent_region_code' => '441200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'region_code' => '441225',
                'region_name' => '封开县',
                'region_level' => 3,
                'parent_region_code' => '441200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'region_code' => '441226',
                'region_name' => '德庆县',
                'region_level' => 3,
                'parent_region_code' => '441200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'region_code' => '441283',
                'region_name' => '高要市',
                'region_level' => 3,
                'parent_region_code' => '441300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'region_code' => '441284',
                'region_name' => '四会市',
                'region_level' => 3,
                'parent_region_code' => '441300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'region_code' => '441300',
                'region_name' => '惠州市',
                'region_level' => 2,
                'parent_region_code' => '440000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'region_code' => '441301',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '441300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'region_code' => '441302',
                'region_name' => '惠城区',
                'region_level' => 3,
                'parent_region_code' => '441300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'region_code' => '441303',
                'region_name' => '惠阳区',
                'region_level' => 3,
                'parent_region_code' => '441300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'region_code' => '441322',
                'region_name' => '博罗县',
                'region_level' => 3,
                'parent_region_code' => '441300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'region_code' => '441323',
                'region_name' => '惠东县',
                'region_level' => 3,
                'parent_region_code' => '441300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'region_code' => '441324',
                'region_name' => '龙门县',
                'region_level' => 3,
                'parent_region_code' => '441300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'region_code' => '441400',
                'region_name' => '梅州市',
                'region_level' => 2,
                'parent_region_code' => '440000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'region_code' => '441401',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '441400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'region_code' => '441402',
                'region_name' => '梅江区',
                'region_level' => 3,
                'parent_region_code' => '441400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'region_code' => '441421',
                'region_name' => '梅县',
                'region_level' => 3,
                'parent_region_code' => '441400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'region_code' => '441422',
                'region_name' => '大埔县',
                'region_level' => 3,
                'parent_region_code' => '441400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'region_code' => '441423',
                'region_name' => '丰顺县',
                'region_level' => 3,
                'parent_region_code' => '441400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'region_code' => '441424',
                'region_name' => '五华县',
                'region_level' => 3,
                'parent_region_code' => '441400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'region_code' => '441426',
                'region_name' => '平远县',
                'region_level' => 3,
                'parent_region_code' => '441400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'region_code' => '441427',
                'region_name' => '蕉岭县',
                'region_level' => 3,
                'parent_region_code' => '441400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'region_code' => '441481',
                'region_name' => '兴宁市',
                'region_level' => 3,
                'parent_region_code' => '441500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'region_code' => '441500',
                'region_name' => '汕尾市',
                'region_level' => 2,
                'parent_region_code' => '440000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'region_code' => '441501',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '441500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'region_code' => '441502',
                'region_name' => '城区',
                'region_level' => 3,
                'parent_region_code' => '441500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'region_code' => '441521',
                'region_name' => '海丰县',
                'region_level' => 3,
                'parent_region_code' => '441500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'region_code' => '441523',
                'region_name' => '陆河县',
                'region_level' => 3,
                'parent_region_code' => '441500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'region_code' => '441581',
                'region_name' => '陆丰市',
                'region_level' => 3,
                'parent_region_code' => '441600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'region_code' => '441600',
                'region_name' => '河源市',
                'region_level' => 2,
                'parent_region_code' => '440000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'region_code' => '441601',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '441600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'region_code' => '441602',
                'region_name' => '源城区',
                'region_level' => 3,
                'parent_region_code' => '441600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'region_code' => '441621',
                'region_name' => '紫金县',
                'region_level' => 3,
                'parent_region_code' => '441600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'region_code' => '441622',
                'region_name' => '龙川县',
                'region_level' => 3,
                'parent_region_code' => '441600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'region_code' => '441623',
                'region_name' => '连平县',
                'region_level' => 3,
                'parent_region_code' => '441600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'region_code' => '441624',
                'region_name' => '和平县',
                'region_level' => 3,
                'parent_region_code' => '441600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'region_code' => '441625',
                'region_name' => '东源县',
                'region_level' => 3,
                'parent_region_code' => '441600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'region_code' => '441700',
                'region_name' => '阳江市',
                'region_level' => 2,
                'parent_region_code' => '440000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'region_code' => '441701',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '441700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'region_code' => '441702',
                'region_name' => '江城区',
                'region_level' => 3,
                'parent_region_code' => '441700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'region_code' => '441721',
                'region_name' => '阳西县',
                'region_level' => 3,
                'parent_region_code' => '441700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'region_code' => '441723',
                'region_name' => '阳东县',
                'region_level' => 3,
                'parent_region_code' => '441700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'region_code' => '441781',
                'region_name' => '阳春市',
                'region_level' => 3,
                'parent_region_code' => '441800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'region_code' => '441800',
                'region_name' => '清远市',
                'region_level' => 2,
                'parent_region_code' => '440000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'region_code' => '441801',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '441800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'region_code' => '441802',
                'region_name' => '清城区',
                'region_level' => 3,
                'parent_region_code' => '441800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'region_code' => '441821',
                'region_name' => '佛冈县',
                'region_level' => 3,
                'parent_region_code' => '441800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'region_code' => '441823',
                'region_name' => '阳山县',
                'region_level' => 3,
                'parent_region_code' => '441800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'region_code' => '441825',
                'region_name' => '连山壮族瑶族自治县',
                'region_level' => 3,
                'parent_region_code' => '441800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'region_code' => '441826',
                'region_name' => '连南瑶族自治县',
                'region_level' => 3,
                'parent_region_code' => '441800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'region_code' => '441827',
                'region_name' => '清新县',
                'region_level' => 3,
                'parent_region_code' => '441800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'region_code' => '441881',
                'region_name' => '英德市',
                'region_level' => 3,
                'parent_region_code' => '441900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'region_code' => '441882',
                'region_name' => '连州市',
                'region_level' => 3,
                'parent_region_code' => '441900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'region_code' => '441900',
                'region_name' => '东莞市',
                'region_level' => 2,
                'parent_region_code' => '440000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'region_code' => '442000',
                'region_name' => '中山市',
                'region_level' => 2,
                'parent_region_code' => '440000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'region_code' => '445100',
                'region_name' => '潮州市',
                'region_level' => 2,
                'parent_region_code' => '450000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'region_code' => '445101',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '445100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'region_code' => '445102',
                'region_name' => '湘桥区',
                'region_level' => 3,
                'parent_region_code' => '445100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'region_code' => '445121',
                'region_name' => '潮安县',
                'region_level' => 3,
                'parent_region_code' => '445100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'region_code' => '445122',
                'region_name' => '饶平县',
                'region_level' => 3,
                'parent_region_code' => '445100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'region_code' => '445200',
                'region_name' => '揭阳市',
                'region_level' => 2,
                'parent_region_code' => '450000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'region_code' => '445201',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '445200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'region_code' => '445202',
                'region_name' => '榕城区',
                'region_level' => 3,
                'parent_region_code' => '445200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'region_code' => '445221',
                'region_name' => '揭东县',
                'region_level' => 3,
                'parent_region_code' => '445200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'region_code' => '445222',
                'region_name' => '揭西县',
                'region_level' => 3,
                'parent_region_code' => '445200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'region_code' => '445224',
                'region_name' => '惠来县',
                'region_level' => 3,
                'parent_region_code' => '445200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'region_code' => '445281',
                'region_name' => '普宁市',
                'region_level' => 3,
                'parent_region_code' => '445300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'region_code' => '445300',
                'region_name' => '云浮市',
                'region_level' => 2,
                'parent_region_code' => '450000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'region_code' => '445301',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '445300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'region_code' => '445302',
                'region_name' => '云城区',
                'region_level' => 3,
                'parent_region_code' => '445300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'region_code' => '445321',
                'region_name' => '新兴县',
                'region_level' => 3,
                'parent_region_code' => '445300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'region_code' => '445322',
                'region_name' => '郁南县',
                'region_level' => 3,
                'parent_region_code' => '445300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'region_code' => '445323',
                'region_name' => '云安县',
                'region_level' => 3,
                'parent_region_code' => '445300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'region_code' => '445381',
                'region_name' => '罗定市',
                'region_level' => 3,
                'parent_region_code' => '445400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'region_code' => '450000',
                'region_name' => '广西壮族自治区',
                'region_level' => 1,
                'parent_region_code' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'region_code' => '450100',
                'region_name' => '南宁市',
                'region_level' => 2,
                'parent_region_code' => '450000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'region_code' => '450101',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '450100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'region_code' => '450102',
                'region_name' => '兴宁区',
                'region_level' => 3,
                'parent_region_code' => '450100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'region_code' => '450103',
                'region_name' => '青秀区',
                'region_level' => 3,
                'parent_region_code' => '450100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'region_code' => '450105',
                'region_name' => '江南区',
                'region_level' => 3,
                'parent_region_code' => '450100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'region_code' => '450107',
                'region_name' => '西乡塘区',
                'region_level' => 3,
                'parent_region_code' => '450100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'region_code' => '450108',
                'region_name' => '良庆区',
                'region_level' => 3,
                'parent_region_code' => '450100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'region_code' => '450109',
                'region_name' => '邕宁区',
                'region_level' => 3,
                'parent_region_code' => '450100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'region_code' => '450122',
                'region_name' => '武鸣县',
                'region_level' => 3,
                'parent_region_code' => '450100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'region_code' => '450123',
                'region_name' => '隆安县',
                'region_level' => 3,
                'parent_region_code' => '450100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'region_code' => '450124',
                'region_name' => '马山县',
                'region_level' => 3,
                'parent_region_code' => '450100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'region_code' => '450125',
                'region_name' => '上林县',
                'region_level' => 3,
                'parent_region_code' => '450100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'region_code' => '450126',
                'region_name' => '宾阳县',
                'region_level' => 3,
                'parent_region_code' => '450100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'region_code' => '450127',
                'region_name' => '横县',
                'region_level' => 3,
                'parent_region_code' => '450100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'region_code' => '450200',
                'region_name' => '柳州市',
                'region_level' => 2,
                'parent_region_code' => '450000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'region_code' => '450201',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '450200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'region_code' => '450202',
                'region_name' => '城中区',
                'region_level' => 3,
                'parent_region_code' => '450200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'region_code' => '450203',
                'region_name' => '鱼峰区',
                'region_level' => 3,
                'parent_region_code' => '450200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'region_code' => '450204',
                'region_name' => '柳南区',
                'region_level' => 3,
                'parent_region_code' => '450200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'region_code' => '450205',
                'region_name' => '柳北区',
                'region_level' => 3,
                'parent_region_code' => '450200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'region_code' => '450221',
                'region_name' => '柳江县',
                'region_level' => 3,
                'parent_region_code' => '450200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'region_code' => '450222',
                'region_name' => '柳城县',
                'region_level' => 3,
                'parent_region_code' => '450200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'region_code' => '450223',
                'region_name' => '鹿寨县',
                'region_level' => 3,
                'parent_region_code' => '450200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'region_code' => '450224',
                'region_name' => '融安县',
                'region_level' => 3,
                'parent_region_code' => '450200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'region_code' => '450225',
                'region_name' => '融水苗族自治县',
                'region_level' => 3,
                'parent_region_code' => '450200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'region_code' => '450226',
                'region_name' => '三江侗族自治县',
                'region_level' => 3,
                'parent_region_code' => '450200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'region_code' => '450300',
                'region_name' => '桂林市',
                'region_level' => 2,
                'parent_region_code' => '450000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'region_code' => '450301',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '450300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'region_code' => '450302',
                'region_name' => '秀峰区',
                'region_level' => 3,
                'parent_region_code' => '450300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'region_code' => '450303',
                'region_name' => '叠彩区',
                'region_level' => 3,
                'parent_region_code' => '450300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'region_code' => '450304',
                'region_name' => '象山区',
                'region_level' => 3,
                'parent_region_code' => '450300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'region_code' => '450305',
                'region_name' => '七星区',
                'region_level' => 3,
                'parent_region_code' => '450300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'region_code' => '450311',
                'region_name' => '雁山区',
                'region_level' => 3,
                'parent_region_code' => '450300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'region_code' => '450321',
                'region_name' => '阳朔县',
                'region_level' => 3,
                'parent_region_code' => '450300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'region_code' => '450322',
                'region_name' => '临桂县',
                'region_level' => 3,
                'parent_region_code' => '450300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'region_code' => '450323',
                'region_name' => '灵川县',
                'region_level' => 3,
                'parent_region_code' => '450300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'region_code' => '450324',
                'region_name' => '全州县',
                'region_level' => 3,
                'parent_region_code' => '450300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'region_code' => '450325',
                'region_name' => '兴安县',
                'region_level' => 3,
                'parent_region_code' => '450300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'region_code' => '450326',
                'region_name' => '永福县',
                'region_level' => 3,
                'parent_region_code' => '450300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'region_code' => '450327',
                'region_name' => '灌阳县',
                'region_level' => 3,
                'parent_region_code' => '450300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'region_code' => '450328',
                'region_name' => '龙胜各族自治县',
                'region_level' => 3,
                'parent_region_code' => '450300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'region_code' => '450329',
                'region_name' => '资源县',
                'region_level' => 3,
                'parent_region_code' => '450300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'region_code' => '450330',
                'region_name' => '平乐县',
                'region_level' => 3,
                'parent_region_code' => '450300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'region_code' => '450331',
                'region_name' => '荔浦县',
                'region_level' => 3,
                'parent_region_code' => '450300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'region_code' => '450332',
                'region_name' => '恭城瑶族自治县',
                'region_level' => 3,
                'parent_region_code' => '450300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'region_code' => '450400',
                'region_name' => '梧州市',
                'region_level' => 2,
                'parent_region_code' => '450000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'region_code' => '450401',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '450400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'region_code' => '450403',
                'region_name' => '万秀区',
                'region_level' => 3,
                'parent_region_code' => '450400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'region_code' => '450404',
                'region_name' => '蝶山区',
                'region_level' => 3,
                'parent_region_code' => '450400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'region_code' => '450405',
                'region_name' => '长洲区',
                'region_level' => 3,
                'parent_region_code' => '450400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'region_code' => '450421',
                'region_name' => '苍梧县',
                'region_level' => 3,
                'parent_region_code' => '450400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'region_code' => '450422',
                'region_name' => '藤县',
                'region_level' => 3,
                'parent_region_code' => '450400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'region_code' => '450423',
                'region_name' => '蒙山县',
                'region_level' => 3,
                'parent_region_code' => '450400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'region_code' => '450481',
                'region_name' => '岑溪市',
                'region_level' => 3,
                'parent_region_code' => '450500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'region_code' => '450500',
                'region_name' => '北海市',
                'region_level' => 2,
                'parent_region_code' => '450000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'region_code' => '450501',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '450500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'region_code' => '450502',
                'region_name' => '海城区',
                'region_level' => 3,
                'parent_region_code' => '450500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'region_code' => '450503',
                'region_name' => '银海区',
                'region_level' => 3,
                'parent_region_code' => '450500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'region_code' => '450512',
                'region_name' => '铁山港区',
                'region_level' => 3,
                'parent_region_code' => '450500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'region_code' => '450521',
                'region_name' => '合浦县',
                'region_level' => 3,
                'parent_region_code' => '450500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'region_code' => '450600',
                'region_name' => '防城港市',
                'region_level' => 2,
                'parent_region_code' => '450000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'region_code' => '450601',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '450600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'region_code' => '450602',
                'region_name' => '港口区',
                'region_level' => 3,
                'parent_region_code' => '450600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'region_code' => '450603',
                'region_name' => '防城区',
                'region_level' => 3,
                'parent_region_code' => '450600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'region_code' => '450621',
                'region_name' => '上思县',
                'region_level' => 3,
                'parent_region_code' => '450600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'region_code' => '450681',
                'region_name' => '东兴市',
                'region_level' => 3,
                'parent_region_code' => '450700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'region_code' => '450700',
                'region_name' => '钦州市',
                'region_level' => 2,
                'parent_region_code' => '450000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'region_code' => '450701',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '450700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'region_code' => '450702',
                'region_name' => '钦南区',
                'region_level' => 3,
                'parent_region_code' => '450700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'region_code' => '450703',
                'region_name' => '钦北区',
                'region_level' => 3,
                'parent_region_code' => '450700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'region_code' => '450721',
                'region_name' => '灵山县',
                'region_level' => 3,
                'parent_region_code' => '450700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'region_code' => '450722',
                'region_name' => '浦北县',
                'region_level' => 3,
                'parent_region_code' => '450700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'region_code' => '450800',
                'region_name' => '贵港市',
                'region_level' => 2,
                'parent_region_code' => '450000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'region_code' => '450801',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '450800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'region_code' => '450802',
                'region_name' => '港北区',
                'region_level' => 3,
                'parent_region_code' => '450800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'region_code' => '450803',
                'region_name' => '港南区',
                'region_level' => 3,
                'parent_region_code' => '450800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'region_code' => '450804',
                'region_name' => '覃塘区',
                'region_level' => 3,
                'parent_region_code' => '450800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'region_code' => '450821',
                'region_name' => '平南县',
                'region_level' => 3,
                'parent_region_code' => '450800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'region_code' => '450881',
                'region_name' => '桂平市',
                'region_level' => 3,
                'parent_region_code' => '450900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'region_code' => '450900',
                'region_name' => '玉林市',
                'region_level' => 2,
                'parent_region_code' => '450000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'region_code' => '450901',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '450900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'region_code' => '450902',
                'region_name' => '玉州区',
                'region_level' => 3,
                'parent_region_code' => '450900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'region_code' => '450921',
                'region_name' => '容县',
                'region_level' => 3,
                'parent_region_code' => '450900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'region_code' => '450922',
                'region_name' => '陆川县',
                'region_level' => 3,
                'parent_region_code' => '450900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'region_code' => '450923',
                'region_name' => '博白县',
                'region_level' => 3,
                'parent_region_code' => '450900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'region_code' => '450924',
                'region_name' => '兴业县',
                'region_level' => 3,
                'parent_region_code' => '450900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'region_code' => '450981',
                'region_name' => '北流市',
                'region_level' => 3,
                'parent_region_code' => '451000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'region_code' => '451000',
                'region_name' => '百色市',
                'region_level' => 2,
                'parent_region_code' => '450000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'region_code' => '451001',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '451000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'region_code' => '451002',
                'region_name' => '右江区',
                'region_level' => 3,
                'parent_region_code' => '451000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'region_code' => '451021',
                'region_name' => '田阳县',
                'region_level' => 3,
                'parent_region_code' => '451000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'region_code' => '451022',
                'region_name' => '田东县',
                'region_level' => 3,
                'parent_region_code' => '451000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'region_code' => '451023',
                'region_name' => '平果县',
                'region_level' => 3,
                'parent_region_code' => '451000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'region_code' => '451024',
                'region_name' => '德保县',
                'region_level' => 3,
                'parent_region_code' => '451000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'region_code' => '451025',
                'region_name' => '靖西县',
                'region_level' => 3,
                'parent_region_code' => '451000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'region_code' => '451026',
                'region_name' => '那坡县',
                'region_level' => 3,
                'parent_region_code' => '451000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'region_code' => '451027',
                'region_name' => '凌云县',
                'region_level' => 3,
                'parent_region_code' => '451000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'region_code' => '451028',
                'region_name' => '乐业县',
                'region_level' => 3,
                'parent_region_code' => '451000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'region_code' => '451029',
                'region_name' => '田林县',
                'region_level' => 3,
                'parent_region_code' => '451000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'region_code' => '451030',
                'region_name' => '西林县',
                'region_level' => 3,
                'parent_region_code' => '451000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'region_code' => '451031',
                'region_name' => '隆林各族自治县',
                'region_level' => 3,
                'parent_region_code' => '451000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'region_code' => '451100',
                'region_name' => '贺州市',
                'region_level' => 2,
                'parent_region_code' => '450000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'region_code' => '451101',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '451100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'region_code' => '451102',
                'region_name' => '八步区',
                'region_level' => 3,
                'parent_region_code' => '451100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'region_code' => '451121',
                'region_name' => '昭平县',
                'region_level' => 3,
                'parent_region_code' => '451100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'region_code' => '451122',
                'region_name' => '钟山县',
                'region_level' => 3,
                'parent_region_code' => '451100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'region_code' => '451123',
                'region_name' => '富川瑶族自治县',
                'region_level' => 3,
                'parent_region_code' => '451100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'region_code' => '451200',
                'region_name' => '河池市',
                'region_level' => 2,
                'parent_region_code' => '450000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'region_code' => '451201',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '451200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'region_code' => '451202',
                'region_name' => '金城江区',
                'region_level' => 3,
                'parent_region_code' => '451200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'region_code' => '451221',
                'region_name' => '南丹县',
                'region_level' => 3,
                'parent_region_code' => '451200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'region_code' => '451222',
                'region_name' => '天峨县',
                'region_level' => 3,
                'parent_region_code' => '451200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'region_code' => '451223',
                'region_name' => '凤山县',
                'region_level' => 3,
                'parent_region_code' => '451200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'region_code' => '451224',
                'region_name' => '东兰县',
                'region_level' => 3,
                'parent_region_code' => '451200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'region_code' => '451225',
                'region_name' => '罗城仫佬族自治县',
                'region_level' => 3,
                'parent_region_code' => '451200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'region_code' => '451226',
                'region_name' => '环江毛南族自治县',
                'region_level' => 3,
                'parent_region_code' => '451200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'region_code' => '451227',
                'region_name' => '巴马瑶族自治县',
                'region_level' => 3,
                'parent_region_code' => '451200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'region_code' => '451228',
                'region_name' => '都安瑶族自治县',
                'region_level' => 3,
                'parent_region_code' => '451200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'region_code' => '451229',
                'region_name' => '大化瑶族自治县',
                'region_level' => 3,
                'parent_region_code' => '451200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'region_code' => '451281',
                'region_name' => '宜州市',
                'region_level' => 3,
                'parent_region_code' => '451300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'region_code' => '451300',
                'region_name' => '来宾市',
                'region_level' => 2,
                'parent_region_code' => '450000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'region_code' => '451301',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '451300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'region_code' => '451302',
                'region_name' => '兴宾区',
                'region_level' => 3,
                'parent_region_code' => '451300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'region_code' => '451321',
                'region_name' => '忻城县',
                'region_level' => 3,
                'parent_region_code' => '451300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'region_code' => '451322',
                'region_name' => '象州县',
                'region_level' => 3,
                'parent_region_code' => '451300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'region_code' => '451323',
                'region_name' => '武宣县',
                'region_level' => 3,
                'parent_region_code' => '451300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'region_code' => '451324',
                'region_name' => '金秀瑶族自治县',
                'region_level' => 3,
                'parent_region_code' => '451300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'region_code' => '451381',
                'region_name' => '合山市',
                'region_level' => 3,
                'parent_region_code' => '451400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'region_code' => '451400',
                'region_name' => '崇左市',
                'region_level' => 2,
                'parent_region_code' => '450000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'region_code' => '451401',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '451400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'region_code' => '451402',
                'region_name' => '江洲区',
                'region_level' => 3,
                'parent_region_code' => '451400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'region_code' => '451421',
                'region_name' => '扶绥县',
                'region_level' => 3,
                'parent_region_code' => '451400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'region_code' => '451422',
                'region_name' => '宁明县',
                'region_level' => 3,
                'parent_region_code' => '451400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'region_code' => '451423',
                'region_name' => '龙州县',
                'region_level' => 3,
                'parent_region_code' => '451400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'region_code' => '451424',
                'region_name' => '大新县',
                'region_level' => 3,
                'parent_region_code' => '451400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'region_code' => '451425',
                'region_name' => '天等县',
                'region_level' => 3,
                'parent_region_code' => '451400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'region_code' => '451481',
                'region_name' => '凭祥市',
                'region_level' => 3,
                'parent_region_code' => '451500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'region_code' => '460000',
                'region_name' => '海南省',
                'region_level' => 1,
                'parent_region_code' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'region_code' => '460100',
                'region_name' => '海口市',
                'region_level' => 2,
                'parent_region_code' => '460000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'region_code' => '460101',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '460100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'region_code' => '460105',
                'region_name' => '秀英区',
                'region_level' => 3,
                'parent_region_code' => '460100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'region_code' => '460106',
                'region_name' => '龙华区',
                'region_level' => 3,
                'parent_region_code' => '460100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'region_code' => '460107',
                'region_name' => '琼山区',
                'region_level' => 3,
                'parent_region_code' => '460100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'region_code' => '460108',
                'region_name' => '美兰区',
                'region_level' => 3,
                'parent_region_code' => '460100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'region_code' => '460200',
                'region_name' => '三亚市',
                'region_level' => 2,
                'parent_region_code' => '460000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'region_code' => '460201',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '460200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'region_code' => '460300',
                'region_name' => '三沙市',
                'region_level' => 2,
                'parent_region_code' => '460000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'region_code' => '460321',
                'region_name' => '西沙群岛',
                'region_level' => 3,
                'parent_region_code' => '460300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'region_code' => '460322',
                'region_name' => '南沙群岛',
                'region_level' => 3,
                'parent_region_code' => '460300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'region_code' => '460323',
                'region_name' => '中沙群岛的岛礁及其海域',
                'region_level' => 3,
                'parent_region_code' => '460300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'region_code' => '469000',
                'region_name' => '省直辖县级行政区划',
                'region_level' => 2,
                'parent_region_code' => '470000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'region_code' => '469001',
                'region_name' => '五指山市',
                'region_level' => 3,
                'parent_region_code' => '469000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'region_code' => '469002',
                'region_name' => '琼海市',
                'region_level' => 3,
                'parent_region_code' => '469000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'region_code' => '469003',
                'region_name' => '儋州市',
                'region_level' => 3,
                'parent_region_code' => '469000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'region_code' => '469005',
                'region_name' => '文昌市',
                'region_level' => 3,
                'parent_region_code' => '469000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'region_code' => '469006',
                'region_name' => '万宁市',
                'region_level' => 3,
                'parent_region_code' => '469000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'region_code' => '469007',
                'region_name' => '东方市',
                'region_level' => 3,
                'parent_region_code' => '469000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'region_code' => '469021',
                'region_name' => '定安县',
                'region_level' => 3,
                'parent_region_code' => '469000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'region_code' => '469022',
                'region_name' => '屯昌县',
                'region_level' => 3,
                'parent_region_code' => '469000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'region_code' => '469023',
                'region_name' => '澄迈县',
                'region_level' => 3,
                'parent_region_code' => '469000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'region_code' => '469024',
                'region_name' => '临高县',
                'region_level' => 3,
                'parent_region_code' => '469000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'region_code' => '469025',
                'region_name' => '白沙黎族自治县',
                'region_level' => 3,
                'parent_region_code' => '469000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'region_code' => '469026',
                'region_name' => '昌江黎族自治县',
                'region_level' => 3,
                'parent_region_code' => '469000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'region_code' => '469027',
                'region_name' => '乐东黎族自治县',
                'region_level' => 3,
                'parent_region_code' => '469000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'region_code' => '469028',
                'region_name' => '陵水黎族自治县',
                'region_level' => 3,
                'parent_region_code' => '469000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'region_code' => '469029',
                'region_name' => '保亭黎族苗族自治县',
                'region_level' => 3,
                'parent_region_code' => '469000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'region_code' => '469030',
                'region_name' => '琼中黎族苗族自治县',
                'region_level' => 3,
                'parent_region_code' => '469000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'region_code' => '500000',
                'region_name' => '重庆市',
                'region_level' => 1,
                'parent_region_code' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'region_code' => '500100',
                'region_name' => '市辖区',
                'region_level' => 2,
                'parent_region_code' => '500000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'region_code' => '500101',
                'region_name' => '万州区',
                'region_level' => 3,
                'parent_region_code' => '500100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'region_code' => '500102',
                'region_name' => '涪陵区',
                'region_level' => 3,
                'parent_region_code' => '500100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'region_code' => '500103',
                'region_name' => '渝中区',
                'region_level' => 3,
                'parent_region_code' => '500100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'region_code' => '500104',
                'region_name' => '大渡口区',
                'region_level' => 3,
                'parent_region_code' => '500100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'region_code' => '500105',
                'region_name' => '江北区',
                'region_level' => 3,
                'parent_region_code' => '500100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'region_code' => '500106',
                'region_name' => '沙坪坝区',
                'region_level' => 3,
                'parent_region_code' => '500100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'region_code' => '500107',
                'region_name' => '九龙坡区',
                'region_level' => 3,
                'parent_region_code' => '500100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'region_code' => '500108',
                'region_name' => '南岸区',
                'region_level' => 3,
                'parent_region_code' => '500100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'region_code' => '500109',
                'region_name' => '北碚区',
                'region_level' => 3,
                'parent_region_code' => '500100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'region_code' => '500110',
                'region_name' => '綦江区',
                'region_level' => 3,
                'parent_region_code' => '500100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'region_code' => '500111',
                'region_name' => '大足区',
                'region_level' => 3,
                'parent_region_code' => '500100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'region_code' => '500112',
                'region_name' => '渝北区',
                'region_level' => 3,
                'parent_region_code' => '500100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'region_code' => '500113',
                'region_name' => '巴南区',
                'region_level' => 3,
                'parent_region_code' => '500100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'region_code' => '500114',
                'region_name' => '黔江区',
                'region_level' => 3,
                'parent_region_code' => '500100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'region_code' => '500115',
                'region_name' => '长寿区',
                'region_level' => 3,
                'parent_region_code' => '500100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'region_code' => '500116',
                'region_name' => '江津区',
                'region_level' => 3,
                'parent_region_code' => '500100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'region_code' => '500117',
                'region_name' => '合川区',
                'region_level' => 3,
                'parent_region_code' => '500100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'region_code' => '500118',
                'region_name' => '永川区',
                'region_level' => 3,
                'parent_region_code' => '500100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'region_code' => '500119',
                'region_name' => '南川区',
                'region_level' => 3,
                'parent_region_code' => '500100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'region_code' => '500200',
                'region_name' => '县',
                'region_level' => 2,
                'parent_region_code' => '500000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'region_code' => '500223',
                'region_name' => '潼南县',
                'region_level' => 3,
                'parent_region_code' => '500200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'region_code' => '500224',
                'region_name' => '铜梁县',
                'region_level' => 3,
                'parent_region_code' => '500200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'region_code' => '500226',
                'region_name' => '荣昌县',
                'region_level' => 3,
                'parent_region_code' => '500200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'region_code' => '500227',
                'region_name' => '璧山县',
                'region_level' => 3,
                'parent_region_code' => '500200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'region_code' => '500228',
                'region_name' => '梁平县',
                'region_level' => 3,
                'parent_region_code' => '500200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'region_code' => '500229',
                'region_name' => '城口县',
                'region_level' => 3,
                'parent_region_code' => '500200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'region_code' => '500230',
                'region_name' => '丰都县',
                'region_level' => 3,
                'parent_region_code' => '500200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'region_code' => '500231',
                'region_name' => '垫江县',
                'region_level' => 3,
                'parent_region_code' => '500200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'region_code' => '500232',
                'region_name' => '武隆县',
                'region_level' => 3,
                'parent_region_code' => '500200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'region_code' => '500233',
                'region_name' => '忠县',
                'region_level' => 3,
                'parent_region_code' => '500200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'region_code' => '500234',
                'region_name' => '开县',
                'region_level' => 3,
                'parent_region_code' => '500200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'region_code' => '500235',
                'region_name' => '云阳县',
                'region_level' => 3,
                'parent_region_code' => '500200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'region_code' => '500236',
                'region_name' => '奉节县',
                'region_level' => 3,
                'parent_region_code' => '500200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'region_code' => '500237',
                'region_name' => '巫山县',
                'region_level' => 3,
                'parent_region_code' => '500200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'region_code' => '500238',
                'region_name' => '巫溪县',
                'region_level' => 3,
                'parent_region_code' => '500200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'region_code' => '500240',
                'region_name' => '石柱土家族自治县',
                'region_level' => 3,
                'parent_region_code' => '500200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'region_code' => '500241',
                'region_name' => '秀山土家族苗族自治县',
                'region_level' => 3,
                'parent_region_code' => '500200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'region_code' => '500242',
                'region_name' => '酉阳土家族苗族自治县',
                'region_level' => 3,
                'parent_region_code' => '500200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'region_code' => '500243',
                'region_name' => '彭水苗族土家族自治县',
                'region_level' => 3,
                'parent_region_code' => '500200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'region_code' => '510000',
                'region_name' => '四川省',
                'region_level' => 1,
                'parent_region_code' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'region_code' => '510100',
                'region_name' => '成都市',
                'region_level' => 2,
                'parent_region_code' => '510000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'region_code' => '510101',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '510100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'region_code' => '510104',
                'region_name' => '锦江区',
                'region_level' => 3,
                'parent_region_code' => '510100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'region_code' => '510105',
                'region_name' => '青羊区',
                'region_level' => 3,
                'parent_region_code' => '510100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'region_code' => '510106',
                'region_name' => '金牛区',
                'region_level' => 3,
                'parent_region_code' => '510100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'region_code' => '510107',
                'region_name' => '武侯区',
                'region_level' => 3,
                'parent_region_code' => '510100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'region_code' => '510108',
                'region_name' => '成华区',
                'region_level' => 3,
                'parent_region_code' => '510100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'region_code' => '510112',
                'region_name' => '龙泉驿区',
                'region_level' => 3,
                'parent_region_code' => '510100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'region_code' => '510113',
                'region_name' => '青白江区',
                'region_level' => 3,
                'parent_region_code' => '510100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'region_code' => '510114',
                'region_name' => '新都区',
                'region_level' => 3,
                'parent_region_code' => '510100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'region_code' => '510115',
                'region_name' => '温江区',
                'region_level' => 3,
                'parent_region_code' => '510100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'region_code' => '510121',
                'region_name' => '金堂县',
                'region_level' => 3,
                'parent_region_code' => '510100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'region_code' => '510122',
                'region_name' => '双流县',
                'region_level' => 3,
                'parent_region_code' => '510100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'region_code' => '510124',
                'region_name' => '郫县',
                'region_level' => 3,
                'parent_region_code' => '510100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'region_code' => '510129',
                'region_name' => '大邑县',
                'region_level' => 3,
                'parent_region_code' => '510100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'region_code' => '510131',
                'region_name' => '蒲江县',
                'region_level' => 3,
                'parent_region_code' => '510100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'region_code' => '510132',
                'region_name' => '新津县',
                'region_level' => 3,
                'parent_region_code' => '510100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'region_code' => '510181',
                'region_name' => '都江堰市',
                'region_level' => 3,
                'parent_region_code' => '510200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'region_code' => '510182',
                'region_name' => '彭州市',
                'region_level' => 3,
                'parent_region_code' => '510200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'region_code' => '510183',
                'region_name' => '邛崃市',
                'region_level' => 3,
                'parent_region_code' => '510200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'region_code' => '510184',
                'region_name' => '崇州市',
                'region_level' => 3,
                'parent_region_code' => '510200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'region_code' => '510300',
                'region_name' => '自贡市',
                'region_level' => 2,
                'parent_region_code' => '510000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'region_code' => '510301',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '510300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'region_code' => '510302',
                'region_name' => '自流井区',
                'region_level' => 3,
                'parent_region_code' => '510300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'region_code' => '510303',
                'region_name' => '贡井区',
                'region_level' => 3,
                'parent_region_code' => '510300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'region_code' => '510304',
                'region_name' => '大安区',
                'region_level' => 3,
                'parent_region_code' => '510300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'region_code' => '510311',
                'region_name' => '沿滩区',
                'region_level' => 3,
                'parent_region_code' => '510300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'region_code' => '510321',
                'region_name' => '荣县',
                'region_level' => 3,
                'parent_region_code' => '510300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'region_code' => '510322',
                'region_name' => '富顺县',
                'region_level' => 3,
                'parent_region_code' => '510300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'region_code' => '510400',
                'region_name' => '攀枝花市',
                'region_level' => 2,
                'parent_region_code' => '510000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'region_code' => '510401',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '510400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'region_code' => '510402',
                'region_name' => '东区',
                'region_level' => 3,
                'parent_region_code' => '510400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'region_code' => '510403',
                'region_name' => '西区',
                'region_level' => 3,
                'parent_region_code' => '510400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'region_code' => '510411',
                'region_name' => '仁和区',
                'region_level' => 3,
                'parent_region_code' => '510400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'region_code' => '510421',
                'region_name' => '米易县',
                'region_level' => 3,
                'parent_region_code' => '510400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'region_code' => '510422',
                'region_name' => '盐边县',
                'region_level' => 3,
                'parent_region_code' => '510400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'region_code' => '510500',
                'region_name' => '泸州市',
                'region_level' => 2,
                'parent_region_code' => '510000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'region_code' => '510501',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '510500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'region_code' => '510502',
                'region_name' => '江阳区',
                'region_level' => 3,
                'parent_region_code' => '510500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'region_code' => '510503',
                'region_name' => '纳溪区',
                'region_level' => 3,
                'parent_region_code' => '510500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'region_code' => '510504',
                'region_name' => '龙马潭区',
                'region_level' => 3,
                'parent_region_code' => '510500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'region_code' => '510521',
                'region_name' => '泸县',
                'region_level' => 3,
                'parent_region_code' => '510500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'region_code' => '510522',
                'region_name' => '合江县',
                'region_level' => 3,
                'parent_region_code' => '510500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'region_code' => '510524',
                'region_name' => '叙永县',
                'region_level' => 3,
                'parent_region_code' => '510500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'region_code' => '510525',
                'region_name' => '古蔺县',
                'region_level' => 3,
                'parent_region_code' => '510500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'region_code' => '510600',
                'region_name' => '德阳市',
                'region_level' => 2,
                'parent_region_code' => '510000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'region_code' => '510601',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '510600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'region_code' => '510603',
                'region_name' => '旌阳区',
                'region_level' => 3,
                'parent_region_code' => '510600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'region_code' => '510623',
                'region_name' => '中江县',
                'region_level' => 3,
                'parent_region_code' => '510600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'region_code' => '510626',
                'region_name' => '罗江县',
                'region_level' => 3,
                'parent_region_code' => '510600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'region_code' => '510681',
                'region_name' => '广汉市',
                'region_level' => 3,
                'parent_region_code' => '510700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'region_code' => '510682',
                'region_name' => '什邡市',
                'region_level' => 3,
                'parent_region_code' => '510700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'region_code' => '510683',
                'region_name' => '绵竹市',
                'region_level' => 3,
                'parent_region_code' => '510700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'region_code' => '510700',
                'region_name' => '绵阳市',
                'region_level' => 2,
                'parent_region_code' => '510000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'region_code' => '510701',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '510700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'region_code' => '510703',
                'region_name' => '涪城区',
                'region_level' => 3,
                'parent_region_code' => '510700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'region_code' => '510704',
                'region_name' => '游仙区',
                'region_level' => 3,
                'parent_region_code' => '510700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'region_code' => '510722',
                'region_name' => '三台县',
                'region_level' => 3,
                'parent_region_code' => '510700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'region_code' => '510723',
                'region_name' => '盐亭县',
                'region_level' => 3,
                'parent_region_code' => '510700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'region_code' => '510724',
                'region_name' => '安县',
                'region_level' => 3,
                'parent_region_code' => '510700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'region_code' => '510725',
                'region_name' => '梓潼县',
                'region_level' => 3,
                'parent_region_code' => '510700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'region_code' => '510726',
                'region_name' => '北川羌族自治县',
                'region_level' => 3,
                'parent_region_code' => '510700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'region_code' => '510727',
                'region_name' => '平武县',
                'region_level' => 3,
                'parent_region_code' => '510700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'region_code' => '510781',
                'region_name' => '江油市',
                'region_level' => 3,
                'parent_region_code' => '510800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'region_code' => '510800',
                'region_name' => '广元市',
                'region_level' => 2,
                'parent_region_code' => '510000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'region_code' => '510801',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '510800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'region_code' => '510802',
                'region_name' => '利州区',
                'region_level' => 3,
                'parent_region_code' => '510800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'region_code' => '510811',
                'region_name' => '元坝区',
                'region_level' => 3,
                'parent_region_code' => '510800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'region_code' => '510812',
                'region_name' => '朝天区',
                'region_level' => 3,
                'parent_region_code' => '510800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'region_code' => '510821',
                'region_name' => '旺苍县',
                'region_level' => 3,
                'parent_region_code' => '510800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'region_code' => '510822',
                'region_name' => '青川县',
                'region_level' => 3,
                'parent_region_code' => '510800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'region_code' => '510823',
                'region_name' => '剑阁县',
                'region_level' => 3,
                'parent_region_code' => '510800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'region_code' => '510824',
                'region_name' => '苍溪县',
                'region_level' => 3,
                'parent_region_code' => '510800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'region_code' => '510900',
                'region_name' => '遂宁市',
                'region_level' => 2,
                'parent_region_code' => '510000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'region_code' => '510901',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '510900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'region_code' => '510903',
                'region_name' => '船山区',
                'region_level' => 3,
                'parent_region_code' => '510900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'region_code' => '510904',
                'region_name' => '安居区',
                'region_level' => 3,
                'parent_region_code' => '510900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'region_code' => '510921',
                'region_name' => '蓬溪县',
                'region_level' => 3,
                'parent_region_code' => '510900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'region_code' => '510922',
                'region_name' => '射洪县',
                'region_level' => 3,
                'parent_region_code' => '510900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'region_code' => '510923',
                'region_name' => '大英县',
                'region_level' => 3,
                'parent_region_code' => '510900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'region_code' => '511000',
                'region_name' => '内江市',
                'region_level' => 2,
                'parent_region_code' => '510000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'region_code' => '511001',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '511000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'region_code' => '511002',
                'region_name' => '市中区',
                'region_level' => 3,
                'parent_region_code' => '511000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'region_code' => '511011',
                'region_name' => '东兴区',
                'region_level' => 3,
                'parent_region_code' => '511000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'region_code' => '511024',
                'region_name' => '威远县',
                'region_level' => 3,
                'parent_region_code' => '511000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'region_code' => '511025',
                'region_name' => '资中县',
                'region_level' => 3,
                'parent_region_code' => '511000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'region_code' => '511028',
                'region_name' => '隆昌县',
                'region_level' => 3,
                'parent_region_code' => '511000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'region_code' => '511100',
                'region_name' => '乐山市',
                'region_level' => 2,
                'parent_region_code' => '510000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'region_code' => '511101',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '511100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'region_code' => '511102',
                'region_name' => '市中区',
                'region_level' => 3,
                'parent_region_code' => '511100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'region_code' => '511111',
                'region_name' => '沙湾区',
                'region_level' => 3,
                'parent_region_code' => '511100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'region_code' => '511112',
                'region_name' => '五通桥区',
                'region_level' => 3,
                'parent_region_code' => '511100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'region_code' => '511113',
                'region_name' => '金口河区',
                'region_level' => 3,
                'parent_region_code' => '511100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'region_code' => '511123',
                'region_name' => '犍为县',
                'region_level' => 3,
                'parent_region_code' => '511100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'region_code' => '511124',
                'region_name' => '井研县',
                'region_level' => 3,
                'parent_region_code' => '511100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'region_code' => '511126',
                'region_name' => '夹江县',
                'region_level' => 3,
                'parent_region_code' => '511100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'region_code' => '511129',
                'region_name' => '沐川县',
                'region_level' => 3,
                'parent_region_code' => '511100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'region_code' => '511132',
                'region_name' => '峨边彝族自治县',
                'region_level' => 3,
                'parent_region_code' => '511100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'region_code' => '511133',
                'region_name' => '马边彝族自治县',
                'region_level' => 3,
                'parent_region_code' => '511100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'region_code' => '511181',
                'region_name' => '峨眉山市',
                'region_level' => 3,
                'parent_region_code' => '511200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'region_code' => '511300',
                'region_name' => '南充市',
                'region_level' => 2,
                'parent_region_code' => '510000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'region_code' => '511301',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '511300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'region_code' => '511302',
                'region_name' => '顺庆区',
                'region_level' => 3,
                'parent_region_code' => '511300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'region_code' => '511303',
                'region_name' => '高坪区',
                'region_level' => 3,
                'parent_region_code' => '511300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'region_code' => '511304',
                'region_name' => '嘉陵区',
                'region_level' => 3,
                'parent_region_code' => '511300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'region_code' => '511321',
                'region_name' => '南部县',
                'region_level' => 3,
                'parent_region_code' => '511300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'region_code' => '511322',
                'region_name' => '营山县',
                'region_level' => 3,
                'parent_region_code' => '511300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'region_code' => '511323',
                'region_name' => '蓬安县',
                'region_level' => 3,
                'parent_region_code' => '511300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'region_code' => '511324',
                'region_name' => '仪陇县',
                'region_level' => 3,
                'parent_region_code' => '511300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'region_code' => '511325',
                'region_name' => '西充县',
                'region_level' => 3,
                'parent_region_code' => '511300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'region_code' => '511381',
                'region_name' => '阆中市',
                'region_level' => 3,
                'parent_region_code' => '511400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'region_code' => '511400',
                'region_name' => '眉山市',
                'region_level' => 2,
                'parent_region_code' => '510000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'region_code' => '511401',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '511400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'region_code' => '511402',
                'region_name' => '东坡区',
                'region_level' => 3,
                'parent_region_code' => '511400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'region_code' => '511421',
                'region_name' => '仁寿县',
                'region_level' => 3,
                'parent_region_code' => '511400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'region_code' => '511422',
                'region_name' => '彭山县',
                'region_level' => 3,
                'parent_region_code' => '511400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'region_code' => '511423',
                'region_name' => '洪雅县',
                'region_level' => 3,
                'parent_region_code' => '511400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'region_code' => '511424',
                'region_name' => '丹棱县',
                'region_level' => 3,
                'parent_region_code' => '511400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'region_code' => '511425',
                'region_name' => '青神县',
                'region_level' => 3,
                'parent_region_code' => '511400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'region_code' => '511500',
                'region_name' => '宜宾市',
                'region_level' => 2,
                'parent_region_code' => '510000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'region_code' => '511501',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '511500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'region_code' => '511502',
                'region_name' => '翠屏区',
                'region_level' => 3,
                'parent_region_code' => '511500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'region_code' => '511503',
                'region_name' => '南溪区',
                'region_level' => 3,
                'parent_region_code' => '511500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'region_code' => '511521',
                'region_name' => '宜宾县',
                'region_level' => 3,
                'parent_region_code' => '511500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'region_code' => '511523',
                'region_name' => '江安县',
                'region_level' => 3,
                'parent_region_code' => '511500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'region_code' => '511524',
                'region_name' => '长宁县',
                'region_level' => 3,
                'parent_region_code' => '511500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'region_code' => '511525',
                'region_name' => '高县',
                'region_level' => 3,
                'parent_region_code' => '511500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'region_code' => '511526',
                'region_name' => '珙县',
                'region_level' => 3,
                'parent_region_code' => '511500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'region_code' => '511527',
                'region_name' => '筠连县',
                'region_level' => 3,
                'parent_region_code' => '511500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'region_code' => '511528',
                'region_name' => '兴文县',
                'region_level' => 3,
                'parent_region_code' => '511500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'region_code' => '511529',
                'region_name' => '屏山县',
                'region_level' => 3,
                'parent_region_code' => '511500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'region_code' => '511600',
                'region_name' => '广安市',
                'region_level' => 2,
                'parent_region_code' => '510000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'region_code' => '511601',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '511600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'region_code' => '511602',
                'region_name' => '广安区',
                'region_level' => 3,
                'parent_region_code' => '511600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'region_code' => '511621',
                'region_name' => '岳池县',
                'region_level' => 3,
                'parent_region_code' => '511600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'region_code' => '511622',
                'region_name' => '武胜县',
                'region_level' => 3,
                'parent_region_code' => '511600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'region_code' => '511623',
                'region_name' => '邻水县',
                'region_level' => 3,
                'parent_region_code' => '511600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'region_code' => '511681',
                'region_name' => '华蓥市',
                'region_level' => 3,
                'parent_region_code' => '511700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'region_code' => '511700',
                'region_name' => '达州市',
                'region_level' => 2,
                'parent_region_code' => '510000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'region_code' => '511701',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '511700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'region_code' => '511702',
                'region_name' => '通川区',
                'region_level' => 3,
                'parent_region_code' => '511700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'region_code' => '511721',
                'region_name' => '达县',
                'region_level' => 3,
                'parent_region_code' => '511700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'region_code' => '511722',
                'region_name' => '宣汉县',
                'region_level' => 3,
                'parent_region_code' => '511700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'region_code' => '511723',
                'region_name' => '开江县',
                'region_level' => 3,
                'parent_region_code' => '511700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'region_code' => '511724',
                'region_name' => '大竹县',
                'region_level' => 3,
                'parent_region_code' => '511700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'region_code' => '511725',
                'region_name' => '渠县',
                'region_level' => 3,
                'parent_region_code' => '511700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'region_code' => '511781',
                'region_name' => '万源市',
                'region_level' => 3,
                'parent_region_code' => '511800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'region_code' => '511800',
                'region_name' => '雅安市',
                'region_level' => 2,
                'parent_region_code' => '510000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'region_code' => '511801',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '511800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'region_code' => '511802',
                'region_name' => '雨城区',
                'region_level' => 3,
                'parent_region_code' => '511800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'region_code' => '511803',
                'region_name' => '名山区',
                'region_level' => 3,
                'parent_region_code' => '511800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'region_code' => '511822',
                'region_name' => '荥经县',
                'region_level' => 3,
                'parent_region_code' => '511800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'region_code' => '511823',
                'region_name' => '汉源县',
                'region_level' => 3,
                'parent_region_code' => '511800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'region_code' => '511824',
                'region_name' => '石棉县',
                'region_level' => 3,
                'parent_region_code' => '511800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'region_code' => '511825',
                'region_name' => '天全县',
                'region_level' => 3,
                'parent_region_code' => '511800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'region_code' => '511826',
                'region_name' => '芦山县',
                'region_level' => 3,
                'parent_region_code' => '511800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'region_code' => '511827',
                'region_name' => '宝兴县',
                'region_level' => 3,
                'parent_region_code' => '511800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'region_code' => '511900',
                'region_name' => '巴中市',
                'region_level' => 2,
                'parent_region_code' => '510000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'region_code' => '511901',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '511900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'region_code' => '511902',
                'region_name' => '巴州区',
                'region_level' => 3,
                'parent_region_code' => '511900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'region_code' => '511921',
                'region_name' => '通江县',
                'region_level' => 3,
                'parent_region_code' => '511900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'region_code' => '511922',
                'region_name' => '南江县',
                'region_level' => 3,
                'parent_region_code' => '511900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'region_code' => '511923',
                'region_name' => '平昌县',
                'region_level' => 3,
                'parent_region_code' => '511900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'region_code' => '512000',
                'region_name' => '资阳市',
                'region_level' => 2,
                'parent_region_code' => '510000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'region_code' => '512001',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '512000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'region_code' => '512002',
                'region_name' => '雁江区',
                'region_level' => 3,
                'parent_region_code' => '512000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'region_code' => '512021',
                'region_name' => '安岳县',
                'region_level' => 3,
                'parent_region_code' => '512000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'region_code' => '512022',
                'region_name' => '乐至县',
                'region_level' => 3,
                'parent_region_code' => '512000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'region_code' => '512081',
                'region_name' => '简阳市',
                'region_level' => 3,
                'parent_region_code' => '512100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'region_code' => '513200',
                'region_name' => '阿坝藏族羌族自治州',
                'region_level' => 2,
                'parent_region_code' => '510000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'region_code' => '513221',
                'region_name' => '汶川县',
                'region_level' => 3,
                'parent_region_code' => '513200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'region_code' => '513222',
                'region_name' => '理县',
                'region_level' => 3,
                'parent_region_code' => '513200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'region_code' => '513223',
                'region_name' => '茂县',
                'region_level' => 3,
                'parent_region_code' => '513200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'region_code' => '513224',
                'region_name' => '松潘县',
                'region_level' => 3,
                'parent_region_code' => '513200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'region_code' => '513225',
                'region_name' => '九寨沟县',
                'region_level' => 3,
                'parent_region_code' => '513200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'region_code' => '513226',
                'region_name' => '金川县',
                'region_level' => 3,
                'parent_region_code' => '513200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'region_code' => '513227',
                'region_name' => '小金县',
                'region_level' => 3,
                'parent_region_code' => '513200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'region_code' => '513228',
                'region_name' => '黑水县',
                'region_level' => 3,
                'parent_region_code' => '513200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'region_code' => '513229',
                'region_name' => '马尔康县',
                'region_level' => 3,
                'parent_region_code' => '513200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'region_code' => '513230',
                'region_name' => '壤塘县',
                'region_level' => 3,
                'parent_region_code' => '513200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'region_code' => '513231',
                'region_name' => '阿坝县',
                'region_level' => 3,
                'parent_region_code' => '513200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'region_code' => '513232',
                'region_name' => '若尔盖县',
                'region_level' => 3,
                'parent_region_code' => '513200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'region_code' => '513233',
                'region_name' => '红原县',
                'region_level' => 3,
                'parent_region_code' => '513200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'region_code' => '513300',
                'region_name' => '甘孜藏族自治州',
                'region_level' => 2,
                'parent_region_code' => '510000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'region_code' => '513321',
                'region_name' => '康定县',
                'region_level' => 3,
                'parent_region_code' => '513300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'region_code' => '513322',
                'region_name' => '泸定县',
                'region_level' => 3,
                'parent_region_code' => '513300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'region_code' => '513323',
                'region_name' => '丹巴县',
                'region_level' => 3,
                'parent_region_code' => '513300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'region_code' => '513324',
                'region_name' => '九龙县',
                'region_level' => 3,
                'parent_region_code' => '513300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'region_code' => '513325',
                'region_name' => '雅江县',
                'region_level' => 3,
                'parent_region_code' => '513300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'region_code' => '513326',
                'region_name' => '道孚县',
                'region_level' => 3,
                'parent_region_code' => '513300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'region_code' => '513327',
                'region_name' => '炉霍县',
                'region_level' => 3,
                'parent_region_code' => '513300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'region_code' => '513328',
                'region_name' => '甘孜县',
                'region_level' => 3,
                'parent_region_code' => '513300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'region_code' => '513329',
                'region_name' => '新龙县',
                'region_level' => 3,
                'parent_region_code' => '513300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'region_code' => '513330',
                'region_name' => '德格县',
                'region_level' => 3,
                'parent_region_code' => '513300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'region_code' => '513331',
                'region_name' => '白玉县',
                'region_level' => 3,
                'parent_region_code' => '513300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'region_code' => '513332',
                'region_name' => '石渠县',
                'region_level' => 3,
                'parent_region_code' => '513300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'region_code' => '513333',
                'region_name' => '色达县',
                'region_level' => 3,
                'parent_region_code' => '513300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'region_code' => '513334',
                'region_name' => '理塘县',
                'region_level' => 3,
                'parent_region_code' => '513300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'region_code' => '513335',
                'region_name' => '巴塘县',
                'region_level' => 3,
                'parent_region_code' => '513300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'region_code' => '513336',
                'region_name' => '乡城县',
                'region_level' => 3,
                'parent_region_code' => '513300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'region_code' => '513337',
                'region_name' => '稻城县',
                'region_level' => 3,
                'parent_region_code' => '513300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'region_code' => '513338',
                'region_name' => '得荣县',
                'region_level' => 3,
                'parent_region_code' => '513300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'region_code' => '513400',
                'region_name' => '凉山彝族自治州',
                'region_level' => 2,
                'parent_region_code' => '510000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'region_code' => '513401',
                'region_name' => '西昌市',
                'region_level' => 3,
                'parent_region_code' => '513400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'region_code' => '513422',
                'region_name' => '木里藏族自治县',
                'region_level' => 3,
                'parent_region_code' => '513400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'region_code' => '513423',
                'region_name' => '盐源县',
                'region_level' => 3,
                'parent_region_code' => '513400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'region_code' => '513424',
                'region_name' => '德昌县',
                'region_level' => 3,
                'parent_region_code' => '513400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'region_code' => '513425',
                'region_name' => '会理县',
                'region_level' => 3,
                'parent_region_code' => '513400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'region_code' => '513426',
                'region_name' => '会东县',
                'region_level' => 3,
                'parent_region_code' => '513400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'region_code' => '513427',
                'region_name' => '宁南县',
                'region_level' => 3,
                'parent_region_code' => '513400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'region_code' => '513428',
                'region_name' => '普格县',
                'region_level' => 3,
                'parent_region_code' => '513400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'region_code' => '513429',
                'region_name' => '布拖县',
                'region_level' => 3,
                'parent_region_code' => '513400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'region_code' => '513430',
                'region_name' => '金阳县',
                'region_level' => 3,
                'parent_region_code' => '513400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'region_code' => '513431',
                'region_name' => '昭觉县',
                'region_level' => 3,
                'parent_region_code' => '513400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'region_code' => '513432',
                'region_name' => '喜德县',
                'region_level' => 3,
                'parent_region_code' => '513400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('regions')->insert(array (
            0 => 
            array (
                'region_code' => '513433',
                'region_name' => '冕宁县',
                'region_level' => 3,
                'parent_region_code' => '513400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'region_code' => '513434',
                'region_name' => '越西县',
                'region_level' => 3,
                'parent_region_code' => '513400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'region_code' => '513435',
                'region_name' => '甘洛县',
                'region_level' => 3,
                'parent_region_code' => '513400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'region_code' => '513436',
                'region_name' => '美姑县',
                'region_level' => 3,
                'parent_region_code' => '513400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'region_code' => '513437',
                'region_name' => '雷波县',
                'region_level' => 3,
                'parent_region_code' => '513400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'region_code' => '520000',
                'region_name' => '贵州省',
                'region_level' => 1,
                'parent_region_code' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'region_code' => '520100',
                'region_name' => '贵阳市',
                'region_level' => 2,
                'parent_region_code' => '520000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'region_code' => '520101',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '520100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'region_code' => '520102',
                'region_name' => '南明区',
                'region_level' => 3,
                'parent_region_code' => '520100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'region_code' => '520103',
                'region_name' => '云岩区',
                'region_level' => 3,
                'parent_region_code' => '520100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'region_code' => '520111',
                'region_name' => '花溪区',
                'region_level' => 3,
                'parent_region_code' => '520100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'region_code' => '520112',
                'region_name' => '乌当区',
                'region_level' => 3,
                'parent_region_code' => '520100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'region_code' => '520113',
                'region_name' => '白云区',
                'region_level' => 3,
                'parent_region_code' => '520100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'region_code' => '520114',
                'region_name' => '小河区',
                'region_level' => 3,
                'parent_region_code' => '520100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'region_code' => '520121',
                'region_name' => '开阳县',
                'region_level' => 3,
                'parent_region_code' => '520100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'region_code' => '520122',
                'region_name' => '息烽县',
                'region_level' => 3,
                'parent_region_code' => '520100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'region_code' => '520123',
                'region_name' => '修文县',
                'region_level' => 3,
                'parent_region_code' => '520100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'region_code' => '520181',
                'region_name' => '清镇市',
                'region_level' => 3,
                'parent_region_code' => '520200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'region_code' => '520200',
                'region_name' => '六盘水市',
                'region_level' => 2,
                'parent_region_code' => '520000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'region_code' => '520201',
                'region_name' => '钟山区',
                'region_level' => 3,
                'parent_region_code' => '520200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'region_code' => '520203',
                'region_name' => '六枝特区',
                'region_level' => 3,
                'parent_region_code' => '520200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'region_code' => '520221',
                'region_name' => '水城县',
                'region_level' => 3,
                'parent_region_code' => '520200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'region_code' => '520222',
                'region_name' => '盘县',
                'region_level' => 3,
                'parent_region_code' => '520200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'region_code' => '520300',
                'region_name' => '遵义市',
                'region_level' => 2,
                'parent_region_code' => '520000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'region_code' => '520301',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '520300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'region_code' => '520302',
                'region_name' => '红花岗区',
                'region_level' => 3,
                'parent_region_code' => '520300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'region_code' => '520303',
                'region_name' => '汇川区',
                'region_level' => 3,
                'parent_region_code' => '520300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'region_code' => '520321',
                'region_name' => '遵义县',
                'region_level' => 3,
                'parent_region_code' => '520300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'region_code' => '520322',
                'region_name' => '桐梓县',
                'region_level' => 3,
                'parent_region_code' => '520300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'region_code' => '520323',
                'region_name' => '绥阳县',
                'region_level' => 3,
                'parent_region_code' => '520300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'region_code' => '520324',
                'region_name' => '正安县',
                'region_level' => 3,
                'parent_region_code' => '520300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'region_code' => '520325',
                'region_name' => '道真仡佬族苗族自治县',
                'region_level' => 3,
                'parent_region_code' => '520300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'region_code' => '520326',
                'region_name' => '务川仡佬族苗族自治县',
                'region_level' => 3,
                'parent_region_code' => '520300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'region_code' => '520327',
                'region_name' => '凤冈县',
                'region_level' => 3,
                'parent_region_code' => '520300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'region_code' => '520328',
                'region_name' => '湄潭县',
                'region_level' => 3,
                'parent_region_code' => '520300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'region_code' => '520329',
                'region_name' => '余庆县',
                'region_level' => 3,
                'parent_region_code' => '520300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'region_code' => '520330',
                'region_name' => '习水县',
                'region_level' => 3,
                'parent_region_code' => '520300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'region_code' => '520381',
                'region_name' => '赤水市',
                'region_level' => 3,
                'parent_region_code' => '520400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'region_code' => '520382',
                'region_name' => '仁怀市',
                'region_level' => 3,
                'parent_region_code' => '520400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'region_code' => '520400',
                'region_name' => '安顺市',
                'region_level' => 2,
                'parent_region_code' => '520000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'region_code' => '520401',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '520400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'region_code' => '520402',
                'region_name' => '西秀区',
                'region_level' => 3,
                'parent_region_code' => '520400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'region_code' => '520421',
                'region_name' => '平坝县',
                'region_level' => 3,
                'parent_region_code' => '520400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'region_code' => '520422',
                'region_name' => '普定县',
                'region_level' => 3,
                'parent_region_code' => '520400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'region_code' => '520423',
                'region_name' => '镇宁布依族苗族自治县',
                'region_level' => 3,
                'parent_region_code' => '520400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'region_code' => '520424',
                'region_name' => '关岭布依族苗族自治县',
                'region_level' => 3,
                'parent_region_code' => '520400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'region_code' => '520425',
                'region_name' => '紫云苗族布依族自治县',
                'region_level' => 3,
                'parent_region_code' => '520400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'region_code' => '520500',
                'region_name' => '毕节市',
                'region_level' => 2,
                'parent_region_code' => '520000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'region_code' => '520502',
                'region_name' => '七星关区',
                'region_level' => 3,
                'parent_region_code' => '520500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'region_code' => '520521',
                'region_name' => '大方县',
                'region_level' => 3,
                'parent_region_code' => '520500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'region_code' => '520522',
                'region_name' => '黔西县',
                'region_level' => 3,
                'parent_region_code' => '520500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'region_code' => '520523',
                'region_name' => '金沙县',
                'region_level' => 3,
                'parent_region_code' => '520500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'region_code' => '520524',
                'region_name' => '织金县',
                'region_level' => 3,
                'parent_region_code' => '520500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'region_code' => '520525',
                'region_name' => '纳雍县',
                'region_level' => 3,
                'parent_region_code' => '520500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'region_code' => '520526',
                'region_name' => '威宁彝族回族苗族自治县',
                'region_level' => 3,
                'parent_region_code' => '520500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'region_code' => '520527',
                'region_name' => '赫章县',
                'region_level' => 3,
                'parent_region_code' => '520500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'region_code' => '520600',
                'region_name' => '铜仁市',
                'region_level' => 2,
                'parent_region_code' => '520000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'region_code' => '520602',
                'region_name' => '碧江区',
                'region_level' => 3,
                'parent_region_code' => '520600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'region_code' => '520603',
                'region_name' => '万山区',
                'region_level' => 3,
                'parent_region_code' => '520600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'region_code' => '520621',
                'region_name' => '江口县',
                'region_level' => 3,
                'parent_region_code' => '520600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'region_code' => '520622',
                'region_name' => '玉屏侗族自治县',
                'region_level' => 3,
                'parent_region_code' => '520600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'region_code' => '520623',
                'region_name' => '石阡县',
                'region_level' => 3,
                'parent_region_code' => '520600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'region_code' => '520624',
                'region_name' => '思南县',
                'region_level' => 3,
                'parent_region_code' => '520600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'region_code' => '520625',
                'region_name' => '印江土家族苗族自治县',
                'region_level' => 3,
                'parent_region_code' => '520600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'region_code' => '520626',
                'region_name' => '德江县',
                'region_level' => 3,
                'parent_region_code' => '520600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'region_code' => '520627',
                'region_name' => '沿河土家族自治县',
                'region_level' => 3,
                'parent_region_code' => '520600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'region_code' => '520628',
                'region_name' => '松桃苗族自治县',
                'region_level' => 3,
                'parent_region_code' => '520600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'region_code' => '522300',
                'region_name' => '黔西南布依族苗族自治州',
                'region_level' => 2,
                'parent_region_code' => '520000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'region_code' => '522301',
                'region_name' => '兴义市',
                'region_level' => 3,
                'parent_region_code' => '522300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'region_code' => '522322',
                'region_name' => '兴仁县',
                'region_level' => 3,
                'parent_region_code' => '522300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'region_code' => '522323',
                'region_name' => '普安县',
                'region_level' => 3,
                'parent_region_code' => '522300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'region_code' => '522324',
                'region_name' => '晴隆县',
                'region_level' => 3,
                'parent_region_code' => '522300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'region_code' => '522325',
                'region_name' => '贞丰县',
                'region_level' => 3,
                'parent_region_code' => '522300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'region_code' => '522326',
                'region_name' => '望谟县',
                'region_level' => 3,
                'parent_region_code' => '522300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'region_code' => '522327',
                'region_name' => '册亨县',
                'region_level' => 3,
                'parent_region_code' => '522300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'region_code' => '522328',
                'region_name' => '安龙县',
                'region_level' => 3,
                'parent_region_code' => '522300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'region_code' => '522600',
                'region_name' => '黔东南苗族侗族自治州',
                'region_level' => 2,
                'parent_region_code' => '520000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'region_code' => '522601',
                'region_name' => '凯里市',
                'region_level' => 3,
                'parent_region_code' => '522600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'region_code' => '522622',
                'region_name' => '黄平县',
                'region_level' => 3,
                'parent_region_code' => '522600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'region_code' => '522623',
                'region_name' => '施秉县',
                'region_level' => 3,
                'parent_region_code' => '522600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'region_code' => '522624',
                'region_name' => '三穗县',
                'region_level' => 3,
                'parent_region_code' => '522600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'region_code' => '522625',
                'region_name' => '镇远县',
                'region_level' => 3,
                'parent_region_code' => '522600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'region_code' => '522626',
                'region_name' => '岑巩县',
                'region_level' => 3,
                'parent_region_code' => '522600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'region_code' => '522627',
                'region_name' => '天柱县',
                'region_level' => 3,
                'parent_region_code' => '522600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'region_code' => '522628',
                'region_name' => '锦屏县',
                'region_level' => 3,
                'parent_region_code' => '522600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'region_code' => '522629',
                'region_name' => '剑河县',
                'region_level' => 3,
                'parent_region_code' => '522600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'region_code' => '522630',
                'region_name' => '台江县',
                'region_level' => 3,
                'parent_region_code' => '522600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'region_code' => '522631',
                'region_name' => '黎平县',
                'region_level' => 3,
                'parent_region_code' => '522600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'region_code' => '522632',
                'region_name' => '榕江县',
                'region_level' => 3,
                'parent_region_code' => '522600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'region_code' => '522633',
                'region_name' => '从江县',
                'region_level' => 3,
                'parent_region_code' => '522600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'region_code' => '522634',
                'region_name' => '雷山县',
                'region_level' => 3,
                'parent_region_code' => '522600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'region_code' => '522635',
                'region_name' => '麻江县',
                'region_level' => 3,
                'parent_region_code' => '522600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'region_code' => '522636',
                'region_name' => '丹寨县',
                'region_level' => 3,
                'parent_region_code' => '522600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'region_code' => '522700',
                'region_name' => '黔南布依族苗族自治州',
                'region_level' => 2,
                'parent_region_code' => '520000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'region_code' => '522701',
                'region_name' => '都匀市',
                'region_level' => 3,
                'parent_region_code' => '522700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'region_code' => '522702',
                'region_name' => '福泉市',
                'region_level' => 3,
                'parent_region_code' => '522700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'region_code' => '522722',
                'region_name' => '荔波县',
                'region_level' => 3,
                'parent_region_code' => '522700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'region_code' => '522723',
                'region_name' => '贵定县',
                'region_level' => 3,
                'parent_region_code' => '522700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'region_code' => '522725',
                'region_name' => '瓮安县',
                'region_level' => 3,
                'parent_region_code' => '522700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'region_code' => '522726',
                'region_name' => '独山县',
                'region_level' => 3,
                'parent_region_code' => '522700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'region_code' => '522727',
                'region_name' => '平塘县',
                'region_level' => 3,
                'parent_region_code' => '522700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'region_code' => '522728',
                'region_name' => '罗甸县',
                'region_level' => 3,
                'parent_region_code' => '522700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'region_code' => '522729',
                'region_name' => '长顺县',
                'region_level' => 3,
                'parent_region_code' => '522700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'region_code' => '522730',
                'region_name' => '龙里县',
                'region_level' => 3,
                'parent_region_code' => '522700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'region_code' => '522731',
                'region_name' => '惠水县',
                'region_level' => 3,
                'parent_region_code' => '522700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'region_code' => '522732',
                'region_name' => '三都水族自治县',
                'region_level' => 3,
                'parent_region_code' => '522700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'region_code' => '530000',
                'region_name' => '云南省',
                'region_level' => 1,
                'parent_region_code' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'region_code' => '530100',
                'region_name' => '昆明市',
                'region_level' => 2,
                'parent_region_code' => '530000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'region_code' => '530101',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '530100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'region_code' => '530102',
                'region_name' => '五华区',
                'region_level' => 3,
                'parent_region_code' => '530100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'region_code' => '530103',
                'region_name' => '盘龙区',
                'region_level' => 3,
                'parent_region_code' => '530100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'region_code' => '530111',
                'region_name' => '官渡区',
                'region_level' => 3,
                'parent_region_code' => '530100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'region_code' => '530112',
                'region_name' => '西山区',
                'region_level' => 3,
                'parent_region_code' => '530100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'region_code' => '530113',
                'region_name' => '东川区',
                'region_level' => 3,
                'parent_region_code' => '530100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'region_code' => '530114',
                'region_name' => '呈贡区',
                'region_level' => 3,
                'parent_region_code' => '530100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'region_code' => '530122',
                'region_name' => '晋宁县',
                'region_level' => 3,
                'parent_region_code' => '530100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'region_code' => '530124',
                'region_name' => '富民县',
                'region_level' => 3,
                'parent_region_code' => '530100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'region_code' => '530125',
                'region_name' => '宜良县',
                'region_level' => 3,
                'parent_region_code' => '530100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'region_code' => '530126',
                'region_name' => '石林彝族自治县',
                'region_level' => 3,
                'parent_region_code' => '530100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'region_code' => '530127',
                'region_name' => '嵩明县',
                'region_level' => 3,
                'parent_region_code' => '530100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'region_code' => '530128',
                'region_name' => '禄劝彝族苗族自治县',
                'region_level' => 3,
                'parent_region_code' => '530100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'region_code' => '530129',
                'region_name' => '寻甸回族彝族自治县',
                'region_level' => 3,
                'parent_region_code' => '530100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'region_code' => '530181',
                'region_name' => '安宁市',
                'region_level' => 3,
                'parent_region_code' => '530200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'region_code' => '530300',
                'region_name' => '曲靖市',
                'region_level' => 2,
                'parent_region_code' => '530000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'region_code' => '530301',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '530300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'region_code' => '530302',
                'region_name' => '麒麟区',
                'region_level' => 3,
                'parent_region_code' => '530300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'region_code' => '530321',
                'region_name' => '马龙县',
                'region_level' => 3,
                'parent_region_code' => '530300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'region_code' => '530322',
                'region_name' => '陆良县',
                'region_level' => 3,
                'parent_region_code' => '530300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'region_code' => '530323',
                'region_name' => '师宗县',
                'region_level' => 3,
                'parent_region_code' => '530300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'region_code' => '530324',
                'region_name' => '罗平县',
                'region_level' => 3,
                'parent_region_code' => '530300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'region_code' => '530325',
                'region_name' => '富源县',
                'region_level' => 3,
                'parent_region_code' => '530300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'region_code' => '530326',
                'region_name' => '会泽县',
                'region_level' => 3,
                'parent_region_code' => '530300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'region_code' => '530328',
                'region_name' => '沾益县',
                'region_level' => 3,
                'parent_region_code' => '530300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'region_code' => '530381',
                'region_name' => '宣威市',
                'region_level' => 3,
                'parent_region_code' => '530400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'region_code' => '530400',
                'region_name' => '玉溪市',
                'region_level' => 2,
                'parent_region_code' => '530000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'region_code' => '530402',
                'region_name' => '红塔区',
                'region_level' => 3,
                'parent_region_code' => '530400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'region_code' => '530421',
                'region_name' => '江川县',
                'region_level' => 3,
                'parent_region_code' => '530400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'region_code' => '530422',
                'region_name' => '澄江县',
                'region_level' => 3,
                'parent_region_code' => '530400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'region_code' => '530423',
                'region_name' => '通海县',
                'region_level' => 3,
                'parent_region_code' => '530400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'region_code' => '530424',
                'region_name' => '华宁县',
                'region_level' => 3,
                'parent_region_code' => '530400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'region_code' => '530425',
                'region_name' => '易门县',
                'region_level' => 3,
                'parent_region_code' => '530400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'region_code' => '530426',
                'region_name' => '峨山彝族自治县',
                'region_level' => 3,
                'parent_region_code' => '530400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'region_code' => '530427',
                'region_name' => '新平彝族傣族自治县',
                'region_level' => 3,
                'parent_region_code' => '530400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'region_code' => '530428',
                'region_name' => '元江哈尼族彝族傣族自治县',
                'region_level' => 3,
                'parent_region_code' => '530400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'region_code' => '530500',
                'region_name' => '保山市',
                'region_level' => 2,
                'parent_region_code' => '530000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'region_code' => '530501',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '530500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'region_code' => '530502',
                'region_name' => '隆阳区',
                'region_level' => 3,
                'parent_region_code' => '530500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'region_code' => '530521',
                'region_name' => '施甸县',
                'region_level' => 3,
                'parent_region_code' => '530500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'region_code' => '530522',
                'region_name' => '腾冲县',
                'region_level' => 3,
                'parent_region_code' => '530500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'region_code' => '530523',
                'region_name' => '龙陵县',
                'region_level' => 3,
                'parent_region_code' => '530500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'region_code' => '530524',
                'region_name' => '昌宁县',
                'region_level' => 3,
                'parent_region_code' => '530500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'region_code' => '530600',
                'region_name' => '昭通市',
                'region_level' => 2,
                'parent_region_code' => '530000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'region_code' => '530601',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '530600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'region_code' => '530602',
                'region_name' => '昭阳区',
                'region_level' => 3,
                'parent_region_code' => '530600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'region_code' => '530621',
                'region_name' => '鲁甸县',
                'region_level' => 3,
                'parent_region_code' => '530600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'region_code' => '530622',
                'region_name' => '巧家县',
                'region_level' => 3,
                'parent_region_code' => '530600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'region_code' => '530623',
                'region_name' => '盐津县',
                'region_level' => 3,
                'parent_region_code' => '530600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'region_code' => '530624',
                'region_name' => '大关县',
                'region_level' => 3,
                'parent_region_code' => '530600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'region_code' => '530625',
                'region_name' => '永善县',
                'region_level' => 3,
                'parent_region_code' => '530600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'region_code' => '530626',
                'region_name' => '绥江县',
                'region_level' => 3,
                'parent_region_code' => '530600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'region_code' => '530627',
                'region_name' => '镇雄县',
                'region_level' => 3,
                'parent_region_code' => '530600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'region_code' => '530628',
                'region_name' => '彝良县',
                'region_level' => 3,
                'parent_region_code' => '530600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'region_code' => '530629',
                'region_name' => '威信县',
                'region_level' => 3,
                'parent_region_code' => '530600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'region_code' => '530630',
                'region_name' => '水富县',
                'region_level' => 3,
                'parent_region_code' => '530600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'region_code' => '530700',
                'region_name' => '丽江市',
                'region_level' => 2,
                'parent_region_code' => '530000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'region_code' => '530701',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '530700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'region_code' => '530702',
                'region_name' => '古城区',
                'region_level' => 3,
                'parent_region_code' => '530700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'region_code' => '530721',
                'region_name' => '玉龙纳西族自治县',
                'region_level' => 3,
                'parent_region_code' => '530700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'region_code' => '530722',
                'region_name' => '永胜县',
                'region_level' => 3,
                'parent_region_code' => '530700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'region_code' => '530723',
                'region_name' => '华坪县',
                'region_level' => 3,
                'parent_region_code' => '530700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'region_code' => '530724',
                'region_name' => '宁蒗彝族自治县',
                'region_level' => 3,
                'parent_region_code' => '530700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'region_code' => '530800',
                'region_name' => '普洱市',
                'region_level' => 2,
                'parent_region_code' => '530000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'region_code' => '530801',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '530800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'region_code' => '530802',
                'region_name' => '思茅区',
                'region_level' => 3,
                'parent_region_code' => '530800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'region_code' => '530821',
                'region_name' => '宁洱哈尼族彝族自治县',
                'region_level' => 3,
                'parent_region_code' => '530800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'region_code' => '530822',
                'region_name' => '墨江哈尼族自治县',
                'region_level' => 3,
                'parent_region_code' => '530800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'region_code' => '530823',
                'region_name' => '景东彝族自治县',
                'region_level' => 3,
                'parent_region_code' => '530800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'region_code' => '530824',
                'region_name' => '景谷傣族彝族自治县',
                'region_level' => 3,
                'parent_region_code' => '530800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'region_code' => '530825',
                'region_name' => '镇沅彝族哈尼族拉祜族自治县',
                'region_level' => 3,
                'parent_region_code' => '530800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'region_code' => '530826',
                'region_name' => '江城哈尼族彝族自治县',
                'region_level' => 3,
                'parent_region_code' => '530800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'region_code' => '530827',
                'region_name' => '孟连傣族拉祜族佤族自治县',
                'region_level' => 3,
                'parent_region_code' => '530800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'region_code' => '530828',
                'region_name' => '澜沧拉祜族自治县',
                'region_level' => 3,
                'parent_region_code' => '530800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'region_code' => '530829',
                'region_name' => '西盟佤族自治县',
                'region_level' => 3,
                'parent_region_code' => '530800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'region_code' => '530900',
                'region_name' => '临沧市',
                'region_level' => 2,
                'parent_region_code' => '530000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'region_code' => '530901',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '530900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'region_code' => '530902',
                'region_name' => '临翔区',
                'region_level' => 3,
                'parent_region_code' => '530900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'region_code' => '530921',
                'region_name' => '凤庆县',
                'region_level' => 3,
                'parent_region_code' => '530900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'region_code' => '530922',
                'region_name' => '云县',
                'region_level' => 3,
                'parent_region_code' => '530900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'region_code' => '530923',
                'region_name' => '永德县',
                'region_level' => 3,
                'parent_region_code' => '530900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'region_code' => '530924',
                'region_name' => '镇康县',
                'region_level' => 3,
                'parent_region_code' => '530900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'region_code' => '530925',
                'region_name' => '双江拉祜族佤族布朗族傣族自治县',
                'region_level' => 3,
                'parent_region_code' => '530900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'region_code' => '530926',
                'region_name' => '耿马傣族佤族自治县',
                'region_level' => 3,
                'parent_region_code' => '530900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'region_code' => '530927',
                'region_name' => '沧源佤族自治县',
                'region_level' => 3,
                'parent_region_code' => '530900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'region_code' => '532300',
                'region_name' => '楚雄彝族自治州',
                'region_level' => 2,
                'parent_region_code' => '530000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'region_code' => '532301',
                'region_name' => '楚雄市',
                'region_level' => 3,
                'parent_region_code' => '532300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'region_code' => '532322',
                'region_name' => '双柏县',
                'region_level' => 3,
                'parent_region_code' => '532300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'region_code' => '532323',
                'region_name' => '牟定县',
                'region_level' => 3,
                'parent_region_code' => '532300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'region_code' => '532324',
                'region_name' => '南华县',
                'region_level' => 3,
                'parent_region_code' => '532300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'region_code' => '532325',
                'region_name' => '姚安县',
                'region_level' => 3,
                'parent_region_code' => '532300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'region_code' => '532326',
                'region_name' => '大姚县',
                'region_level' => 3,
                'parent_region_code' => '532300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'region_code' => '532327',
                'region_name' => '永仁县',
                'region_level' => 3,
                'parent_region_code' => '532300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'region_code' => '532328',
                'region_name' => '元谋县',
                'region_level' => 3,
                'parent_region_code' => '532300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'region_code' => '532329',
                'region_name' => '武定县',
                'region_level' => 3,
                'parent_region_code' => '532300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'region_code' => '532331',
                'region_name' => '禄丰县',
                'region_level' => 3,
                'parent_region_code' => '532300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'region_code' => '532500',
                'region_name' => '红河哈尼族彝族自治州',
                'region_level' => 2,
                'parent_region_code' => '530000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'region_code' => '532501',
                'region_name' => '个旧市',
                'region_level' => 3,
                'parent_region_code' => '532500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'region_code' => '532502',
                'region_name' => '开远市',
                'region_level' => 3,
                'parent_region_code' => '532500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'region_code' => '532503',
                'region_name' => '蒙自市',
                'region_level' => 3,
                'parent_region_code' => '532500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'region_code' => '532523',
                'region_name' => '屏边苗族自治县',
                'region_level' => 3,
                'parent_region_code' => '532500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'region_code' => '532524',
                'region_name' => '建水县',
                'region_level' => 3,
                'parent_region_code' => '532500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'region_code' => '532525',
                'region_name' => '石屏县',
                'region_level' => 3,
                'parent_region_code' => '532500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'region_code' => '532526',
                'region_name' => '弥勒县',
                'region_level' => 3,
                'parent_region_code' => '532500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'region_code' => '532527',
                'region_name' => '泸西县',
                'region_level' => 3,
                'parent_region_code' => '532500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'region_code' => '532528',
                'region_name' => '元阳县',
                'region_level' => 3,
                'parent_region_code' => '532500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'region_code' => '532529',
                'region_name' => '红河县',
                'region_level' => 3,
                'parent_region_code' => '532500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'region_code' => '532530',
                'region_name' => '金平苗族瑶族傣族自治县',
                'region_level' => 3,
                'parent_region_code' => '532500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'region_code' => '532531',
                'region_name' => '绿春县',
                'region_level' => 3,
                'parent_region_code' => '532500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'region_code' => '532532',
                'region_name' => '河口瑶族自治县',
                'region_level' => 3,
                'parent_region_code' => '532500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'region_code' => '532600',
                'region_name' => '文山壮族苗族自治州',
                'region_level' => 2,
                'parent_region_code' => '530000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'region_code' => '532601',
                'region_name' => '文山市',
                'region_level' => 3,
                'parent_region_code' => '532600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'region_code' => '532622',
                'region_name' => '砚山县',
                'region_level' => 3,
                'parent_region_code' => '532600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'region_code' => '532623',
                'region_name' => '西畴县',
                'region_level' => 3,
                'parent_region_code' => '532600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'region_code' => '532624',
                'region_name' => '麻栗坡县',
                'region_level' => 3,
                'parent_region_code' => '532600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'region_code' => '532625',
                'region_name' => '马关县',
                'region_level' => 3,
                'parent_region_code' => '532600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'region_code' => '532626',
                'region_name' => '丘北县',
                'region_level' => 3,
                'parent_region_code' => '532600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'region_code' => '532627',
                'region_name' => '广南县',
                'region_level' => 3,
                'parent_region_code' => '532600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'region_code' => '532628',
                'region_name' => '富宁县',
                'region_level' => 3,
                'parent_region_code' => '532600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'region_code' => '532800',
                'region_name' => '西双版纳傣族自治州',
                'region_level' => 2,
                'parent_region_code' => '530000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'region_code' => '532801',
                'region_name' => '景洪市',
                'region_level' => 3,
                'parent_region_code' => '532800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'region_code' => '532822',
                'region_name' => '勐海县',
                'region_level' => 3,
                'parent_region_code' => '532800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'region_code' => '532823',
                'region_name' => '勐腊县',
                'region_level' => 3,
                'parent_region_code' => '532800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'region_code' => '532900',
                'region_name' => '大理白族自治州',
                'region_level' => 2,
                'parent_region_code' => '530000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'region_code' => '532901',
                'region_name' => '大理市',
                'region_level' => 3,
                'parent_region_code' => '532900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'region_code' => '532922',
                'region_name' => '漾濞彝族自治县',
                'region_level' => 3,
                'parent_region_code' => '532900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'region_code' => '532923',
                'region_name' => '祥云县',
                'region_level' => 3,
                'parent_region_code' => '532900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'region_code' => '532924',
                'region_name' => '宾川县',
                'region_level' => 3,
                'parent_region_code' => '532900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'region_code' => '532925',
                'region_name' => '弥渡县',
                'region_level' => 3,
                'parent_region_code' => '532900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'region_code' => '532926',
                'region_name' => '南涧彝族自治县',
                'region_level' => 3,
                'parent_region_code' => '532900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'region_code' => '532927',
                'region_name' => '巍山彝族回族自治县',
                'region_level' => 3,
                'parent_region_code' => '532900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'region_code' => '532928',
                'region_name' => '永平县',
                'region_level' => 3,
                'parent_region_code' => '532900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'region_code' => '532929',
                'region_name' => '云龙县',
                'region_level' => 3,
                'parent_region_code' => '532900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'region_code' => '532930',
                'region_name' => '洱源县',
                'region_level' => 3,
                'parent_region_code' => '532900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'region_code' => '532931',
                'region_name' => '剑川县',
                'region_level' => 3,
                'parent_region_code' => '532900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'region_code' => '532932',
                'region_name' => '鹤庆县',
                'region_level' => 3,
                'parent_region_code' => '532900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'region_code' => '533100',
                'region_name' => '德宏傣族景颇族自治州',
                'region_level' => 2,
                'parent_region_code' => '530000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'region_code' => '533102',
                'region_name' => '瑞丽市',
                'region_level' => 3,
                'parent_region_code' => '533100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'region_code' => '533103',
                'region_name' => '芒市',
                'region_level' => 3,
                'parent_region_code' => '533100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'region_code' => '533122',
                'region_name' => '梁河县',
                'region_level' => 3,
                'parent_region_code' => '533100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'region_code' => '533123',
                'region_name' => '盈江县',
                'region_level' => 3,
                'parent_region_code' => '533100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'region_code' => '533124',
                'region_name' => '陇川县',
                'region_level' => 3,
                'parent_region_code' => '533100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'region_code' => '533300',
                'region_name' => '怒江傈僳族自治州',
                'region_level' => 2,
                'parent_region_code' => '530000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'region_code' => '533321',
                'region_name' => '泸水县',
                'region_level' => 3,
                'parent_region_code' => '533300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'region_code' => '533323',
                'region_name' => '福贡县',
                'region_level' => 3,
                'parent_region_code' => '533300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'region_code' => '533324',
                'region_name' => '贡山独龙族怒族自治县',
                'region_level' => 3,
                'parent_region_code' => '533300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'region_code' => '533325',
                'region_name' => '兰坪白族普米族自治县',
                'region_level' => 3,
                'parent_region_code' => '533300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'region_code' => '533400',
                'region_name' => '迪庆藏族自治州',
                'region_level' => 2,
                'parent_region_code' => '530000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'region_code' => '533421',
                'region_name' => '香格里拉县',
                'region_level' => 3,
                'parent_region_code' => '533400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'region_code' => '533422',
                'region_name' => '德钦县',
                'region_level' => 3,
                'parent_region_code' => '533400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'region_code' => '533423',
                'region_name' => '维西傈僳族自治县',
                'region_level' => 3,
                'parent_region_code' => '533400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'region_code' => '540000',
                'region_name' => '西藏自治区',
                'region_level' => 1,
                'parent_region_code' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'region_code' => '540100',
                'region_name' => '拉萨市',
                'region_level' => 2,
                'parent_region_code' => '540000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'region_code' => '540101',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '540100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'region_code' => '540102',
                'region_name' => '城关区',
                'region_level' => 3,
                'parent_region_code' => '540100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'region_code' => '540121',
                'region_name' => '林周县',
                'region_level' => 3,
                'parent_region_code' => '540100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'region_code' => '540122',
                'region_name' => '当雄县',
                'region_level' => 3,
                'parent_region_code' => '540100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'region_code' => '540123',
                'region_name' => '尼木县',
                'region_level' => 3,
                'parent_region_code' => '540100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'region_code' => '540124',
                'region_name' => '曲水县',
                'region_level' => 3,
                'parent_region_code' => '540100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'region_code' => '540125',
                'region_name' => '堆龙德庆县',
                'region_level' => 3,
                'parent_region_code' => '540100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'region_code' => '540126',
                'region_name' => '达孜县',
                'region_level' => 3,
                'parent_region_code' => '540100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'region_code' => '540127',
                'region_name' => '墨竹工卡县',
                'region_level' => 3,
                'parent_region_code' => '540100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'region_code' => '542100',
                'region_name' => '昌都地区',
                'region_level' => 2,
                'parent_region_code' => '540000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'region_code' => '542121',
                'region_name' => '昌都县',
                'region_level' => 3,
                'parent_region_code' => '542100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'region_code' => '542122',
                'region_name' => '江达县',
                'region_level' => 3,
                'parent_region_code' => '542100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'region_code' => '542123',
                'region_name' => '贡觉县',
                'region_level' => 3,
                'parent_region_code' => '542100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'region_code' => '542124',
                'region_name' => '类乌齐县',
                'region_level' => 3,
                'parent_region_code' => '542100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'region_code' => '542125',
                'region_name' => '丁青县',
                'region_level' => 3,
                'parent_region_code' => '542100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'region_code' => '542126',
                'region_name' => '察雅县',
                'region_level' => 3,
                'parent_region_code' => '542100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'region_code' => '542127',
                'region_name' => '八宿县',
                'region_level' => 3,
                'parent_region_code' => '542100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'region_code' => '542128',
                'region_name' => '左贡县',
                'region_level' => 3,
                'parent_region_code' => '542100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'region_code' => '542129',
                'region_name' => '芒康县',
                'region_level' => 3,
                'parent_region_code' => '542100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'region_code' => '542132',
                'region_name' => '洛隆县',
                'region_level' => 3,
                'parent_region_code' => '542100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'region_code' => '542133',
                'region_name' => '边坝县',
                'region_level' => 3,
                'parent_region_code' => '542100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'region_code' => '542200',
                'region_name' => '山南地区',
                'region_level' => 2,
                'parent_region_code' => '540000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'region_code' => '542221',
                'region_name' => '乃东县',
                'region_level' => 3,
                'parent_region_code' => '542200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'region_code' => '542222',
                'region_name' => '扎囊县',
                'region_level' => 3,
                'parent_region_code' => '542200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'region_code' => '542223',
                'region_name' => '贡嘎县',
                'region_level' => 3,
                'parent_region_code' => '542200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'region_code' => '542224',
                'region_name' => '桑日县',
                'region_level' => 3,
                'parent_region_code' => '542200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'region_code' => '542225',
                'region_name' => '琼结县',
                'region_level' => 3,
                'parent_region_code' => '542200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'region_code' => '542226',
                'region_name' => '曲松县',
                'region_level' => 3,
                'parent_region_code' => '542200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'region_code' => '542227',
                'region_name' => '措美县',
                'region_level' => 3,
                'parent_region_code' => '542200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'region_code' => '542228',
                'region_name' => '洛扎县',
                'region_level' => 3,
                'parent_region_code' => '542200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'region_code' => '542229',
                'region_name' => '加查县',
                'region_level' => 3,
                'parent_region_code' => '542200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'region_code' => '542231',
                'region_name' => '隆子县',
                'region_level' => 3,
                'parent_region_code' => '542200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'region_code' => '542232',
                'region_name' => '错那县',
                'region_level' => 3,
                'parent_region_code' => '542200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'region_code' => '542233',
                'region_name' => '浪卡子县',
                'region_level' => 3,
                'parent_region_code' => '542200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'region_code' => '542300',
                'region_name' => '日喀则地区',
                'region_level' => 2,
                'parent_region_code' => '540000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'region_code' => '542301',
                'region_name' => '日喀则市',
                'region_level' => 3,
                'parent_region_code' => '542300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'region_code' => '542322',
                'region_name' => '南木林县',
                'region_level' => 3,
                'parent_region_code' => '542300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'region_code' => '542323',
                'region_name' => '江孜县',
                'region_level' => 3,
                'parent_region_code' => '542300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'region_code' => '542324',
                'region_name' => '定日县',
                'region_level' => 3,
                'parent_region_code' => '542300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'region_code' => '542325',
                'region_name' => '萨迦县',
                'region_level' => 3,
                'parent_region_code' => '542300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'region_code' => '542326',
                'region_name' => '拉孜县',
                'region_level' => 3,
                'parent_region_code' => '542300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'region_code' => '542327',
                'region_name' => '昂仁县',
                'region_level' => 3,
                'parent_region_code' => '542300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'region_code' => '542328',
                'region_name' => '谢通门县',
                'region_level' => 3,
                'parent_region_code' => '542300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'region_code' => '542329',
                'region_name' => '白朗县',
                'region_level' => 3,
                'parent_region_code' => '542300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'region_code' => '542330',
                'region_name' => '仁布县',
                'region_level' => 3,
                'parent_region_code' => '542300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'region_code' => '542331',
                'region_name' => '康马县',
                'region_level' => 3,
                'parent_region_code' => '542300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'region_code' => '542332',
                'region_name' => '定结县',
                'region_level' => 3,
                'parent_region_code' => '542300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'region_code' => '542333',
                'region_name' => '仲巴县',
                'region_level' => 3,
                'parent_region_code' => '542300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'region_code' => '542334',
                'region_name' => '亚东县',
                'region_level' => 3,
                'parent_region_code' => '542300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'region_code' => '542335',
                'region_name' => '吉隆县',
                'region_level' => 3,
                'parent_region_code' => '542300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'region_code' => '542336',
                'region_name' => '聂拉木县',
                'region_level' => 3,
                'parent_region_code' => '542300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'region_code' => '542337',
                'region_name' => '萨嘎县',
                'region_level' => 3,
                'parent_region_code' => '542300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'region_code' => '542338',
                'region_name' => '岗巴县',
                'region_level' => 3,
                'parent_region_code' => '542300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'region_code' => '542400',
                'region_name' => '那曲地区',
                'region_level' => 2,
                'parent_region_code' => '540000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'region_code' => '542421',
                'region_name' => '那曲县',
                'region_level' => 3,
                'parent_region_code' => '542400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'region_code' => '542422',
                'region_name' => '嘉黎县',
                'region_level' => 3,
                'parent_region_code' => '542400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'region_code' => '542423',
                'region_name' => '比如县',
                'region_level' => 3,
                'parent_region_code' => '542400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'region_code' => '542424',
                'region_name' => '聂荣县',
                'region_level' => 3,
                'parent_region_code' => '542400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'region_code' => '542425',
                'region_name' => '安多县',
                'region_level' => 3,
                'parent_region_code' => '542400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'region_code' => '542426',
                'region_name' => '申扎县',
                'region_level' => 3,
                'parent_region_code' => '542400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'region_code' => '542427',
                'region_name' => '索县',
                'region_level' => 3,
                'parent_region_code' => '542400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'region_code' => '542428',
                'region_name' => '班戈县',
                'region_level' => 3,
                'parent_region_code' => '542400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'region_code' => '542429',
                'region_name' => '巴青县',
                'region_level' => 3,
                'parent_region_code' => '542400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'region_code' => '542430',
                'region_name' => '尼玛县',
                'region_level' => 3,
                'parent_region_code' => '542400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'region_code' => '542500',
                'region_name' => '阿里地区',
                'region_level' => 2,
                'parent_region_code' => '540000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'region_code' => '542521',
                'region_name' => '普兰县',
                'region_level' => 3,
                'parent_region_code' => '542500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'region_code' => '542522',
                'region_name' => '札达县',
                'region_level' => 3,
                'parent_region_code' => '542500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'region_code' => '542523',
                'region_name' => '噶尔县',
                'region_level' => 3,
                'parent_region_code' => '542500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'region_code' => '542524',
                'region_name' => '日土县',
                'region_level' => 3,
                'parent_region_code' => '542500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'region_code' => '542525',
                'region_name' => '革吉县',
                'region_level' => 3,
                'parent_region_code' => '542500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'region_code' => '542526',
                'region_name' => '改则县',
                'region_level' => 3,
                'parent_region_code' => '542500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'region_code' => '542527',
                'region_name' => '措勤县',
                'region_level' => 3,
                'parent_region_code' => '542500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'region_code' => '542600',
                'region_name' => '林芝地区',
                'region_level' => 2,
                'parent_region_code' => '540000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'region_code' => '542621',
                'region_name' => '林芝县',
                'region_level' => 3,
                'parent_region_code' => '542600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'region_code' => '542622',
                'region_name' => '工布江达县',
                'region_level' => 3,
                'parent_region_code' => '542600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'region_code' => '542623',
                'region_name' => '米林县',
                'region_level' => 3,
                'parent_region_code' => '542600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'region_code' => '542624',
                'region_name' => '墨脱县',
                'region_level' => 3,
                'parent_region_code' => '542600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'region_code' => '542625',
                'region_name' => '波密县',
                'region_level' => 3,
                'parent_region_code' => '542600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'region_code' => '542626',
                'region_name' => '察隅县',
                'region_level' => 3,
                'parent_region_code' => '542600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'region_code' => '542627',
                'region_name' => '朗县',
                'region_level' => 3,
                'parent_region_code' => '542600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'region_code' => '610000',
                'region_name' => '陕西省',
                'region_level' => 1,
                'parent_region_code' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'region_code' => '610100',
                'region_name' => '西安市',
                'region_level' => 2,
                'parent_region_code' => '610000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'region_code' => '610101',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '610100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'region_code' => '610102',
                'region_name' => '新城区',
                'region_level' => 3,
                'parent_region_code' => '610100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'region_code' => '610103',
                'region_name' => '碑林区',
                'region_level' => 3,
                'parent_region_code' => '610100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'region_code' => '610104',
                'region_name' => '莲湖区',
                'region_level' => 3,
                'parent_region_code' => '610100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'region_code' => '610111',
                'region_name' => '灞桥区',
                'region_level' => 3,
                'parent_region_code' => '610100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'region_code' => '610112',
                'region_name' => '未央区',
                'region_level' => 3,
                'parent_region_code' => '610100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'region_code' => '610113',
                'region_name' => '雁塔区',
                'region_level' => 3,
                'parent_region_code' => '610100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'region_code' => '610114',
                'region_name' => '阎良区',
                'region_level' => 3,
                'parent_region_code' => '610100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'region_code' => '610115',
                'region_name' => '临潼区',
                'region_level' => 3,
                'parent_region_code' => '610100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'region_code' => '610116',
                'region_name' => '长安区',
                'region_level' => 3,
                'parent_region_code' => '610100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'region_code' => '610122',
                'region_name' => '蓝田县',
                'region_level' => 3,
                'parent_region_code' => '610100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'region_code' => '610124',
                'region_name' => '周至县',
                'region_level' => 3,
                'parent_region_code' => '610100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'region_code' => '610125',
                'region_name' => '户县',
                'region_level' => 3,
                'parent_region_code' => '610100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'region_code' => '610126',
                'region_name' => '高陵县',
                'region_level' => 3,
                'parent_region_code' => '610100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'region_code' => '610200',
                'region_name' => '铜川市',
                'region_level' => 2,
                'parent_region_code' => '610000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'region_code' => '610201',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '610200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'region_code' => '610202',
                'region_name' => '王益区',
                'region_level' => 3,
                'parent_region_code' => '610200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'region_code' => '610203',
                'region_name' => '印台区',
                'region_level' => 3,
                'parent_region_code' => '610200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'region_code' => '610204',
                'region_name' => '耀州区',
                'region_level' => 3,
                'parent_region_code' => '610200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'region_code' => '610222',
                'region_name' => '宜君县',
                'region_level' => 3,
                'parent_region_code' => '610200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'region_code' => '610300',
                'region_name' => '宝鸡市',
                'region_level' => 2,
                'parent_region_code' => '610000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'region_code' => '610301',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '610300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'region_code' => '610302',
                'region_name' => '渭滨区',
                'region_level' => 3,
                'parent_region_code' => '610300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'region_code' => '610303',
                'region_name' => '金台区',
                'region_level' => 3,
                'parent_region_code' => '610300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'region_code' => '610304',
                'region_name' => '陈仓区',
                'region_level' => 3,
                'parent_region_code' => '610300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'region_code' => '610322',
                'region_name' => '凤翔县',
                'region_level' => 3,
                'parent_region_code' => '610300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'region_code' => '610323',
                'region_name' => '岐山县',
                'region_level' => 3,
                'parent_region_code' => '610300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'region_code' => '610324',
                'region_name' => '扶风县',
                'region_level' => 3,
                'parent_region_code' => '610300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'region_code' => '610326',
                'region_name' => '眉县',
                'region_level' => 3,
                'parent_region_code' => '610300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'region_code' => '610327',
                'region_name' => '陇县',
                'region_level' => 3,
                'parent_region_code' => '610300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'region_code' => '610328',
                'region_name' => '千阳县',
                'region_level' => 3,
                'parent_region_code' => '610300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'region_code' => '610329',
                'region_name' => '麟游县',
                'region_level' => 3,
                'parent_region_code' => '610300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'region_code' => '610330',
                'region_name' => '凤县',
                'region_level' => 3,
                'parent_region_code' => '610300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'region_code' => '610331',
                'region_name' => '太白县',
                'region_level' => 3,
                'parent_region_code' => '610300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'region_code' => '610400',
                'region_name' => '咸阳市',
                'region_level' => 2,
                'parent_region_code' => '610000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'region_code' => '610401',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '610400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'region_code' => '610402',
                'region_name' => '秦都区',
                'region_level' => 3,
                'parent_region_code' => '610400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'region_code' => '610403',
                'region_name' => '杨陵区',
                'region_level' => 3,
                'parent_region_code' => '610400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'region_code' => '610404',
                'region_name' => '渭城区',
                'region_level' => 3,
                'parent_region_code' => '610400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'region_code' => '610422',
                'region_name' => '三原县',
                'region_level' => 3,
                'parent_region_code' => '610400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'region_code' => '610423',
                'region_name' => '泾阳县',
                'region_level' => 3,
                'parent_region_code' => '610400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'region_code' => '610424',
                'region_name' => '乾县',
                'region_level' => 3,
                'parent_region_code' => '610400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'region_code' => '610425',
                'region_name' => '礼泉县',
                'region_level' => 3,
                'parent_region_code' => '610400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'region_code' => '610426',
                'region_name' => '永寿县',
                'region_level' => 3,
                'parent_region_code' => '610400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'region_code' => '610427',
                'region_name' => '彬县',
                'region_level' => 3,
                'parent_region_code' => '610400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'region_code' => '610428',
                'region_name' => '长武县',
                'region_level' => 3,
                'parent_region_code' => '610400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'region_code' => '610429',
                'region_name' => '旬邑县',
                'region_level' => 3,
                'parent_region_code' => '610400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'region_code' => '610430',
                'region_name' => '淳化县',
                'region_level' => 3,
                'parent_region_code' => '610400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'region_code' => '610431',
                'region_name' => '武功县',
                'region_level' => 3,
                'parent_region_code' => '610400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'region_code' => '610481',
                'region_name' => '兴平市',
                'region_level' => 3,
                'parent_region_code' => '610500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'region_code' => '610500',
                'region_name' => '渭南市',
                'region_level' => 2,
                'parent_region_code' => '610000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'region_code' => '610501',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '610500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'region_code' => '610502',
                'region_name' => '临渭区',
                'region_level' => 3,
                'parent_region_code' => '610500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'region_code' => '610521',
                'region_name' => '华县',
                'region_level' => 3,
                'parent_region_code' => '610500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'region_code' => '610522',
                'region_name' => '潼关县',
                'region_level' => 3,
                'parent_region_code' => '610500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'region_code' => '610523',
                'region_name' => '大荔县',
                'region_level' => 3,
                'parent_region_code' => '610500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'region_code' => '610524',
                'region_name' => '合阳县',
                'region_level' => 3,
                'parent_region_code' => '610500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'region_code' => '610525',
                'region_name' => '澄城县',
                'region_level' => 3,
                'parent_region_code' => '610500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'region_code' => '610526',
                'region_name' => '蒲城县',
                'region_level' => 3,
                'parent_region_code' => '610500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'region_code' => '610527',
                'region_name' => '白水县',
                'region_level' => 3,
                'parent_region_code' => '610500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'region_code' => '610528',
                'region_name' => '富平县',
                'region_level' => 3,
                'parent_region_code' => '610500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'region_code' => '610581',
                'region_name' => '韩城市',
                'region_level' => 3,
                'parent_region_code' => '610600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'region_code' => '610582',
                'region_name' => '华阴市',
                'region_level' => 3,
                'parent_region_code' => '610600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'region_code' => '610600',
                'region_name' => '延安市',
                'region_level' => 2,
                'parent_region_code' => '610000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'region_code' => '610601',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '610600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'region_code' => '610602',
                'region_name' => '宝塔区',
                'region_level' => 3,
                'parent_region_code' => '610600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'region_code' => '610621',
                'region_name' => '延长县',
                'region_level' => 3,
                'parent_region_code' => '610600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'region_code' => '610622',
                'region_name' => '延川县',
                'region_level' => 3,
                'parent_region_code' => '610600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'region_code' => '610623',
                'region_name' => '子长县',
                'region_level' => 3,
                'parent_region_code' => '610600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'region_code' => '610624',
                'region_name' => '安塞县',
                'region_level' => 3,
                'parent_region_code' => '610600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'region_code' => '610625',
                'region_name' => '志丹县',
                'region_level' => 3,
                'parent_region_code' => '610600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'region_code' => '610626',
                'region_name' => '吴起县',
                'region_level' => 3,
                'parent_region_code' => '610600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'region_code' => '610627',
                'region_name' => '甘泉县',
                'region_level' => 3,
                'parent_region_code' => '610600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'region_code' => '610628',
                'region_name' => '富县',
                'region_level' => 3,
                'parent_region_code' => '610600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'region_code' => '610629',
                'region_name' => '洛川县',
                'region_level' => 3,
                'parent_region_code' => '610600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'region_code' => '610630',
                'region_name' => '宜川县',
                'region_level' => 3,
                'parent_region_code' => '610600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'region_code' => '610631',
                'region_name' => '黄龙县',
                'region_level' => 3,
                'parent_region_code' => '610600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'region_code' => '610632',
                'region_name' => '黄陵县',
                'region_level' => 3,
                'parent_region_code' => '610600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'region_code' => '610700',
                'region_name' => '汉中市',
                'region_level' => 2,
                'parent_region_code' => '610000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'region_code' => '610701',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '610700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'region_code' => '610702',
                'region_name' => '汉台区',
                'region_level' => 3,
                'parent_region_code' => '610700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'region_code' => '610721',
                'region_name' => '南郑县',
                'region_level' => 3,
                'parent_region_code' => '610700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'region_code' => '610722',
                'region_name' => '城固县',
                'region_level' => 3,
                'parent_region_code' => '610700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'region_code' => '610723',
                'region_name' => '洋县',
                'region_level' => 3,
                'parent_region_code' => '610700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'region_code' => '610724',
                'region_name' => '西乡县',
                'region_level' => 3,
                'parent_region_code' => '610700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'region_code' => '610725',
                'region_name' => '勉县',
                'region_level' => 3,
                'parent_region_code' => '610700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'region_code' => '610726',
                'region_name' => '宁强县',
                'region_level' => 3,
                'parent_region_code' => '610700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'region_code' => '610727',
                'region_name' => '略阳县',
                'region_level' => 3,
                'parent_region_code' => '610700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'region_code' => '610728',
                'region_name' => '镇巴县',
                'region_level' => 3,
                'parent_region_code' => '610700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'region_code' => '610729',
                'region_name' => '留坝县',
                'region_level' => 3,
                'parent_region_code' => '610700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'region_code' => '610730',
                'region_name' => '佛坪县',
                'region_level' => 3,
                'parent_region_code' => '610700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'region_code' => '610800',
                'region_name' => '榆林市',
                'region_level' => 2,
                'parent_region_code' => '610000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'region_code' => '610801',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '610800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'region_code' => '610802',
                'region_name' => '榆阳区',
                'region_level' => 3,
                'parent_region_code' => '610800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'region_code' => '610821',
                'region_name' => '神木县',
                'region_level' => 3,
                'parent_region_code' => '610800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'region_code' => '610822',
                'region_name' => '府谷县',
                'region_level' => 3,
                'parent_region_code' => '610800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'region_code' => '610823',
                'region_name' => '横山县',
                'region_level' => 3,
                'parent_region_code' => '610800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'region_code' => '610824',
                'region_name' => '靖边县',
                'region_level' => 3,
                'parent_region_code' => '610800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'region_code' => '610825',
                'region_name' => '定边县',
                'region_level' => 3,
                'parent_region_code' => '610800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'region_code' => '610826',
                'region_name' => '绥德县',
                'region_level' => 3,
                'parent_region_code' => '610800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'region_code' => '610827',
                'region_name' => '米脂县',
                'region_level' => 3,
                'parent_region_code' => '610800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'region_code' => '610828',
                'region_name' => '佳县',
                'region_level' => 3,
                'parent_region_code' => '610800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'region_code' => '610829',
                'region_name' => '吴堡县',
                'region_level' => 3,
                'parent_region_code' => '610800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'region_code' => '610830',
                'region_name' => '清涧县',
                'region_level' => 3,
                'parent_region_code' => '610800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'region_code' => '610831',
                'region_name' => '子洲县',
                'region_level' => 3,
                'parent_region_code' => '610800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'region_code' => '610900',
                'region_name' => '安康市',
                'region_level' => 2,
                'parent_region_code' => '610000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'region_code' => '610901',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '610900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'region_code' => '610902',
                'region_name' => '汉滨区',
                'region_level' => 3,
                'parent_region_code' => '610900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'region_code' => '610921',
                'region_name' => '汉阴县',
                'region_level' => 3,
                'parent_region_code' => '610900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'region_code' => '610922',
                'region_name' => '石泉县',
                'region_level' => 3,
                'parent_region_code' => '610900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'region_code' => '610923',
                'region_name' => '宁陕县',
                'region_level' => 3,
                'parent_region_code' => '610900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'region_code' => '610924',
                'region_name' => '紫阳县',
                'region_level' => 3,
                'parent_region_code' => '610900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'region_code' => '610925',
                'region_name' => '岚皋县',
                'region_level' => 3,
                'parent_region_code' => '610900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'region_code' => '610926',
                'region_name' => '平利县',
                'region_level' => 3,
                'parent_region_code' => '610900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'region_code' => '610927',
                'region_name' => '镇坪县',
                'region_level' => 3,
                'parent_region_code' => '610900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'region_code' => '610928',
                'region_name' => '旬阳县',
                'region_level' => 3,
                'parent_region_code' => '610900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'region_code' => '610929',
                'region_name' => '白河县',
                'region_level' => 3,
                'parent_region_code' => '610900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'region_code' => '611000',
                'region_name' => '商洛市',
                'region_level' => 2,
                'parent_region_code' => '610000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'region_code' => '611001',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '611000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'region_code' => '611002',
                'region_name' => '商州区',
                'region_level' => 3,
                'parent_region_code' => '611000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'region_code' => '611021',
                'region_name' => '洛南县',
                'region_level' => 3,
                'parent_region_code' => '611000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'region_code' => '611022',
                'region_name' => '丹凤县',
                'region_level' => 3,
                'parent_region_code' => '611000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'region_code' => '611023',
                'region_name' => '商南县',
                'region_level' => 3,
                'parent_region_code' => '611000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'region_code' => '611024',
                'region_name' => '山阳县',
                'region_level' => 3,
                'parent_region_code' => '611000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'region_code' => '611025',
                'region_name' => '镇安县',
                'region_level' => 3,
                'parent_region_code' => '611000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'region_code' => '611026',
                'region_name' => '柞水县',
                'region_level' => 3,
                'parent_region_code' => '611000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'region_code' => '620000',
                'region_name' => '甘肃省',
                'region_level' => 1,
                'parent_region_code' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'region_code' => '620100',
                'region_name' => '兰州市',
                'region_level' => 2,
                'parent_region_code' => '620000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'region_code' => '620101',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '620100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'region_code' => '620102',
                'region_name' => '城关区',
                'region_level' => 3,
                'parent_region_code' => '620100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'region_code' => '620103',
                'region_name' => '七里河区',
                'region_level' => 3,
                'parent_region_code' => '620100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'region_code' => '620104',
                'region_name' => '西固区',
                'region_level' => 3,
                'parent_region_code' => '620100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'region_code' => '620105',
                'region_name' => '安宁区',
                'region_level' => 3,
                'parent_region_code' => '620100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'region_code' => '620111',
                'region_name' => '红古区',
                'region_level' => 3,
                'parent_region_code' => '620100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'region_code' => '620121',
                'region_name' => '永登县',
                'region_level' => 3,
                'parent_region_code' => '620100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'region_code' => '620122',
                'region_name' => '皋兰县',
                'region_level' => 3,
                'parent_region_code' => '620100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'region_code' => '620123',
                'region_name' => '榆中县',
                'region_level' => 3,
                'parent_region_code' => '620100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'region_code' => '620200',
                'region_name' => '嘉峪关市',
                'region_level' => 2,
                'parent_region_code' => '620000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'region_code' => '620201',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '620200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'region_code' => '620300',
                'region_name' => '金昌市',
                'region_level' => 2,
                'parent_region_code' => '620000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'region_code' => '620301',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '620300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'region_code' => '620302',
                'region_name' => '金川区',
                'region_level' => 3,
                'parent_region_code' => '620300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'region_code' => '620321',
                'region_name' => '永昌县',
                'region_level' => 3,
                'parent_region_code' => '620300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'region_code' => '620400',
                'region_name' => '白银市',
                'region_level' => 2,
                'parent_region_code' => '620000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'region_code' => '620401',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '620400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'region_code' => '620402',
                'region_name' => '白银区',
                'region_level' => 3,
                'parent_region_code' => '620400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'region_code' => '620403',
                'region_name' => '平川区',
                'region_level' => 3,
                'parent_region_code' => '620400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'region_code' => '620421',
                'region_name' => '靖远县',
                'region_level' => 3,
                'parent_region_code' => '620400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'region_code' => '620422',
                'region_name' => '会宁县',
                'region_level' => 3,
                'parent_region_code' => '620400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'region_code' => '620423',
                'region_name' => '景泰县',
                'region_level' => 3,
                'parent_region_code' => '620400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'region_code' => '620500',
                'region_name' => '天水市',
                'region_level' => 2,
                'parent_region_code' => '620000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'region_code' => '620501',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '620500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'region_code' => '620502',
                'region_name' => '秦州区',
                'region_level' => 3,
                'parent_region_code' => '620500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'region_code' => '620503',
                'region_name' => '麦积区',
                'region_level' => 3,
                'parent_region_code' => '620500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'region_code' => '620521',
                'region_name' => '清水县',
                'region_level' => 3,
                'parent_region_code' => '620500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'region_code' => '620522',
                'region_name' => '秦安县',
                'region_level' => 3,
                'parent_region_code' => '620500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'region_code' => '620523',
                'region_name' => '甘谷县',
                'region_level' => 3,
                'parent_region_code' => '620500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('regions')->insert(array (
            0 => 
            array (
                'region_code' => '620524',
                'region_name' => '武山县',
                'region_level' => 3,
                'parent_region_code' => '620500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'region_code' => '620525',
                'region_name' => '张家川回族自治县',
                'region_level' => 3,
                'parent_region_code' => '620500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'region_code' => '620600',
                'region_name' => '武威市',
                'region_level' => 2,
                'parent_region_code' => '620000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'region_code' => '620601',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '620600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'region_code' => '620602',
                'region_name' => '凉州区',
                'region_level' => 3,
                'parent_region_code' => '620600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'region_code' => '620621',
                'region_name' => '民勤县',
                'region_level' => 3,
                'parent_region_code' => '620600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'region_code' => '620622',
                'region_name' => '古浪县',
                'region_level' => 3,
                'parent_region_code' => '620600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'region_code' => '620623',
                'region_name' => '天祝藏族自治县',
                'region_level' => 3,
                'parent_region_code' => '620600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'region_code' => '620700',
                'region_name' => '张掖市',
                'region_level' => 2,
                'parent_region_code' => '620000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'region_code' => '620701',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '620700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'region_code' => '620702',
                'region_name' => '甘州区',
                'region_level' => 3,
                'parent_region_code' => '620700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'region_code' => '620721',
                'region_name' => '肃南裕固族自治县',
                'region_level' => 3,
                'parent_region_code' => '620700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'region_code' => '620722',
                'region_name' => '民乐县',
                'region_level' => 3,
                'parent_region_code' => '620700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'region_code' => '620723',
                'region_name' => '临泽县',
                'region_level' => 3,
                'parent_region_code' => '620700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'region_code' => '620724',
                'region_name' => '高台县',
                'region_level' => 3,
                'parent_region_code' => '620700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'region_code' => '620725',
                'region_name' => '山丹县',
                'region_level' => 3,
                'parent_region_code' => '620700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'region_code' => '620800',
                'region_name' => '平凉市',
                'region_level' => 2,
                'parent_region_code' => '620000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'region_code' => '620801',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '620800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'region_code' => '620802',
                'region_name' => '崆峒区',
                'region_level' => 3,
                'parent_region_code' => '620800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'region_code' => '620821',
                'region_name' => '泾川县',
                'region_level' => 3,
                'parent_region_code' => '620800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'region_code' => '620822',
                'region_name' => '灵台县',
                'region_level' => 3,
                'parent_region_code' => '620800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'region_code' => '620823',
                'region_name' => '崇信县',
                'region_level' => 3,
                'parent_region_code' => '620800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'region_code' => '620824',
                'region_name' => '华亭县',
                'region_level' => 3,
                'parent_region_code' => '620800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'region_code' => '620825',
                'region_name' => '庄浪县',
                'region_level' => 3,
                'parent_region_code' => '620800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'region_code' => '620826',
                'region_name' => '静宁县',
                'region_level' => 3,
                'parent_region_code' => '620800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'region_code' => '620900',
                'region_name' => '酒泉市',
                'region_level' => 2,
                'parent_region_code' => '620000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'region_code' => '620901',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '620900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'region_code' => '620902',
                'region_name' => '肃州区',
                'region_level' => 3,
                'parent_region_code' => '620900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'region_code' => '620921',
                'region_name' => '金塔县',
                'region_level' => 3,
                'parent_region_code' => '620900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'region_code' => '620922',
                'region_name' => '瓜州县',
                'region_level' => 3,
                'parent_region_code' => '620900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'region_code' => '620923',
                'region_name' => '肃北蒙古族自治县',
                'region_level' => 3,
                'parent_region_code' => '620900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'region_code' => '620924',
                'region_name' => '阿克塞哈萨克族自治县',
                'region_level' => 3,
                'parent_region_code' => '620900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'region_code' => '620981',
                'region_name' => '玉门市',
                'region_level' => 3,
                'parent_region_code' => '621000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'region_code' => '620982',
                'region_name' => '敦煌市',
                'region_level' => 3,
                'parent_region_code' => '621000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'region_code' => '621000',
                'region_name' => '庆阳市',
                'region_level' => 2,
                'parent_region_code' => '620000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'region_code' => '621001',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '621000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'region_code' => '621002',
                'region_name' => '西峰区',
                'region_level' => 3,
                'parent_region_code' => '621000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'region_code' => '621021',
                'region_name' => '庆城县',
                'region_level' => 3,
                'parent_region_code' => '621000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'region_code' => '621022',
                'region_name' => '环县',
                'region_level' => 3,
                'parent_region_code' => '621000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'region_code' => '621023',
                'region_name' => '华池县',
                'region_level' => 3,
                'parent_region_code' => '621000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'region_code' => '621024',
                'region_name' => '合水县',
                'region_level' => 3,
                'parent_region_code' => '621000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'region_code' => '621025',
                'region_name' => '正宁县',
                'region_level' => 3,
                'parent_region_code' => '621000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'region_code' => '621026',
                'region_name' => '宁县',
                'region_level' => 3,
                'parent_region_code' => '621000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'region_code' => '621027',
                'region_name' => '镇原县',
                'region_level' => 3,
                'parent_region_code' => '621000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'region_code' => '621100',
                'region_name' => '定西市',
                'region_level' => 2,
                'parent_region_code' => '620000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'region_code' => '621101',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '621100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'region_code' => '621102',
                'region_name' => '安定区',
                'region_level' => 3,
                'parent_region_code' => '621100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'region_code' => '621121',
                'region_name' => '通渭县',
                'region_level' => 3,
                'parent_region_code' => '621100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'region_code' => '621122',
                'region_name' => '陇西县',
                'region_level' => 3,
                'parent_region_code' => '621100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'region_code' => '621123',
                'region_name' => '渭源县',
                'region_level' => 3,
                'parent_region_code' => '621100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'region_code' => '621124',
                'region_name' => '临洮县',
                'region_level' => 3,
                'parent_region_code' => '621100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'region_code' => '621125',
                'region_name' => '漳县',
                'region_level' => 3,
                'parent_region_code' => '621100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'region_code' => '621126',
                'region_name' => '岷县',
                'region_level' => 3,
                'parent_region_code' => '621100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'region_code' => '621200',
                'region_name' => '陇南市',
                'region_level' => 2,
                'parent_region_code' => '620000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'region_code' => '621201',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '621200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'region_code' => '621202',
                'region_name' => '武都区',
                'region_level' => 3,
                'parent_region_code' => '621200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'region_code' => '621221',
                'region_name' => '成县',
                'region_level' => 3,
                'parent_region_code' => '621200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'region_code' => '621222',
                'region_name' => '文县',
                'region_level' => 3,
                'parent_region_code' => '621200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'region_code' => '621223',
                'region_name' => '宕昌县',
                'region_level' => 3,
                'parent_region_code' => '621200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'region_code' => '621224',
                'region_name' => '康县',
                'region_level' => 3,
                'parent_region_code' => '621200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'region_code' => '621225',
                'region_name' => '西和县',
                'region_level' => 3,
                'parent_region_code' => '621200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'region_code' => '621226',
                'region_name' => '礼县',
                'region_level' => 3,
                'parent_region_code' => '621200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'region_code' => '621227',
                'region_name' => '徽县',
                'region_level' => 3,
                'parent_region_code' => '621200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'region_code' => '621228',
                'region_name' => '两当县',
                'region_level' => 3,
                'parent_region_code' => '621200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'region_code' => '622900',
                'region_name' => '临夏回族自治州',
                'region_level' => 2,
                'parent_region_code' => '620000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'region_code' => '622901',
                'region_name' => '临夏市',
                'region_level' => 3,
                'parent_region_code' => '622900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'region_code' => '622921',
                'region_name' => '临夏县',
                'region_level' => 3,
                'parent_region_code' => '622900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'region_code' => '622922',
                'region_name' => '康乐县',
                'region_level' => 3,
                'parent_region_code' => '622900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'region_code' => '622923',
                'region_name' => '永靖县',
                'region_level' => 3,
                'parent_region_code' => '622900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'region_code' => '622924',
                'region_name' => '广河县',
                'region_level' => 3,
                'parent_region_code' => '622900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'region_code' => '622925',
                'region_name' => '和政县',
                'region_level' => 3,
                'parent_region_code' => '622900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'region_code' => '622926',
                'region_name' => '东乡族自治县',
                'region_level' => 3,
                'parent_region_code' => '622900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'region_code' => '622927',
                'region_name' => '积石山保安族东乡族撒拉族自治县',
                'region_level' => 3,
                'parent_region_code' => '622900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'region_code' => '623000',
                'region_name' => '甘南藏族自治州',
                'region_level' => 2,
                'parent_region_code' => '620000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'region_code' => '623001',
                'region_name' => '合作市',
                'region_level' => 3,
                'parent_region_code' => '623000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'region_code' => '623021',
                'region_name' => '临潭县',
                'region_level' => 3,
                'parent_region_code' => '623000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'region_code' => '623022',
                'region_name' => '卓尼县',
                'region_level' => 3,
                'parent_region_code' => '623000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'region_code' => '623023',
                'region_name' => '舟曲县',
                'region_level' => 3,
                'parent_region_code' => '623000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'region_code' => '623024',
                'region_name' => '迭部县',
                'region_level' => 3,
                'parent_region_code' => '623000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'region_code' => '623025',
                'region_name' => '玛曲县',
                'region_level' => 3,
                'parent_region_code' => '623000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'region_code' => '623026',
                'region_name' => '碌曲县',
                'region_level' => 3,
                'parent_region_code' => '623000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'region_code' => '623027',
                'region_name' => '夏河县',
                'region_level' => 3,
                'parent_region_code' => '623000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'region_code' => '630000',
                'region_name' => '青海省',
                'region_level' => 1,
                'parent_region_code' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'region_code' => '630100',
                'region_name' => '西宁市',
                'region_level' => 2,
                'parent_region_code' => '630000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'region_code' => '630101',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '630100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'region_code' => '630102',
                'region_name' => '城东区',
                'region_level' => 3,
                'parent_region_code' => '630100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'region_code' => '630103',
                'region_name' => '城中区',
                'region_level' => 3,
                'parent_region_code' => '630100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'region_code' => '630104',
                'region_name' => '城西区',
                'region_level' => 3,
                'parent_region_code' => '630100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'region_code' => '630105',
                'region_name' => '城北区',
                'region_level' => 3,
                'parent_region_code' => '630100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'region_code' => '630121',
                'region_name' => '大通回族土族自治县',
                'region_level' => 3,
                'parent_region_code' => '630100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'region_code' => '630122',
                'region_name' => '湟中县',
                'region_level' => 3,
                'parent_region_code' => '630100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'region_code' => '630123',
                'region_name' => '湟源县',
                'region_level' => 3,
                'parent_region_code' => '630100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'region_code' => '632100',
                'region_name' => '海东地区',
                'region_level' => 2,
                'parent_region_code' => '630000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'region_code' => '632121',
                'region_name' => '平安县',
                'region_level' => 3,
                'parent_region_code' => '632100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'region_code' => '632122',
                'region_name' => '民和回族土族自治县',
                'region_level' => 3,
                'parent_region_code' => '632100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'region_code' => '632123',
                'region_name' => '乐都县',
                'region_level' => 3,
                'parent_region_code' => '632100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'region_code' => '632126',
                'region_name' => '互助土族自治县',
                'region_level' => 3,
                'parent_region_code' => '632100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'region_code' => '632127',
                'region_name' => '化隆回族自治县',
                'region_level' => 3,
                'parent_region_code' => '632100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'region_code' => '632128',
                'region_name' => '循化撒拉族自治县',
                'region_level' => 3,
                'parent_region_code' => '632100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'region_code' => '632200',
                'region_name' => '海北藏族自治州',
                'region_level' => 2,
                'parent_region_code' => '630000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'region_code' => '632221',
                'region_name' => '门源回族自治县',
                'region_level' => 3,
                'parent_region_code' => '632200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'region_code' => '632222',
                'region_name' => '祁连县',
                'region_level' => 3,
                'parent_region_code' => '632200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'region_code' => '632223',
                'region_name' => '海晏县',
                'region_level' => 3,
                'parent_region_code' => '632200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'region_code' => '632224',
                'region_name' => '刚察县',
                'region_level' => 3,
                'parent_region_code' => '632200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'region_code' => '632300',
                'region_name' => '黄南藏族自治州',
                'region_level' => 2,
                'parent_region_code' => '630000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'region_code' => '632321',
                'region_name' => '同仁县',
                'region_level' => 3,
                'parent_region_code' => '632300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'region_code' => '632322',
                'region_name' => '尖扎县',
                'region_level' => 3,
                'parent_region_code' => '632300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'region_code' => '632323',
                'region_name' => '泽库县',
                'region_level' => 3,
                'parent_region_code' => '632300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'region_code' => '632324',
                'region_name' => '河南蒙古族自治县',
                'region_level' => 3,
                'parent_region_code' => '632300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'region_code' => '632500',
                'region_name' => '海南藏族自治州',
                'region_level' => 2,
                'parent_region_code' => '630000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'region_code' => '632521',
                'region_name' => '共和县',
                'region_level' => 3,
                'parent_region_code' => '632500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'region_code' => '632522',
                'region_name' => '同德县',
                'region_level' => 3,
                'parent_region_code' => '632500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'region_code' => '632523',
                'region_name' => '贵德县',
                'region_level' => 3,
                'parent_region_code' => '632500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'region_code' => '632524',
                'region_name' => '兴海县',
                'region_level' => 3,
                'parent_region_code' => '632500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'region_code' => '632525',
                'region_name' => '贵南县',
                'region_level' => 3,
                'parent_region_code' => '632500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'region_code' => '632600',
                'region_name' => '果洛藏族自治州',
                'region_level' => 2,
                'parent_region_code' => '630000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'region_code' => '632621',
                'region_name' => '玛沁县',
                'region_level' => 3,
                'parent_region_code' => '632600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'region_code' => '632622',
                'region_name' => '班玛县',
                'region_level' => 3,
                'parent_region_code' => '632600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'region_code' => '632623',
                'region_name' => '甘德县',
                'region_level' => 3,
                'parent_region_code' => '632600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'region_code' => '632624',
                'region_name' => '达日县',
                'region_level' => 3,
                'parent_region_code' => '632600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'region_code' => '632625',
                'region_name' => '久治县',
                'region_level' => 3,
                'parent_region_code' => '632600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'region_code' => '632626',
                'region_name' => '玛多县',
                'region_level' => 3,
                'parent_region_code' => '632600',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'region_code' => '632700',
                'region_name' => '玉树藏族自治州',
                'region_level' => 2,
                'parent_region_code' => '630000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'region_code' => '632721',
                'region_name' => '玉树县',
                'region_level' => 3,
                'parent_region_code' => '632700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'region_code' => '632722',
                'region_name' => '杂多县',
                'region_level' => 3,
                'parent_region_code' => '632700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'region_code' => '632723',
                'region_name' => '称多县',
                'region_level' => 3,
                'parent_region_code' => '632700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'region_code' => '632724',
                'region_name' => '治多县',
                'region_level' => 3,
                'parent_region_code' => '632700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'region_code' => '632725',
                'region_name' => '囊谦县',
                'region_level' => 3,
                'parent_region_code' => '632700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'region_code' => '632726',
                'region_name' => '曲麻莱县',
                'region_level' => 3,
                'parent_region_code' => '632700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'region_code' => '632800',
                'region_name' => '海西蒙古族藏族自治州',
                'region_level' => 2,
                'parent_region_code' => '630000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'region_code' => '632801',
                'region_name' => '格尔木市',
                'region_level' => 3,
                'parent_region_code' => '632800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'region_code' => '632802',
                'region_name' => '德令哈市',
                'region_level' => 3,
                'parent_region_code' => '632800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'region_code' => '632821',
                'region_name' => '乌兰县',
                'region_level' => 3,
                'parent_region_code' => '632800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'region_code' => '632822',
                'region_name' => '都兰县',
                'region_level' => 3,
                'parent_region_code' => '632800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'region_code' => '632823',
                'region_name' => '天峻县',
                'region_level' => 3,
                'parent_region_code' => '632800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'region_code' => '640000',
                'region_name' => '宁夏回族自治区',
                'region_level' => 1,
                'parent_region_code' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'region_code' => '640100',
                'region_name' => '银川市',
                'region_level' => 2,
                'parent_region_code' => '640000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'region_code' => '640101',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '640100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'region_code' => '640104',
                'region_name' => '兴庆区',
                'region_level' => 3,
                'parent_region_code' => '640100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'region_code' => '640105',
                'region_name' => '西夏区',
                'region_level' => 3,
                'parent_region_code' => '640100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'region_code' => '640106',
                'region_name' => '金凤区',
                'region_level' => 3,
                'parent_region_code' => '640100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'region_code' => '640121',
                'region_name' => '永宁县',
                'region_level' => 3,
                'parent_region_code' => '640100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'region_code' => '640122',
                'region_name' => '贺兰县',
                'region_level' => 3,
                'parent_region_code' => '640100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'region_code' => '640181',
                'region_name' => '灵武市',
                'region_level' => 3,
                'parent_region_code' => '640200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'region_code' => '640200',
                'region_name' => '石嘴山市',
                'region_level' => 2,
                'parent_region_code' => '640000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'region_code' => '640201',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '640200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'region_code' => '640202',
                'region_name' => '大武口区',
                'region_level' => 3,
                'parent_region_code' => '640200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'region_code' => '640205',
                'region_name' => '惠农区',
                'region_level' => 3,
                'parent_region_code' => '640200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'region_code' => '640221',
                'region_name' => '平罗县',
                'region_level' => 3,
                'parent_region_code' => '640200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'region_code' => '640300',
                'region_name' => '吴忠市',
                'region_level' => 2,
                'parent_region_code' => '640000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'region_code' => '640301',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '640300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'region_code' => '640302',
                'region_name' => '利通区',
                'region_level' => 3,
                'parent_region_code' => '640300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'region_code' => '640303',
                'region_name' => '红寺堡区',
                'region_level' => 3,
                'parent_region_code' => '640300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'region_code' => '640323',
                'region_name' => '盐池县',
                'region_level' => 3,
                'parent_region_code' => '640300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'region_code' => '640324',
                'region_name' => '同心县',
                'region_level' => 3,
                'parent_region_code' => '640300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'region_code' => '640381',
                'region_name' => '青铜峡市',
                'region_level' => 3,
                'parent_region_code' => '640400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'region_code' => '640400',
                'region_name' => '固原市',
                'region_level' => 2,
                'parent_region_code' => '640000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'region_code' => '640401',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '640400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'region_code' => '640402',
                'region_name' => '原州区',
                'region_level' => 3,
                'parent_region_code' => '640400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'region_code' => '640422',
                'region_name' => '西吉县',
                'region_level' => 3,
                'parent_region_code' => '640400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'region_code' => '640423',
                'region_name' => '隆德县',
                'region_level' => 3,
                'parent_region_code' => '640400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'region_code' => '640424',
                'region_name' => '泾源县',
                'region_level' => 3,
                'parent_region_code' => '640400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'region_code' => '640425',
                'region_name' => '彭阳县',
                'region_level' => 3,
                'parent_region_code' => '640400',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'region_code' => '640500',
                'region_name' => '中卫市',
                'region_level' => 2,
                'parent_region_code' => '640000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'region_code' => '640501',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '640500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'region_code' => '640502',
                'region_name' => '沙坡头区',
                'region_level' => 3,
                'parent_region_code' => '640500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'region_code' => '640521',
                'region_name' => '中宁县',
                'region_level' => 3,
                'parent_region_code' => '640500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'region_code' => '640522',
                'region_name' => '海原县',
                'region_level' => 3,
                'parent_region_code' => '640500',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'region_code' => '650000',
                'region_name' => '新疆维吾尔自治区',
                'region_level' => 1,
                'parent_region_code' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'region_code' => '650100',
                'region_name' => '乌鲁木齐市',
                'region_level' => 2,
                'parent_region_code' => '650000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'region_code' => '650101',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '650100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'region_code' => '650102',
                'region_name' => '天山区',
                'region_level' => 3,
                'parent_region_code' => '650100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'region_code' => '650103',
                'region_name' => '沙依巴克区',
                'region_level' => 3,
                'parent_region_code' => '650100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'region_code' => '650104',
                'region_name' => '新市区',
                'region_level' => 3,
                'parent_region_code' => '650100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'region_code' => '650105',
                'region_name' => '水磨沟区',
                'region_level' => 3,
                'parent_region_code' => '650100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'region_code' => '650106',
                'region_name' => '头屯河区',
                'region_level' => 3,
                'parent_region_code' => '650100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'region_code' => '650107',
                'region_name' => '达坂城区',
                'region_level' => 3,
                'parent_region_code' => '650100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'region_code' => '650109',
                'region_name' => '米东区',
                'region_level' => 3,
                'parent_region_code' => '650100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'region_code' => '650121',
                'region_name' => '乌鲁木齐县',
                'region_level' => 3,
                'parent_region_code' => '650100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'region_code' => '650200',
                'region_name' => '克拉玛依市',
                'region_level' => 2,
                'parent_region_code' => '650000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'region_code' => '650201',
                'region_name' => '市辖区',
                'region_level' => 3,
                'parent_region_code' => '650200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'region_code' => '650202',
                'region_name' => '独山子区',
                'region_level' => 3,
                'parent_region_code' => '650200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'region_code' => '650203',
                'region_name' => '克拉玛依区',
                'region_level' => 3,
                'parent_region_code' => '650200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'region_code' => '650204',
                'region_name' => '白碱滩区',
                'region_level' => 3,
                'parent_region_code' => '650200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'region_code' => '650205',
                'region_name' => '乌尔禾区',
                'region_level' => 3,
                'parent_region_code' => '650200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'region_code' => '652100',
                'region_name' => '吐鲁番地区',
                'region_level' => 2,
                'parent_region_code' => '650000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'region_code' => '652101',
                'region_name' => '吐鲁番市',
                'region_level' => 3,
                'parent_region_code' => '652100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'region_code' => '652122',
                'region_name' => '鄯善县',
                'region_level' => 3,
                'parent_region_code' => '652100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'region_code' => '652123',
                'region_name' => '托克逊县',
                'region_level' => 3,
                'parent_region_code' => '652100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'region_code' => '652200',
                'region_name' => '哈密地区',
                'region_level' => 2,
                'parent_region_code' => '650000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'region_code' => '652201',
                'region_name' => '哈密市',
                'region_level' => 3,
                'parent_region_code' => '652200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'region_code' => '652222',
                'region_name' => '巴里坤哈萨克自治县',
                'region_level' => 3,
                'parent_region_code' => '652200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'region_code' => '652223',
                'region_name' => '伊吾县',
                'region_level' => 3,
                'parent_region_code' => '652200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'region_code' => '652300',
                'region_name' => '昌吉回族自治州',
                'region_level' => 2,
                'parent_region_code' => '650000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'region_code' => '652301',
                'region_name' => '昌吉市',
                'region_level' => 3,
                'parent_region_code' => '652300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'region_code' => '652302',
                'region_name' => '阜康市',
                'region_level' => 3,
                'parent_region_code' => '652300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'region_code' => '652323',
                'region_name' => '呼图壁县',
                'region_level' => 3,
                'parent_region_code' => '652300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'region_code' => '652324',
                'region_name' => '玛纳斯县',
                'region_level' => 3,
                'parent_region_code' => '652300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'region_code' => '652325',
                'region_name' => '奇台县',
                'region_level' => 3,
                'parent_region_code' => '652300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'region_code' => '652327',
                'region_name' => '吉木萨尔县',
                'region_level' => 3,
                'parent_region_code' => '652300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'region_code' => '652328',
                'region_name' => '木垒哈萨克自治县',
                'region_level' => 3,
                'parent_region_code' => '652300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'region_code' => '652700',
                'region_name' => '博尔塔拉蒙古自治州',
                'region_level' => 2,
                'parent_region_code' => '650000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'region_code' => '652701',
                'region_name' => '博乐市',
                'region_level' => 3,
                'parent_region_code' => '652700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'region_code' => '652722',
                'region_name' => '精河县',
                'region_level' => 3,
                'parent_region_code' => '652700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'region_code' => '652723',
                'region_name' => '温泉县',
                'region_level' => 3,
                'parent_region_code' => '652700',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'region_code' => '652800',
                'region_name' => '巴音郭楞蒙古自治州',
                'region_level' => 2,
                'parent_region_code' => '650000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'region_code' => '652801',
                'region_name' => '库尔勒市',
                'region_level' => 3,
                'parent_region_code' => '652800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'region_code' => '652822',
                'region_name' => '轮台县',
                'region_level' => 3,
                'parent_region_code' => '652800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'region_code' => '652823',
                'region_name' => '尉犁县',
                'region_level' => 3,
                'parent_region_code' => '652800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'region_code' => '652824',
                'region_name' => '若羌县',
                'region_level' => 3,
                'parent_region_code' => '652800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'region_code' => '652825',
                'region_name' => '且末县',
                'region_level' => 3,
                'parent_region_code' => '652800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'region_code' => '652826',
                'region_name' => '焉耆回族自治县',
                'region_level' => 3,
                'parent_region_code' => '652800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'region_code' => '652827',
                'region_name' => '和静县',
                'region_level' => 3,
                'parent_region_code' => '652800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'region_code' => '652828',
                'region_name' => '和硕县',
                'region_level' => 3,
                'parent_region_code' => '652800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'region_code' => '652829',
                'region_name' => '博湖县',
                'region_level' => 3,
                'parent_region_code' => '652800',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'region_code' => '652900',
                'region_name' => '阿克苏地区',
                'region_level' => 2,
                'parent_region_code' => '650000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'region_code' => '652901',
                'region_name' => '阿克苏市',
                'region_level' => 3,
                'parent_region_code' => '652900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'region_code' => '652922',
                'region_name' => '温宿县',
                'region_level' => 3,
                'parent_region_code' => '652900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'region_code' => '652923',
                'region_name' => '库车县',
                'region_level' => 3,
                'parent_region_code' => '652900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'region_code' => '652924',
                'region_name' => '沙雅县',
                'region_level' => 3,
                'parent_region_code' => '652900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'region_code' => '652925',
                'region_name' => '新和县',
                'region_level' => 3,
                'parent_region_code' => '652900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'region_code' => '652926',
                'region_name' => '拜城县',
                'region_level' => 3,
                'parent_region_code' => '652900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'region_code' => '652927',
                'region_name' => '乌什县',
                'region_level' => 3,
                'parent_region_code' => '652900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'region_code' => '652928',
                'region_name' => '阿瓦提县',
                'region_level' => 3,
                'parent_region_code' => '652900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'region_code' => '652929',
                'region_name' => '柯坪县',
                'region_level' => 3,
                'parent_region_code' => '652900',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'region_code' => '653000',
                'region_name' => '克孜勒苏柯尔克孜自治州',
                'region_level' => 2,
                'parent_region_code' => '650000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'region_code' => '653001',
                'region_name' => '阿图什市',
                'region_level' => 3,
                'parent_region_code' => '653000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'region_code' => '653022',
                'region_name' => '阿克陶县',
                'region_level' => 3,
                'parent_region_code' => '653000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'region_code' => '653023',
                'region_name' => '阿合奇县',
                'region_level' => 3,
                'parent_region_code' => '653000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'region_code' => '653024',
                'region_name' => '乌恰县',
                'region_level' => 3,
                'parent_region_code' => '653000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'region_code' => '653100',
                'region_name' => '喀什地区',
                'region_level' => 2,
                'parent_region_code' => '650000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'region_code' => '653101',
                'region_name' => '喀什市',
                'region_level' => 3,
                'parent_region_code' => '653100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'region_code' => '653121',
                'region_name' => '疏附县',
                'region_level' => 3,
                'parent_region_code' => '653100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'region_code' => '653122',
                'region_name' => '疏勒县',
                'region_level' => 3,
                'parent_region_code' => '653100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'region_code' => '653123',
                'region_name' => '英吉沙县',
                'region_level' => 3,
                'parent_region_code' => '653100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'region_code' => '653124',
                'region_name' => '泽普县',
                'region_level' => 3,
                'parent_region_code' => '653100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'region_code' => '653125',
                'region_name' => '莎车县',
                'region_level' => 3,
                'parent_region_code' => '653100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'region_code' => '653126',
                'region_name' => '叶城县',
                'region_level' => 3,
                'parent_region_code' => '653100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'region_code' => '653127',
                'region_name' => '麦盖提县',
                'region_level' => 3,
                'parent_region_code' => '653100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'region_code' => '653128',
                'region_name' => '岳普湖县',
                'region_level' => 3,
                'parent_region_code' => '653100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'region_code' => '653129',
                'region_name' => '伽师县',
                'region_level' => 3,
                'parent_region_code' => '653100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'region_code' => '653130',
                'region_name' => '巴楚县',
                'region_level' => 3,
                'parent_region_code' => '653100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'region_code' => '653131',
                'region_name' => '塔什库尔干塔吉克自治县',
                'region_level' => 3,
                'parent_region_code' => '653100',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'region_code' => '653200',
                'region_name' => '和田地区',
                'region_level' => 2,
                'parent_region_code' => '650000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'region_code' => '653201',
                'region_name' => '和田市',
                'region_level' => 3,
                'parent_region_code' => '653200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'region_code' => '653221',
                'region_name' => '和田县',
                'region_level' => 3,
                'parent_region_code' => '653200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'region_code' => '653222',
                'region_name' => '墨玉县',
                'region_level' => 3,
                'parent_region_code' => '653200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'region_code' => '653223',
                'region_name' => '皮山县',
                'region_level' => 3,
                'parent_region_code' => '653200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'region_code' => '653224',
                'region_name' => '洛浦县',
                'region_level' => 3,
                'parent_region_code' => '653200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'region_code' => '653225',
                'region_name' => '策勒县',
                'region_level' => 3,
                'parent_region_code' => '653200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'region_code' => '653226',
                'region_name' => '于田县',
                'region_level' => 3,
                'parent_region_code' => '653200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'region_code' => '653227',
                'region_name' => '民丰县',
                'region_level' => 3,
                'parent_region_code' => '653200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'region_code' => '654000',
                'region_name' => '伊犁哈萨克自治州',
                'region_level' => 2,
                'parent_region_code' => '650000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'region_code' => '654002',
                'region_name' => '伊宁市',
                'region_level' => 3,
                'parent_region_code' => '654000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'region_code' => '654003',
                'region_name' => '奎屯市',
                'region_level' => 3,
                'parent_region_code' => '654000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'region_code' => '654021',
                'region_name' => '伊宁县',
                'region_level' => 3,
                'parent_region_code' => '654000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'region_code' => '654022',
                'region_name' => '察布查尔锡伯自治县',
                'region_level' => 3,
                'parent_region_code' => '654000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'region_code' => '654023',
                'region_name' => '霍城县',
                'region_level' => 3,
                'parent_region_code' => '654000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'region_code' => '654024',
                'region_name' => '巩留县',
                'region_level' => 3,
                'parent_region_code' => '654000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'region_code' => '654025',
                'region_name' => '新源县',
                'region_level' => 3,
                'parent_region_code' => '654000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'region_code' => '654026',
                'region_name' => '昭苏县',
                'region_level' => 3,
                'parent_region_code' => '654000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'region_code' => '654027',
                'region_name' => '特克斯县',
                'region_level' => 3,
                'parent_region_code' => '654000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'region_code' => '654028',
                'region_name' => '尼勒克县',
                'region_level' => 3,
                'parent_region_code' => '654000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'region_code' => '654200',
                'region_name' => '塔城地区',
                'region_level' => 2,
                'parent_region_code' => '650000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'region_code' => '654201',
                'region_name' => '塔城市',
                'region_level' => 3,
                'parent_region_code' => '654200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'region_code' => '654202',
                'region_name' => '乌苏市',
                'region_level' => 3,
                'parent_region_code' => '654200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'region_code' => '654221',
                'region_name' => '额敏县',
                'region_level' => 3,
                'parent_region_code' => '654200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'region_code' => '654223',
                'region_name' => '沙湾县',
                'region_level' => 3,
                'parent_region_code' => '654200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'region_code' => '654224',
                'region_name' => '托里县',
                'region_level' => 3,
                'parent_region_code' => '654200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'region_code' => '654225',
                'region_name' => '裕民县',
                'region_level' => 3,
                'parent_region_code' => '654200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'region_code' => '654226',
                'region_name' => '和布克赛尔蒙古自治县',
                'region_level' => 3,
                'parent_region_code' => '654200',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'region_code' => '654300',
                'region_name' => '阿勒泰地区',
                'region_level' => 2,
                'parent_region_code' => '650000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'region_code' => '654301',
                'region_name' => '阿勒泰市',
                'region_level' => 3,
                'parent_region_code' => '654300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'region_code' => '654321',
                'region_name' => '布尔津县',
                'region_level' => 3,
                'parent_region_code' => '654300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'region_code' => '654322',
                'region_name' => '富蕴县',
                'region_level' => 3,
                'parent_region_code' => '654300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'region_code' => '654323',
                'region_name' => '福海县',
                'region_level' => 3,
                'parent_region_code' => '654300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'region_code' => '654324',
                'region_name' => '哈巴河县',
                'region_level' => 3,
                'parent_region_code' => '654300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'region_code' => '654325',
                'region_name' => '青河县',
                'region_level' => 3,
                'parent_region_code' => '654300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'region_code' => '654326',
                'region_name' => '吉木乃县',
                'region_level' => 3,
                'parent_region_code' => '654300',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'region_code' => '659000',
                'region_name' => '自治区直辖县级行政区划',
                'region_level' => 2,
                'parent_region_code' => '660000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'region_code' => '659001',
                'region_name' => '石河子市',
                'region_level' => 3,
                'parent_region_code' => '659000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'region_code' => '659002',
                'region_name' => '阿拉尔市',
                'region_level' => 3,
                'parent_region_code' => '659000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'region_code' => '659003',
                'region_name' => '图木舒克市',
                'region_level' => 3,
                'parent_region_code' => '659000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'region_code' => '659004',
                'region_name' => '五家渠市',
                'region_level' => 3,
                'parent_region_code' => '659000',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'region_code' => '710000',
                'region_name' => '台湾省',
                'region_level' => 1,
                'parent_region_code' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'region_code' => '810000',
                'region_name' => '香港特别行政区',
                'region_level' => 1,
                'parent_region_code' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'region_code' => '820000',
                'region_name' => '澳门特别行政区',
                'region_level' => 1,
                'parent_region_code' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}