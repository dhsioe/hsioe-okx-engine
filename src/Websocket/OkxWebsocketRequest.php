<?php
/**
 * Websocket链接对象结构
 * @author: hsioe1111@gmail.com
 * @date: 2024/8/9
 * @description:
 */

namespace Hsioe\QuantOkxApi\Websocket;


use Hsioe\QuantOkxApi\Rest\OkxApiRequest;

class OkxWebsocketRequest extends OkxApiRequest
{
    /**
     * 是否使用OKX服务器时间
     *
     * @var bool
     */
    public bool $useServerTime = false;
    
    /**
     * 链接标题
     * @var string
     */
    public string $title = '';
}