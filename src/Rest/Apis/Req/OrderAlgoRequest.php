<?php
/**
 * 策略委托单下单
 *
 * @author: hsioe1111@gmail.com
 * @date: 2024/8/16
 * @description:
 */

namespace Hsioe\QuantOkxApi\Rest\Apis\Req;


class OrderAlgoRequest
{
    use RequestBase, OrderAlgoTrait;
    
    /**
     * 交易币对
     * @var string
     */
    protected string $instId = '';
    
    /**
     * 交易仓位模式  cross-全仓
     *              isolated-逐仓
     * @var string
     */
    protected string $tdMode = 'cross';
    
    /**
     * 开仓方向  buy-买 sell-卖
     * @var string
     */
    protected string $side = '';
    
    /**
     * 交易持仓模式
     * @var string
     */
    protected string $tdModel = 'cross';
    
    /**
     * 币种
     * @var string
     */
    protected string $ccy = '';
    
    
    protected string $posSide = '';
    
    /**
     * 订单类型  conditional 单向止盈止损
     *          oco 双向止盈止损
     *          trigger 计划委托
     *          move_order_stop 移动止盈止损
     *          twap 时间加权委托
     * @var string
     */
    protected string $ordType = 'conditional';
    
    /**
     * 委托张数
     * @var string
     */
    protected string $sz = '';
    
    /**
     * 订单标签
     * @var string
     */
    protected string $tag = '';
    
    /**
     * 委托数量类型
     *
     * @var string
     */
    protected string $tgtCcy = '';
    
    /**
     * 客户订单ID
     * @var string
     */
    protected string $algoClOrdId = '';
    
    /**
     * 委托单出发时平仓的百分比
     * @var string
     */
    protected string $closeFraction = '';
    
    
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
     * @param string $tdModel
     */
    public function setTdModel(string $tdModel): void
    {
        $this->tdModel = $tdModel;
    }
    
    /**
     * @return string
     */
    public function getTdModel(): string
    {
        return $this->tdModel;
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
     * @param string $posSide
     */
    public function setPosSide(string $posSide): void
    {
        $this->posSide = $posSide;
    }
    
    /**
     * @return string
     */
    public function getPosSide(): string
    {
        return $this->posSide;
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
     * @param string $sz
     */
    public function setSz(string $sz): void
    {
        $this->sz = $sz;
    }
    
    /**
     * @return string
     */
    public function getSz(): string
    {
        return $this->sz;
    }
    
    /**
     * @param string $tag
     */
    public function setTag(string $tag): void
    {
        $this->tag = $tag;
    }
    
    /**
     * @return string
     */
    public function getTag(): string
    {
        return $this->tag;
    }
    
    /**
     * @param string $tgtCcy
     */
    public function setTgtCcy(string $tgtCcy): void
    {
        $this->tgtCcy = $tgtCcy;
    }
    
    /**
     * @return string
     */
    public function getTgtCcy(): string
    {
        return $this->tgtCcy;
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
    
    /**
     * @param string $closeFraction
     */
    public function setCloseFraction(string $closeFraction): void
    {
        $this->closeFraction = $closeFraction;
    }
    
    /**
     * @return string
     */
    public function getCloseFraction(): string
    {
        return $this->closeFraction;
    }
    
    /**
     * @param string $side
     */
    public function setSide(string $side): void
    {
        $this->side = $side;
    }
    
    /**
     * @return string
     */
    public function getSide(): string
    {
        return $this->side;
    }
    
    /**
     * @param string $tdMode
     */
    public function setTdMode(string $tdMode): void
    {
        $this->tdMode = $tdMode;
    }
    
    /**
     * @return string
     */
    public function getTdMode(): string
    {
        return $this->tdMode;
    }
    
}