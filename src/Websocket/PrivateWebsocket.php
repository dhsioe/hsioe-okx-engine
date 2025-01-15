<?php
/**
 * 私有频道
 *
 * @author: hsioe1111@gmail.com
 * @date: 2024/8/13
 * @description:
 */

namespace Hsioe\QuantOkxApi\Websocket;


use GuzzleHttp\Exception\GuzzleException;
use Hsioe\QuantOkxApi\ApiConst;
use Hsioe\QuantOkxApi\Rest\Exception\OkxApiException;

class PrivateWebsocket extends OkxSocket
{
    /**
     * 频道标识
     * @var string
     */
    protected string $channel = ApiConst::PRIVATE_CHANNEL;
    
    /**
     * 私有频道登录
     * @return bool
     * @throws GuzzleException
     * @throws OkxApiException
     */
    public function login(): bool
    {
        $request = new OkxWebsocketRequest([
            'apiKey' => $this->option['api_key'],
            'apiSecret' => $this->option['api_secret'],
            'passphrase' => $this->option['passphrase']
        ]);
        
        $this->factory->getWebsocket()->send(json_encode(WebSocketUtils::buildLoginParams($request)));
        return true;
    }
    
    /**
     * 链接成功事件
     *
     * @param OkxWebsocketConnection $con
     * @return void
     * @throws GuzzleException
     * @throws OkxApiException
     */
    public function onConnect(OkxWebsocketConnection $con): void
    {
        if ($this->login()) {
            echo "{$con->getTitle()}-{$con->id}-> login success!" . PHP_EOL;
        }
    }
    
    /**
     * 消息回调事件
     *
     * @param array $message
     * @return void
     */
    public function onHandleMessage(array $message): void
    {
        if (isset($message['event']) && $message['event'] == 'login' && $message['code'] == 0) {
            // 订阅频道
            $this->subscribe($this->option['subscribes']);
        }
    }
}