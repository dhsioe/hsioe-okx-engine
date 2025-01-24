<?php
/**
 * 订单请求体
 * @author: hsioe1111@gmail.com
 * @date: 2024/8/14
 * @description:
 */

namespace Hsioe\QuantOkxApi\Rest\Apis\Req;


class OrderRequest
{
    use RequestBase;
    
    /**
     * 下单币对
     * @var string
     */
    protected string $instId = '';
    
    /**
     * 仓位模式
     * @var string
     */
    protected string $tdMode = 'cross';
    /**
     * 币种
     * @var string
     */
    protected string $ccy = '';
    
    /**
     * 客户订单自定义ID
     * @var string
     */
    protected string $clOrdId = '';
    
    /**
     * 订单方向  buy-买
     *          sell-卖
     * @var string
     */
    protected string $side = 'buy';
    
    /**
     * 开平仓方向 long|short
     * @var string
     */
    protected string $posSide = '';
    
    /**
     * 订单类型
     *   market-市价单 limit-限价单
     * @var string
     */
    protected string $ordType = 'market';
    
    /**
     * 张数
     * @var string
     */
    protected string $sz;
    
    /**
     * 订单标签
     * @var string
     */
    protected string $tag = '';
    
    
    /**
     * 委托单信息
     * @var AttachAlgoOrdsRequest|null
     */
    protected AttachAlgoOrdsRequest|null $attachAlgoOrds = null;
    
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
    public function getTdMode(): string
    {
        return $this->tdMode;
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
    public function getCcy(): string
    {
        return $this->ccy;
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
    public function getClOrdId(): string
    {
        return $this->clOrdId;
    }
    
    /**
     * @param string $clOrdId
     */
    public function setClOrdId(string $clOrdId): void
    {
        $this->clOrdId = $clOrdId;
    }
    
    /**
     * @return string
     */
    public function getSide(): string
    {
        return $this->side;
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
    public function getOrdType(): string
    {
        return $this->ordType;
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
    public function getSz(): string
    {
        return $this->sz;
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
    public function getTag(): string
    {
        return $this->tag;
    }
    
    /**
     * @param string $tag
     */
    public function setTag(string $tag): void
    {
        $this->tag = $tag;
    }
    
    /**
     * @return AttachAlgoOrdsRequest
     */
    public function getAttachAlgoOrds(): AttachAlgoOrdsRequest
    {
        return $this->attachAlgoOrds;
    }
    
    /**
     * @param AttachAlgoOrdsRequest $attachAlgoOrds
     */
    public function setAttachAlgoOrds(AttachAlgoOrdsRequest $attachAlgoOrds): void
    {
        $this->attachAlgoOrds = $attachAlgoOrds;
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
    
    public function toArray(): array
    {
        $data = get_object_vars($this);
        $res = array_filter($data, function ($v) {
            return (null !== $v && '' !== $v);
        });
        
        if ($this->attachAlgoOrds) {
            $res['attachAlgoOrds'] = $this->attachAlgoOrds->toArray();
        }
        return $res;
    }
    
}