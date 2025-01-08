<?php
/**
 * 订单详情请求体
 *
 * @author: hsioe1111@gmail.com
 * @date: 2024/8/15
 * @description:
 */

namespace Hsioe\QuantOkxApi\Rest\Apis\Req;


class CommonOrderRequest
{
    use RequestBase;
    
    /**
     * 交易币对
     * @var string
     */
    protected string $instId = '';
    
    /**
     * 订单ID
     * @var string
     */
    protected string $ordId = '';
    
    /**
     * 自定义订单ID
     * @var string
     */
    protected string $clsOrdId = '';
}