<?php
/**
 * 委托单修改请求
 * @author: hsioe1111@gmail.com
 * @date: 2024/8/16
 * @description:
 */

namespace Hsioe\QuantOkxApi\Rest\Apis\Req;


class AmendOrderAlgoRequest
{
    use RequestBase;
    
    /**
     * 交易币对
     *
     * @var string
     */
    protected string $instId = '';
    
    /**
     * 平台策略委托单ID
     * @var string
     */
    protected string $algoId = '';
    
    /**
     * 自定义订单ID
     * @var string
     */
    protected string $algoClOrdId = '';
    
    /**
     * 改单失败是否撤单
     * 默认false
     * @var bool
     */
    protected bool $cxlOnFail = false;
    
    /**
     * 改单事件ID
     * @var string
     */
    protected string $reqId = '';
    
    /**
     * 改单数量
     * @var string
     */
    protected string $newSz = '';
}