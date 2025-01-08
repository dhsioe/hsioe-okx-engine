<?php
/**
 * 获取未完成订单列表
 *
 * @author: hsioe1111@gmail.com
 * @date: 2024/8/15
 * @description:
 */

namespace Hsioe\QuantOkxApi\Rest\Apis\Req;

class PendingOrdersRequest
{
    use RequestBase, ListTrait;
    
    /**
     * 产品类型
     * @var string
     */
    protected string $instType = '';
    
    /**
     * 标的指数
     * @var string
     */
    protected string $uly = '';
    
    /**
     * 交易品种
     * @var string
     */
    protected string $instFamily = '';
    
    /**
     * 交易币对
     * @var string
     */
    protected string $instId = '';
    
    /**
     * 订单类型
     * @var string
     */
    protected string $ordType = '';
    
    /**
     * 订单状态
     * @var string
     */
    protected string $state = '';
    
    /**
     * @param string $instType
     */
    public function setInstType(string $instType): void
    {
        $this->instType = $instType;
    }
    
    /**
     * @return string
     */
    public function getInstType(): string
    {
        return $this->instType;
    }
    
    /**
     * @param string $uly
     */
    public function setUly(string $uly): void
    {
        $this->uly = $uly;
    }
    
    /**
     * @return string
     */
    public function getUly(): string
    {
        return $this->uly;
    }
    
    /**
     * @param string $instFamily
     */
    public function setInstFamily(string $instFamily): void
    {
        $this->instFamily = $instFamily;
    }
    
    /**
     * @return string
     */
    public function getInstFamily(): string
    {
        return $this->instFamily;
    }
    
    /**
     * @param string $instId
     */
    public function setInstId(string $instId): void
    {
        $this->instId = $instId;
    }
    
    /**
     * @return string
     */
    public function getInstId(): string
    {
        return $this->instId;
    }
    
    /**
     * @param string $ordType
     */
    public function setOrdType(string $ordType): void
    {
        $this->ordType = $ordType;
    }
    
    /**
     * @return string
     */
    public function getOrdType(): string
    {
        return $this->ordType;
    }
    
    /**
     * @param string $state
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }
    
    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }
}