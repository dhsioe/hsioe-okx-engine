<?php
/**
 * 未完成委托单订单列表
 *
 * @author: hsioe1111@gmail.com
 * @date: 2024/8/16
 * @description:
 */

namespace Hsioe\QuantOkxApi\Rest\Apis\Req;


class OrdersAlgoPendingRequest
{
    use RequestBase, ListTrait;
    
    /**
     * 产品类型  SWAP-合约
     * @var string
     */
    protected string $instType = 'SWAP';
    
    /**
     * 交易币对
     * @var string
     */
    protected string $instId = '';
    
    /**
     * 委托单类型
     * @var string
     */
    protected string $ordType = 'conditional';
    
    /**
     * 客户自定义ID
     * @var string
     */
    protected string $algoClOrdId = '';
    
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
     * @param string $algoClOrdId
     */
    public function setAlgoClOrdId(string $algoClOrdId): void
    {
        $this->algoClOrdId = $algoClOrdId;
    }
    
    /**
     * @return string
     */
    public function getAlgoClOrdId(): string
    {
        return $this->algoClOrdId;
    }
    
}