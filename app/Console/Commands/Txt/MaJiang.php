<?php

namespace App\Console\Commands\Txt;

use Illuminate\Console\Command;

class MaJiang extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'text:majiang';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '修改小说属性';

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
        $filename  = public_path('download/天才麻将少女之岭上雪花.txt');
        $filename1 = public_path('download/天才麻将少女之岭上雪花-校正.txt');
        $handle = fopen($filename, "r") or exit("Unable to open file!");

        while (!feof($handle)) {
            $encoding_type_list = array('GBK', 'UTF-8', 'UTF-16LE', 'UTF-16BE', 'ISO-8859-1', 'GB2312');
            $line               = fgets($handle);
            $encode             = mb_detect_encoding($line, $encoding_type_list);
            $str_encode         = mb_convert_encoding($line, 'UTF-8', $encode);
            $str_encode         = str_replace(['小?', '宫永?','龙门?','一?口平','上?','?椋','?助'], ['小咲', '宫永咲','龙门浏','一口平','上埜','柊椋','侘助'], $str_encode);
            file_put_contents($filename1, $str_encode . "\r\n", FILE_APPEND);
            $this->info($str_encode);
        }

    }

    function safeEncoding($string, $outEncoding = 'UTF-8')
    {
        $encoding = "UTF-8";
        for ($i = 0; $i < strlen($string); $i++) {
            if (ord($string{$i}) < 128)
                continue;
            if ((ord($string{$i}) & 224) == 224) {
                //第一个字节判断通过
                $char = $string{++$i};
                if ((ord($char) & 128) == 128) {
                    //第二个字节判断通过
                    $char = $string{++$i};
                    if ((ord($char) & 128) == 128) {
                        $encoding = "UTF-8";
                        break;
                    }
                }
            }
            if ((ord($string{$i}) & 192) == 192) {
                //第一个字节判断通过
                $char = $string{++$i};
                if ((ord($char) & 128) == 128) {
                    // 第二个字节判断通过
                    $encoding = "GB2312";
                    break;
                }
            }
        }

        if (strtoupper($encoding) == strtoupper($outEncoding))
            return $string;
        else
            return iconv($encoding, $outEncoding, $string);
    }
}
