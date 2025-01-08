<?php
/**
 * Websocket接口
 * @author: hsioe1111@gmail.com
 * @date: 2024/8/13
 * @description:
 */

namespace Hsioe\QuantOkxApi\Websocket\Contract;


use Hsioe\QuantOkxApi\Websocket\OkxWebsocketConnection;

interface OkxSocketInterface
{
    /**
     * 接收链接事件
     * @param OkxWebsocketConnection $con
     * @return void
     */
    public function onConnect(OkxWebsocketConnection $con): void;
    
    /**
     * 接收关闭事件
     * @param OkxWebsocketConnection $con
     * @return void
     */
    public function onClose(OkxWebsocketConnection $con): void;
    
    /**
     * 接收消息
     * @param OkxWebsocketConnection $con
     * @param string $message
     * @return void
     */
    public function onMessage(OkxWebsocketConnection $con, string $message): void;
    
    /**
     * 订阅频道消息
     * @param array $params
     * @return void
     */
    public function subscribe(array $params): void;
    
    /**
     * 取消订阅频道消息
     * @param array $params
     * @return void
     */
    public function unSubscribe(array $params): void;
    
    /**
     * 启动链接
     * @return void
     */
    public function start(): void;
    
}