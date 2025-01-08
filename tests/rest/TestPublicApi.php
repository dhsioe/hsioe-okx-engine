<?php


namespace Hsioe\QuantOkxApi\Tests\rest;

use GuzzleHttp\Exception\GuzzleException;
use Hsioe\QuantOkxApi\Rest\Apis\PublicApi;
use Hsioe\QuantOkxApi\Rest\Exception\OkxApiException;

class TestPublicApi extends ApiTestCase
{
    /**
     * @throws GuzzleException
     * @throws OkxApiException
     */
    public function testGetServerTime()
    {
        $res = (new PublicApi($this->apiRequest))->getServerTime();
        $this->assertArrayHasKey('ts',$res['data'][0]);
        
    }
}