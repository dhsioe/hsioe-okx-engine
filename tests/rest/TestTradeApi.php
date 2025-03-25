<?php
/**
 * 交易API测试
 * @author: hsioe1111@gmail.com
 * @date: 2024/8/16
 * @description:
 */

namespace Hsioe\QuantOkxApi\Tests\rest;


use GuzzleHttp\Exception\GuzzleException;
use Hsioe\QuantOkxApi\OkxApi;
use Hsioe\QuantOkxApi\Rest\Apis\Req\AmendOrderAlgoRequest;
use Hsioe\QuantOkxApi\Rest\Apis\Req\CommonOrderRequest;
use Hsioe\QuantOkxApi\Rest\Apis\Req\FillsHistoryRequest;
use Hsioe\QuantOkxApi\Rest\Apis\Req\HistoryOrderRequest;
use Hsioe\QuantOkxApi\Rest\Apis\Req\OrderAlgoRequest;
use Hsioe\QuantOkxApi\Rest\Apis\Req\OrderRequest;
use Hsioe\QuantOkxApi\Rest\Apis\Req\OrdersAlgoPendingRequest;
use Hsioe\QuantOkxApi\Rest\Apis\TradeApi;
use Hsioe\QuantOkxApi\Rest\Exception\OkxApiException;

class TestTradeApi extends ApiTestCase
{
    protected TradeApi $api;
    
    public function setUp(): void
    {
        parent::setUp();
        $this->api = OkxApi::trade($this->apiRequest);
    }
    
    /**
     * 下单测试
     *
     * @return void
     * @throws GuzzleException
     * @throws OkxApiException
     */
    public function testOrder()
    {
        $order = new OrderRequest([
            'instId' => 'APE-USDT-SWAP',
            'side' => 'sell',
            'posSide' => 'short',
            'sz' => 1,
            'tag' => 'MODEL1'
        ]);
        $res = $this->api->order($order);
        $this->assertEquals(0, $res['code']);
    }
    
    /**
     * 策略委托单
     * @return void
     * @throws GuzzleException
     * @throws OkxApiException
     */
    public function testAlgoOrder()
    {
        $orderAlgoReq = new OrderAlgoRequest([
            'instId' => 'APE-USDT-SWAP',
            'side' => 'buy',
            'posSide' => 'long',
            'sz' => '2',
        ]);
        
        $orderAlgoReq->setSlOrdPx('-1');
        $orderAlgoReq->setSlTriggerPx('0.7124');
        $orderAlgoReq->setSlTriggerPxType('last');
        
        $res = $this->api->orderAlgo($orderAlgoReq);
        $this->assertEquals(0, $res['code']);
    }
    
    /**
     * 修改策略委托单测试
     *
     * @return void
     * @throws GuzzleException
     * @throws OkxApiException
     */
    public function testAmendOrderAlgo()
    {
        $req = new AmendOrderAlgoRequest([
            'instId' => 'APE-USDT-SWAP',
            'algoId' => '1721118935220928512',
            'newSz' => 3
        ]);
        
        $res = $this->api->amendOrderAlgo($req);
        $this->assertEquals(0, $res['code']);
    }
    
    /**
     * 测试撤销策略委托单
     *
     * @return void
     * @throws GuzzleException
     * @throws OkxApiException
     */
    public function testCancelOrderAlgo()
    {
        $res = $this->api->cancelOrderAlgo([
            ['instId' => 'APE-USDT-SWAP', 'algoId' => '1721118935220928512']
        ]);
        
        $this->assertEquals(0, $res['code']);
    }
    
    /**
     * 获取策略委托单测试
     *
     * @return void
     * @throws GuzzleException
     * @throws OkxApiException
     */
    public function testGetOrderAlgo()
    {
        $res = $this->api->getOrderAlgo('1721118935220928512');
        $this->assertEquals(0, $res['code']);
        
        // 获取列表数据
        $res1 = $this->api->getOrdersAlgoPending(new OrdersAlgoPendingRequest([]));
        $this->assertEquals(0, $res1['code']);
    }
    
    /**
     * 获取历史订单测试
     *
     * @return void
     * @throws GuzzleException
     * @throws OkxApiException
     */
    public function testGetHistoryOrder()
    {
        $res = $this->api->getOrdersHistory(new HistoryOrderRequest([]));
        $this->assertEquals(0, $res['code']);
        
        
        $res1 = $this->api->getOrdersArchive(new HistoryOrderRequest([]));
        $this->assertEquals(0, $res1['code']);
    }
    
    /**
     * 成交明细测试
     * @return void
     * @throws GuzzleException
     * @throws OkxApiException
     */
    public function testFillsHistory(): void
    {
        $res = $this->api->getFillsHistory(new FillsHistoryRequest([
            'instType' => 'SPOT'
        ]));
        
        $this->assertEquals(0, $res['code']);
        
        $res1 = $this->api->getFills(new FillsHistoryRequest([
            'instType' => 'SWAP'
        ]));
        
        print_r($res1);
        $this->assertEquals(0, $res1['code']);
    }
    
    
    public function testClosePosition(): void
    {
        $req = new CommonOrderRequest([]);
        $req->setInstId('SOL-USDT-SWAP');
        $req->setPosSide('long');
        $res  = $this->api->closePosition($req);
        print_r($res);
        $this->assertEquals(0,$res['code']);
    }
}