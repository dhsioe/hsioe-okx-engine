<?php
/**
 * 委托单嵌入
 *
 * @author: hsioe1111@gmail.com
 * @date: 2024/8/16
 * @description:
 */

namespace Hsioe\QuantOkxApi\Rest\Apis\Req;


trait OrderAlgoTrait
{
    /**
     * 止盈触发价,如果填写此参数必须填写止盈委托价格
     * @var string
     */
    protected string $tpTriggerPx = '';
    
    /**
     * 止盈触发类型 默认为last
     * @var string
     */
    protected string $tpTriggerPxType = '';
    
    /**
     * 止盈委托价
     * @var string
     */
    protected string $tpOrdPx = '';
    
    /**
     * 止盈订单类型 默认condition
     * @var string
     */
    protected string $tpOrdKind = 'condition';
    
    /**
     * 止损委托价
     * @var string
     */
    protected string $slTriggerPx = '';
    
    /**
     * 止损触发类型
     * @var string
     */
    protected string $slTriggerPxType = '';
    
    /**
     * 止损委托价，填写此参数则必须填写止损触发价
     * @var string
     */
    protected string $slOrdPx = '';
    
    /**
     * @param string $tpTriggerPx
     */
    public function setTpTriggerPx(string $tpTriggerPx): void
    {
        $this->tpTriggerPx = $tpTriggerPx;
    }
    
    /**
     * @return string
     */
    public function getTpTriggerPx(): string
    {
        return $this->tpTriggerPx;
    }
    
    /**
     * @param string $tpTriggerPxType
     */
    public function setTpTriggerPxType(string $tpTriggerPxType): void
    {
        $this->tpTriggerPxType = $tpTriggerPxType;
    }
    
    /**
     * @return string
     */
    public function getTpTriggerPxType(): string
    {
        return $this->tpTriggerPxType;
    }
    
    /**
     * @param string $tpOrdPx
     */
    public function setTpOrdPx(string $tpOrdPx): void
    {
        $this->tpOrdPx = $tpOrdPx;
    }
    
    /**
     * @return string
     */
    public function getTpOrdPx(): string
    {
        return $this->tpOrdPx;
    }
    
    /**
     * @param string $tpOrdKind
     */
    public function setTpOrdKind(string $tpOrdKind): void
    {
        $this->tpOrdKind = $tpOrdKind;
    }
    
    /**
     * @return string
     */
    public function getTpOrdKind(): string
    {
        return $this->tpOrdKind;
    }
    
    /**
     * @param string $slTriggerPx
     */
    public function setSlTriggerPx(string $slTriggerPx): void
    {
        $this->slTriggerPx = $slTriggerPx;
    }
    
    /**
     * @return string
     */
    public function getSlTriggerPx(): string
    {
        return $this->slTriggerPx;
    }
    
    /**
     * @param string $slTriggerPxType
     */
    public function setSlTriggerPxType(string $slTriggerPxType): void
    {
        $this->slTriggerPxType = $slTriggerPxType;
    }
    
    /**
     * @return string
     */
    public function getSlTriggerPxType(): string
    {
        return $this->slTriggerPxType;
    }
    
    /**
     * @param string $slOrdPx
     */
    public function setSlOrdPx(string $slOrdPx): void
    {
        $this->slOrdPx = $slOrdPx;
    }
    
    /**
     * @return string
     */
    public function getSlOrdPx(): string
    {
        return $this->slOrdPx;
    }
    
}