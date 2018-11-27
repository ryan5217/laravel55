<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Redis;
use App\Http\Models\SecKill;

/**
 * Class SecKillController
 * @package App\Http\Controllers\Web
 * 秒杀系统
 */
class SecKillService
{
    protected $uid = 14;

    public function __construct($goodsId)
    {
        // 抢购必须登录
//        $this->middleware('auth');
        // 获取用户的ID
        $this->goods_id = (int)$goodsId;
        $this->goods_number_key = 'goods:'.$this->goods_id; //商品库存key，使用redis的lists方式存储
        $this->user_queue_key = 'goods:'.$this->goods_id.':user';    //抢购成功队列的key，使用redis的hashes方式存储
    }

    public function goodsNumberQueue()
    {
        //根据商品ID查询商品抢购数量
        $goods_num = SecKill::where('goodsid',$this->goods_id)->value('goodsnum');
        if (!$goods_num) return api_error('商品ID为>>'.$this->goods_id.'<<的抢购信息没有查询到');
        // 商品允许抢购的数量
        $goodsLen = Redis::llen($this->goods_number_key);

        $count = $goods_num - $goodsLen <= 0 ? 0 : $goods_num - $goodsLen;

        for($i=0; $i < $count;$i++){
            Redis::lpush($this->goods_number_key,1);
        }

        return api_success('目前库存：'.Redis::llen($this->goods_number_key));
    }

    public function secKill()
    {
        $isHaveQueue = Redis::hexists($this->user_queue_key, $this->uid);

        if ($isHaveQueue){
            return api_error('恭喜您已抢到商品，请勿重复抢购');
        }

        $count = Redis::rpop($this->goods_number_key);

        if (!$count) {
            return api_error('商品已经抢光了哦！等下下次活动');
        }

        // 将用户放入队列用,拼装抢购内容
        $this->succUserNumberQueue();

        return api_success('抢购成功，请付款');
    }

    private function succUserNumberQueue()
    {

        $userQueue = [
            'goodsid' => $this->goods_id,
            'uid' => $this->uid,
            'status' => 1,
            'ordernum' => str_random(12),
            'created_at' => date('Y-m-d H:i:s'),
        ];

        $userQueue = serialize($userQueue);

        Redis::hset($this->user_queue_key, $this->uid, $userQueue);
    }

    public function index()
    {

        $orders = Redis::hgetall($this->user_queue_key);
dd($orders);
        foreach ($orders as $key => $order) {
            $orders[$key] = unserialize($order);
        }

        dd($orders);
    }

    public function showNum()
    {
        $goodsLen = Redis::llen($this->goods_number_key);
        dd($goodsLen);
    }

    public function payOrder()
    {
        //如果用户付钱了，将该条数据入库
    }

}
