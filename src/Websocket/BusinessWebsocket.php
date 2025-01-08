<?php
/**
 * 业务频道
 * @author: hsioe1111@gmail.com
 * @date: 2024/8/15
 * @description:
 */

namespace Hsioe\QuantOkxApi\Websocket;


class BusinessWebsocket extends PrivateWebsocket
{
    protected string $channel = 'business';
}