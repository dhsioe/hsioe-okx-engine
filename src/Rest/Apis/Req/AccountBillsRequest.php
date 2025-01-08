<?php
/**
 * 账单获取请求
 * @author: hsioe1111@gmail.com
 * @date: 2024/8/19
 * @description:
 */

namespace Hsioe\QuantOkxApi\Rest\Apis\Req;


class AccountBillsRequest
{
    use RequestBase, ListTrait;
    
    /**
     * 产品类型  SPOT-币币
     *          SWAP-永续
     * @var string
     */
    protected string $instType = 'SWAP';
    
    /**
     * 币种
     * @var string
     */
    protected string $instId = '';
    
    /**
     * 账单币种
     * @var string
     */
    protected string $ccy = '';
    
    /**
     * 仓位类型
     * @var string
     */
    protected string $mgnMode = 'cross';
    
    /**
     * 合约类型
     * @var string
     */
    protected string $ctType = '';
    
    /**
     * 账单类型
     * @var string
     */
    protected string $type = '';
    
    /**
     * 账单子类型
     * @var string
     */
    protected string $subType = '';
    
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
     * @param string $ccy
     */
    public function setCcy(string $ccy): void
    {
        $this->ccy = $ccy;
    }
    
    /**
     * @return string
     */
    public function getCcy(): string
    {
        return $this->ccy;
    }
    
    /**
     * @param string $mgnMode
     */
    public function setMgnMode(string $mgnMode): void
    {
        $this->mgnMode = $mgnMode;
    }
    
    /**
     * @return string
     */
    public function getMgnMode(): string
    {
        return $this->mgnMode;
    }
    
    /**
     * @param string $ctType
     */
    public function setCtType(string $ctType): void
    {
        $this->ctType = $ctType;
    }
    
    /**
     * @return string
     */
    public function getCtType(): string
    {
        return $this->ctType;
    }
    
    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    
    /**
     * @param string $subType
     */
    public function setSubType(string $subType): void
    {
        $this->subType = $subType;
    }
    
    /**
     * @return string
     */
    public function getSubType(): string
    {
        return $this->subType;
    }
    
}