<?php
/**
 * 简单赚币申购赎回请求
 * @author: hsioe1111@gmail.com
 * @date: 2024/8/19
 * @description:
 */

namespace Hsioe\QuantOkxApi\Rest\Apis\Req;


class PurchaseRedemptRequest
{
    use RequestBase;
    
    /**
     * 币种名称
     * @var string
     */
    protected string $ccy = 'USDT';
    
    /**
     * 申购/赎回数量
     * @var string
     */
    protected string $amt = '';
    
    /**
     * 操作类型   purchase: 申购
     *           redempt: 赎回
     * @var string
     */
    protected string $side = '';
    
    /**
     * 申购年利率
     * @var string
     */
    protected string $rate = '1';
    
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
     * @param string $amt
     */
    public function setAmt(string $amt): void
    {
        $this->amt = $amt;
    }
    
    /**
     * @return string
     */
    public function getAmt(): string
    {
        return $this->amt;
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
     * @param string $rate
     */
    public function setRate(string $rate): void
    {
        $this->rate = $rate;
    }
    
    /**
     * @return string
     */
    public function getRate(): string
    {
        return $this->rate;
    }
    
    
}