<?php
/**
 * 测试请求体
 * @author: hsioe1111@gmail.com
 * @date: 2024/8/14
 * @description:
 */

namespace Hsioe\QuantOkxApi\Tests\rest;


use Hsioe\QuantOkxApi\Rest\Apis\Req\AttachAlgoOrdsRequest;
use Hsioe\QuantOkxApi\Rest\Apis\Req\LeverageRequest;
use Hsioe\QuantOkxApi\Rest\Apis\Req\OrderRequest;

class TestRestReq extends ApiTestCase
{
    
    public function testBuildRequest()
    {
        $leverRequest = new LeverageRequest([
            'instId' => 'BTC-USDT-SWAP',
            'lever' => 100
        ]);
        
        $this->assertTrue(true);
    }
    
    /**
     * 下单参数
     * @return void
     */
    public function testOrderRequest()
    {
        $req = new OrderRequest([
            'instId' => 'BTC-USDT-SWAP',
            'side' => 'buy',
            'posSide' => 'long',
            'ordType' => 'market',
            'sz' => 5,
            'attachAlgoOrds' => new AttachAlgoOrdsRequest([
                'attachAlgoClOrdId' => '123',
                'tpTriggerPx' => '100.00',
                'tpOrdPx' => '100.00'
            ])
        ]);
        
        print_r($req->toArray());
        $this->assertTrue(true);
    }
}