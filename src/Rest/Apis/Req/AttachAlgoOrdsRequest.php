<?php
/**
 * 订单类型数据
 *
 * @author: hsioe1111@gmail.com
 * @date: 2024/8/15
 * @description:
 */

namespace Hsioe\QuantOkxApi\Rest\Apis\Req;


class AttachAlgoOrdsRequest
{
    use RequestBase;
    
    /**
     * 下单附带止盈信息
     * 字母（区分大小写）与数字的组合，可以是纯字母、纯数字且长度要在1-32位之间。
     * @var string
     */
    protected string $attachAlgoClOrdId = '';
    
    /**
     * 止盈触发价
     * 对于条件止盈单，如果填写此参数，必须填写 止盈委托价
     * @var string
     */
    protected string $tpTriggerPx = '';
    
    /**
     * 止盈委托价
     */
    protected string $tpOrdPx = '';
    
    /**
     * 止损触发价
     * 止损触发价，如果填写此参数，必须填写 止损委托价
     */
    protected string $slTriggerPx = '';
    
    /**
     * 止损委托价
     * @var string
     */
    protected string $slOrderPx = '';
    
    /**
     * 止盈触发价类型
     *  last-最新价 index-指数价格 mark-标记价格
     *  默认last
     * @var string
     */
    protected string $tpTriggerPxType;
}