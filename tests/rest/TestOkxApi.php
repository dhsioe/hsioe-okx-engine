<?php

namespace Hsioe\QuantOkxApi\Tests\rest;


use Hsioe\QuantOkxApi\OkxApi;
use Hsioe\QuantOkxApi\Rest\Apis\AccountApi;
use Hsioe\QuantOkxApi\Rest\Apis\PublicApi;

class TestOkxApi extends ApiTestCase
{
    
    public function testGetApi()
    {
        $publicApi = OkxApi::public($this->apiRequest);
        $this->assertInstanceOf(PublicApi::class, $publicApi);
        
        // 获取账户API
        $accountApi = OkxApi::account($this->apiRequest);
        $this->assertInstanceOf(AccountApi::class, $accountApi);
    }
}