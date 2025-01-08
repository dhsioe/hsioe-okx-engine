<?php
/**
 * 测试
 * @author: hsioe1111@gmail.com
 * @date: 2024/8/12
 * @description:
 */

namespace Hsioe\QuantOkxApi\Tests\websocket;


use GuzzleHttp\Exception\GuzzleException;
use Hsioe\QuantOkxApi\Rest\Exception\OkxApiException;
use Hsioe\QuantOkxApi\Tests\TestBase;
use Hsioe\QuantOkxApi\Websocket\WebSocketUtils;

class TestWebsocketUtils extends TestBase
{
    /**
     * @return void
     * @throws GuzzleException
     * @throws OkxApiException
     */
    public function testFunction()
    {
        $this->assertIsString(WebSocketUtils::getServerTime());
    }
}