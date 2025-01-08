<?php
/**
 * WebsocketBase
 * @author: hsioe1111@gmail.com
 * @date: 2024/8/12
 * @description:
 */

namespace Hsioe\QuantOkxApi\Websocket;


use Workerman\Connection\AsyncTcpConnection;

class OkxWebsocketConnection extends AsyncTcpConnection
{
    /**
     * 链接标识
     * @var string
     */
    protected string $title = '';
    
    /**
     * 链接渠道 public|private|business
     * @var string
     */
    protected string $channel = '';
    
    /**
     * 链接持续时间
     * @var int
     */
    protected int $alreadyRunTs = 0;
    
    /**
     * 上次收到pong的时间
     * @var int
     */
    protected int $lastPongTime = 0;
    
    
    public function setTitle(string $title)
    {
        $this->title = $title;
        return $this;
    }
    
    public function getTitle(): string
    {
        return $this->title;
    }
    
    public function setAlreadyRunTs(int $ts): void
    {
        $this->alreadyRunTs = $ts;
    }
    
    public function incrAlreadyRunTs(int $ts): void
    {
        $this->alreadyRunTs += $ts;
    }
    
    public function getAlreadyRunTs(): int
    {
        return $this->alreadyRunTs;
    }
    
    
    public function setChannel(string $channel): void
    {
        $this->channel = $channel;
    }
    
    public function getChannel(): string
    {
        return $this->channel;
    }
    
    /**
     * 更新上次pong的时间
     * @param int $lastPongTime
     */
    public function setLastPongTime(int $lastPongTime): void
    {
        $this->lastPongTime = $lastPongTime;
    }
    
    /**
     * 获取上次收到pong的时间
     *
     * @return int
     */
    public function getLastPongTime(): int
    {
        return $this->lastPongTime;
    }
}