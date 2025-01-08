<?php
/**
 * 改单请求
 * @author: hsioe1111@gmail.com
 * @date: 2024/8/15
 * @description:
 */

namespace Hsioe\QuantOkxApi\Rest\Apis\Req;


class AmendOrderRequest
{
    use RequestBase;
    
    /**
     * 交易币对
     * @var string
     */
    protected string $instId = '';
    
    /**
     * 修改失败时是否撤单
     * @var bool
     */
    protected bool $cxlOnFail = false;
    
    /**
     * 订单ID
     * @var string
     */
    protected string $ordId = '';
    
    /**
     * 自定义ID
     * @var string
     */
    protected string $clOrdId = '';
    
    /**
     * 操作事件ID
     * @var string
     */
    protected string $reqId = '';
    
    /**
     * 修改后的新张数
     * @var string
     */
    protected string $newSz = '';
    
    /**
     * 修改后的新价格
     * @var string
     */
    protected string $newPx = '';
    
    /**
     * 委托单
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
     * @return bool
     */
    public function isCxlOnFail(): bool
    {
        return $this->cxlOnFail;
    }
    
    /**
     * @param bool $cxlOnFail
     */
    public function setCxlOnFail(bool $cxlOnFail): void
    {
        $this->cxlOnFail = $cxlOnFail;
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
    public function getReqId(): string
    {
        return $this->reqId;
    }
    
    /**
     * @param string $reqId
     */
    public function setReqId(string $reqId): void
    {
        $this->reqId = $reqId;
    }
    
    /**
     * @return string
     */
    public function getNewSz(): string
    {
        return $this->newSz;
    }
    
    /**
     * @param string $newSz
     */
    public function setNewSz(string $newSz): void
    {
        $this->newSz = $newSz;
    }
    
    /**
     * @return string
     */
    public function getNewPx(): string
    {
        return $this->newPx;
    }
    
    /**
     * @param string $newPx
     */
    public function setNewPx(string $newPx): void
    {
        $this->newPx = $newPx;
    }
    
    /**
     * @return AttachAlgoOrdsRequest|null
     */
    public function getAttachAlgoOrds(): ?AttachAlgoOrdsRequest
    {
        return $this->attachAlgoOrds;
    }
    
    /**
     * @param AttachAlgoOrdsRequest|null $attachAlgoOrds
     */
    public function setAttachAlgoOrds(?AttachAlgoOrdsRequest $attachAlgoOrds): void
    {
        $this->attachAlgoOrds = $attachAlgoOrds;
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