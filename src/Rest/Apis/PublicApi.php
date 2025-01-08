<?php

namespace Hsioe\QuantOkxApi\Rest\Apis;


use GuzzleHttp\Exception\GuzzleException;
use Hsioe\QuantOkxApi\Rest\Exception\OkxApiException;

class PublicApi extends ApiBase
{
    /**
     * 获取服务器时间
     * @return array
     * @throws GuzzleException
     * @throws OkxApiException
     */
    public function getServerTime(): array
    {
        return $this->_request('/api/v5/public/time','GET');
    }
}