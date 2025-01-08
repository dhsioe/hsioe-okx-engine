<?php
/**
 * 历史订单记录请求
 * @author: hsioe1111@gmail.com
 * @date: 2024/8/26
 * @description:
 */

namespace Hsioe\QuantOkxApi\Rest\Apis\Req;


class HistoryOrderRequest
{
    use RequestBase, ListTrait;
    
    /**
     * 产品类型  SWAP-合约
     * @var string
     */
    protected string $instType = 'SWAP';
    
    /**
     * 标的指数
     * @var string
     */
    protected string $uly = '';
    
    /**
     * 交易对
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
     * 订单种类
     * @var string
     */
    protected string $category = '';
    
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
    
    /**
     * @param string $category
     */
    public function setCategory(string $category): void
    {
        $this->category = $category;
    }
    
    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }
    
    
}