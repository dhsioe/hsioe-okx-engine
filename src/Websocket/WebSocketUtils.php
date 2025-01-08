<?php

namespace Hsioe\QuantOkxApi\Websocket;

use GuzzleHttp\Exception\GuzzleException;
use Hsioe\QuantOkxApi\ApiConst;
use Hsioe\QuantOkxApi\OkxApi;
use Hsioe\QuantOkxApi\Rest\Exception\OkxApiException;
use Hsioe\QuantOkxApi\Rest\OkxApiRequest;

/**
 * Websocket链接工具类
 *
 * @class Hsioe\QuantOkxApi\Websocket\WebsocketUtils
 */
class WebSocketUtils
{
    /**
     * 获取服务器时间
     * @return string
     * @throws GuzzleException
     * @throws OkxApiException
     */
    public static function getServerTime(): string
    {
        $result = OkxApi::public(new OkxApiRequest([]))->getServerTime();
        
        return $result['data'][0]['ts'] ? trim($result['data'][0]['ts']) : '';
    }
    
    /**
     * 获取服务器时间
     * @param bool $useServerTime
     * @return string
     * @throws GuzzleException
     * @throws OkxApiException
     */
    public static function getRequestTime(bool $useServerTime): string
    {
        return match ($useServerTime) {
            true => self::getServerTime(),
            default => time()
        };
    }
    
    /**
     * 构建Websocket登录链接参数
     * @param OkxWebsocketRequest $websocketRequest
     * @return array
     * @throws GuzzleException
     * @throws OkxApiException
     */
    public static function buildLoginParams(OkxWebsocketRequest $websocketRequest): array
    {
        $timestamp = self::getRequestTime($websocketRequest->useServerTime);
        
        $message = sprintf("%s%s%s", $timestamp, 'GET', ApiConst::WEBSOCKET_LOGIN_URL);
        
        $sign = base64_encode(hash_hmac('sha256', $message, $websocketRequest->getApiSecret(), true));
        
        return [
            'op' => 'login',
            'args' => [
                [
                    'apiKey' => $websocketRequest->getApiKey(),
                    'passphrase' => $websocketRequest->getPassphrase(),
                    'sign' => $sign,
                    'timestamp' => $timestamp
                ]
            ]
        ];
    }
}
