<?php

namespace Hsioe\QuantOkxApi\Rest\Apis\Req;

class AssetBillsRequest
{
    use RequestBase, ListTrait;
    
    /**
     * 币种
     * @var string
     */
    protected string $ccy = 'USDT';
    
    /**
     * 类型
     * @var string
     */
    protected string $type = '';
    
    /**
     * 客户自定义ID
     * @var string
     */
    protected string $clientId = '';
    
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
}
