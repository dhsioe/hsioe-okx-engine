<?php
/**
 * Websocket测试数据
 * @author: hsioe1111@gmail.com
 * @date: 2024/8/13
 * @description:
 */

namespace Hsioe\QuantOkxApi\Tests\websocket;


use Hsioe\QuantOkxApi\ApiConst;
use Hsioe\QuantOkxApi\OkxWebsocket;
use Hsioe\QuantOkxApi\Tests\TestBase;
use Hsioe\QuantOkxApi\Websocket\PrivateWebsocket;
use Hsioe\QuantOkxApi\Websocket\PublicWebsocket;

class TestOkxWebsocket extends TestBase
{
    
    public function testSocketClient()
    {
        $publicSocket = OkxWebsocket::public('hsioe01', ApiConst::PUBLIC_CHANNEL, [
            'wss_url' => ApiConst::WEBSOCKET_PUBLIC_URL,
            'ping_interval' => 20
        ]);
        
        $this->assertInstanceOf(PublicWebsocket::class, $publicSocket);
        
        $privateSocket = OkxWebsocket::private('hsioe02', ApiConst::WEBSOCKET_PRIVATE_URL, [
            'wss_url' => ApiConst::WEBSOCKET_PRIVATE_URL,
            'ping_interval' => 20
        ]);
        
        $this->assertInstanceOf(PrivateWebsocket::class, $privateSocket);
        $this->assertEquals($privateSocket->getFactory()->getWebsocket()->getTitle(), 'hsioe02', '');
    }
}