<?php
/**
 * 公共链接
 * @author: hsioe1111@gmail.com
 * @date: 2024/8/12
 * @description:
 */

namespace Hsioe\QuantOkxApi\Websocket;


class PublicWebsocket extends OkxSocket
{
    /**
     * 公共频道
     * @var string
     */
    protected string $channel = 'public';
    
    /**
     * 链接成功回调
     *
     * @param OkxWebsocketConnection $con
     * @return void
     */
    public function onConnect(OkxWebsocketConnection $con): void
    {
        // 订阅频道
        echo "{$con->getTitle()}-{$con->getChannel()}-{$con->id} -> 链接建立!" . PHP_EOL;
        $this->subscribe($this->option['subscribes']);
        
    }
    
    /**
     * 收到消息事件
     * @param array $message
     * @return void
     */
    public function onHandleMessage(array $message): void
    {
        echo "{$this->factory->getWebsocket()->getTitle()}-收到消息:" . json_encode($message) . PHP_EOL;
    }
}