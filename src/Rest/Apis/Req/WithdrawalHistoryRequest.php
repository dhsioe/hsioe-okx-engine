<?php


namespace Hsioe\QuantOkxApi\Rest\Apis\Req;


class WithdrawalHistoryRequest
{
    use RequestBase, ListTrait;
    
    /**
     * 币种类型
     * @var string
     */
    protected string $ccy = 'USDT';
    
    /**
     *提笔申请ID
     *
     * @var string
     */
    protected string $wdId = '';
    
    /**
     * 客户端ID
     *
     * @var string
     */
    protected string $clientId = '';
    
    /**
     * 提笔交易记录
     *
     * @var string
     */
    protected string $txId = '';
    
    /**
     * 提笔类型
     *
     * @var string
     */
    protected string $type = '';
    
    /**
     * 提笔状态
     *
     * @var string
     */
    protected string $state = '';
    
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
    public function getWdId(): string
    {
        return $this->wdId;
    }
    
    /**
     * @param string $wdId
     */
    public function setWdId(string $wdId): void
    {
        $this->wdId = $wdId;
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
    public function getTxId(): string
    {
        return $this->txId;
    }
    
    /**
     * @param string $txId
     */
    public function setTxId(string $txId): void
    {
        $this->txId = $txId;
    }
    
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
    public function getState(): string
    {
        return $this->state;
    }
    
    /**
     * @param string $state
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }
    
}
