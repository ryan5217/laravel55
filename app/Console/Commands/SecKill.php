<?php

namespace App\Console\Commands;

use App\Http\Services\SecKillService;
use Illuminate\Support\Facades\Log;
use Illuminate\Console\Command;

class SecKill extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'seckill {method} {--goodsid=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '秒杀系统命令配置数量和时间';

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
     * @return mixed
     */
    public function handle()
    {
        $method = $this->argument('method');
        $goods_id = $this->option('goodsid');
        if (!is_numeric($goods_id)){
            $this->error('示例：php artisan seckill setNum --goodsid="抢购商品ID"');
            exit();
        }

        Log::useFiles(storage_path('logs/seckill/run.log'));
        Log::debug('----------------- start at -----------------------');
        Log::info('脚本运行了商品ID为'.$goods_id.'的抢购队列');


        $_sec_shop = new SecKillService((int)$goods_id);
        switch ($method){
            // 设置商品队列
            case 'setNum':
                $msg = $_sec_shop -> goodsNumberQueue();

                if ($msg['code']){
                    $this -> error($msg['msg']);
                } else {
                    $this -> info($msg['msg']);
                }
                Log::info($msg['msg']);
                break;
            case 'secKill':
                $msg = $_sec_shop -> secKill();
                dd($msg);
                Log::info($msg['msg']);
                break;
            case 'showQueue':
                $list = $_sec_shop -> index();
                break;
            case 'showNum':
                //查看库存
                $num = $_sec_shop -> showNum();
                break;
            case 'reset':
                $keys = $_sec_shop -> reset();
                $this->info($keys['msg']);
                break;
            default:
                $this->info('artisan命令无效');
                break;
        }
        Log::debug('----------------- end at -------------------------');
    }
}
