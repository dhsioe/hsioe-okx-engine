<?php
/**
 * 订单详情请求体
 *
 * @author: hsioe1111@gmail.com
 * @date: 2024/8/15
 * @description:
 */

namespace Hsioe\QuantOkxApi\Rest\Apis\Req;


class CommonOrderRequest
{
    use RequestBase;
    
    /**
     * 交易币对
     * @var string
     */
    protected string $instId = '';
    
    /**
     * 持仓方向
     * @var string
     */
    protected string $posSide = '';
    
    /**
     * 订单ID
     * @var string
     */
    protected string $ordId = '';
    
    /**
     * 自定义订单ID
     * @var string
     */
    protected string $clsOrdId = '';
    
    /**
     * 仓位类型 cross-全仓 isolate-逐仓
     * @var string
     */
    protected string $mgnMode = 'cross';
    
    /**
     * 默认保证金币种
     * @var string
     */
    protected string $ccy = 'USDT';
    
    /**
     * 默认自动撤单
     * @var bool
     */
    protected bool $autoCxl = true;
    
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
     * @param string $ordId
     */
    public function setOrdId(string $ordId): void
    {
        $this->ordId = $ordId;
    }
    
    /**
     * @return string
     */
    public function getOrdId(): string
    {
        return $this->ordId;
    }
    
    /**
     * @param string $clsOrdId
     */
    public function setClsOrdId(string $clsOrdId): void
    {
        $this->clsOrdId = $clsOrdId;
    }
    
    /**
     * @return string
     */
    public function getClsOrdId(): string
    {
        return $this->clsOrdId;
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
     * @param bool $autoCxl
     */
    public function setAutoCxl(bool $autoCxl): void
    {
        $this->autoCxl = $autoCxl;
    }
    
    /**
     * @return bool
     */
    public function isAutoCxl(): bool
    {
        return $this->autoCxl;
    }
}