<?php
/**
 * 杠杆请求实例
 * @author: hsioe1111@gmail.com
 * @date: 2024/8/14
 * @description:
 */

namespace Hsioe\QuantOkxApi\Rest\Apis\Req;


class LeverageRequest
{
    use RequestBase;
    
    /**
     * 币对|合约
     * @var string
     */
    protected string $instId;
    
    /**
     * 保证金币种
     * @var string
     */
    protected string $ccy = 'USDT';
    
    /**
     * 杠杆倍数
     * @var int
     */
    protected int $lever = 3;
    
    /**
     * 仓位模式   cross-全仓
     *           isolated-逐仓
     * @var string
     */
    protected string $mgnMode = 'cross';
    
    /**
     * 持仓方向
     * @var string
     */
    protected string $posSide = '';
    
    public function getInstId(): string
    {
        return $this->instId;
    }
    
    public function setInstId(string $instId): void
    {
        $this->instId = $instId;
    }
    
    public function getCcy(): string
    {
        return $this->ccy;
    }
    
    public function setCcy(string $ccy): void
    {
        $this->ccy = $ccy;
    }
    
    public function getLever(): int
    {
        return $this->lever;
    }
    
    public function setLever(int $lever): void
    {
        $this->lever = $lever;
    }
    
    public function getMgnMode(): string
    {
        return $this->mgnMode;
    }
    
    public function setMgnMode(string $mgnMode): void
    {
        $this->mgnMode = $mgnMode;
    }
    
    public function getPosSide(): string
    {
        return $this->posSide;
    }
    
    public function setPosSide(string $posSide): void
    {
        $this->posSide = $posSide;
    }
    
    
}