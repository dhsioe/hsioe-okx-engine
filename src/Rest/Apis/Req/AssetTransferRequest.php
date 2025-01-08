<?php
/**
 * 资金划转请求
 *
 * @author: hsioe1111@gmail.com
 * @date: 2024/8/16
 * @description:
 */

namespace Hsioe\QuantOkxApi\Rest\Apis\Req;


class AssetTransferRequest
{
    use RequestBase;
    
    /**
     * 划转类型  0-账户内划转
     *          1-母账户转子账户
     *          2-子账户转母账户
     *          3-子账户转母账户
     *          4-子账户转子账户
     * @var string
     */
    protected string $type = '0';
    
    /**
     * 划转账户币种
     * @var string
     */
    protected string $ccy = 'USDT';
    
    /**
     * 划转数量
     * @var string
     */
    protected string $amt = '';
    
    /**
     * 转出账户  6-资金账户
     *          18-交易账户
     * @var string
     */
    protected string $from = '';
    
    /**
     * 转入账户  6-资金账户
     *         18-交易账户
     * @var string
     */
    protected string $to = '';
    
    /**
     * 子账户名称
     *   type1,2,4必填
     * @var string
     */
    protected string $subAcct = '';
    
    /**
     * 是否支持跨币种
     * @var bool
     */
    protected bool $loadTrans = false;
    
    /**
     * 客户自定义ID
     * @var string
     */
    protected string $clientId = '';
    
    /**
     * 是否忽略仓位风险
     * @var string
     */
    protected string $omitPosRisk = '';
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
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
    public function getAmt(): string
    {
        return $this->amt;
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
    public function getFrom(): string
    {
        return $this->from;
    }
    
    /**
     * @param string $from
     */
    public function setFrom(string $from): void
    {
        $this->from = $from;
    }
    
    /**
     * @return string
     */
    public function getTo(): string
    {
        return $this->to;
    }
    
    /**
     * @param string $to
     */
    public function setTo(string $to): void
    {
        $this->to = $to;
    }
    
    /**
     * @return string
     */
    public function getSubAcct(): string
    {
        return $this->subAcct;
    }
    
    /**
     * @param string $subAcct
     */
    public function setSubAcct(string $subAcct): void
    {
        $this->subAcct = $subAcct;
    }
    
    /**
     * @return bool
     */
    public function isLoadTrans(): bool
    {
        return $this->loadTrans;
    }
    
    /**
     * @param bool $loadTrans
     */
    public function setLoadTrans(bool $loadTrans): void
    {
        $this->loadTrans = $loadTrans;
    }
    
    /**
     * @return string
     */
    public function getClientId(): string
    {
        return $this->clientId;
    }
    
    /**
     * @param string $clientId
     */
    public function setClientId(string $clientId): void
    {
        $this->clientId = $clientId;
    }
    
    /**
     * @return string
     */
    public function getOmitPosRisk(): string
    {
        return $this->omitPosRisk;
    }
    
    /**
     * @param string $omitPosRisk
     */
    public function setOmitPosRisk(string $omitPosRisk): void
    {
        $this->omitPosRisk = $omitPosRisk;
    }
    
    
}