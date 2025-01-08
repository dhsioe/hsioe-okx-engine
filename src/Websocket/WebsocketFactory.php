<?php
/**
 * WebSocket 链接工厂类
 * @author: hsioe1111@gmail.com
 * @date: 2024/8/12
 * @description:
 */

namespace Hsioe\QuantOkxApi\Websocket;

class WebsocketFactory
{
    /**
     * 链接实例
     * @var OkxWebsocketConnection
     */
    protected OkxWebsocketConnection $websocket;
    
    /**
     * ping时间
     *
     * @var int
     */
    protected int $pingInterval;
    
    /**
     * @param string $wssUrl 长链接地址
     * @param int $pingInterval ping时长
     * @throws \Exception
     */
    public function __construct(string $wssUrl, int $pingInterval = 20, $proxy=null)
    {
        $this->pingInterval = $pingInterval;
        $this->websocket = new OkxWebsocketConnection($wssUrl);
        $this->websocket->transport = 'ssl';
        if($proxy) {
            $this->websocket->proxyHttp = $proxy;
        }
    }
    
    /**
     * 获取链接实例
     * @return OkxWebsocketConnection
     */
    public function getWebsocket(): OkxWebsocketConnection
    {
        return $this->websocket;
    }
    
    /**
     * 建立链接
     * @return void
     */
    public function connect(): void
    {
        try {
            $this->websocket->transport = 'ssl';
            $this->websocket->connect();
        } catch (\Throwable $e) {
            echo (string)$e . PHP_EOL;
        }
    }
    
    /**
     * 断开链接
     * @return void
     */
    public function close(): void
    {
        $this->websocket->close();
    }
}