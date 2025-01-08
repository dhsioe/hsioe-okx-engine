<?php
/**
 * RestApi测试
 * @author hsioe.david@gmail.com
 * @date 2024/08/10
 * @description
 */
namespace Hsioe\QuantOkxApi\Tests\rest;


use Hsioe\QuantOkxApi\Rest\OkxApiRequest;
use Hsioe\QuantOkxApi\Tests\TestBase;

class ApiTestCase extends TestBase
{
    protected OkxApiRequest $apiRequest;
    public function setUp(): void
    {
        $this->apiRequest = new OkxApiRequest([
            'apiKey' => '',
            'apiSecret' => '',
            'passphrase' => ''
        ]);
        
    }
}
