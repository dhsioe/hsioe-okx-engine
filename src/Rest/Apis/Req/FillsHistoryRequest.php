<?php

namespace Hsioe\QuantOkxApi\Rest\Apis\Req;


class FillsHistoryRequest
{
    use RequestBase, ListTrait;
    
    /**
     * 合约类型
     *
     * @var string
     */
    protected string $instType = 'SWAP';
    
    /**
     * 标的指数
     * @var string
     */
    protected string $uly = '';
    
    /**
     * 交易品种
     *
     * @var string
     */
    protected string $instFamily = '';
    
    /**
     * 产品名称
     * @var string
     */
    protected string $instId = '';
    
    /**
     * 订单ID
     *
     * @var string
     */
    protected string $ordId = '';
    
    /**
     * 记录类型
     * @var string
     */
    protected string $subType = '';
    
    /**
     * @return string
     */
    public function getInstType(): string
    {
        return $this->instType;
    }
    
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
    public function getUly(): string
    {
        return $this->uly;
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
    public function getInstFamily(): string
    {
        return $this->instFamily;
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
    public function getInstId(): string
    {
        return $this->instId;
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
    public function getOrdId(): string
    {
        return $this->ordId;
    }
    
    /**
     * @param string $ordId
     */
    public function setOrdId(string $ordId): void
    {
        $this->ordId = $ordId;
    }
    
    /**
     * @return string
     */
    public function getSubType(): string
    {
        return $this->subType;
    }
    
    /**
     * @param string $subType
     */
    public function setSubType(string $subType): void
    {
        $this->subType = $subType;
    }
    
}
