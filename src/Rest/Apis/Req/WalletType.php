<?php
/**
 * 钱包类型
 * @author: hsioe1111@gmail.com
 * @date: 2024/8/19
 * @description:
 */

namespace Hsioe\QuantOkxApi\Rest\Apis\Req;


class WalletType
{
    use RequestBase;
    
    /**
     * 交易所ID
     * @var string
     */
    protected string $exchId = '';
    
    /**
     * 接受昂名字,如 Bruce
     * @var string
     */
    protected string $rcvrFirstName = '';
    
    /**
     * 接收方姓氏
     * @var string
     */
    protected string $rcvrLastName = '';
    
    /**
     * 接收方所在国家,如 United States
     * @var string
     */
    protected string $rcvrCountry = '';
    
    /**
     * 接收方所在州/省
     * @var string
     */
    protected string $rcvrCountrySubDivision = '';
    
    /**
     * 接收方所在城镇
     * @var string
     */
    protected string $rcvrTownName = '';
    
    /**
     * 接收方所在街道地址
     * @var string
     */
    protected string $rcvrStreetName = '';
    
    /**
     * @param string $exchId
     */
    public function setExchId(string $exchId): void
    {
        $this->exchId = $exchId;
    }
    
    /**
     * @return string
     */
    public function getExchId(): string
    {
        return $this->exchId;
    }
    
    /**
     * @param string $rcvrFirstName
     */
    public function setRcvrFirstName(string $rcvrFirstName): void
    {
        $this->rcvrFirstName = $rcvrFirstName;
    }
    
    /**
     * @return string
     */
    public function getRcvrFirstName(): string
    {
        return $this->rcvrFirstName;
    }
    
    /**
     * @param string $rcvrLastName
     */
    public function setRcvrLastName(string $rcvrLastName): void
    {
        $this->rcvrLastName = $rcvrLastName;
    }
    
    /**
     * @return string
     */
    public function getRcvrLastName(): string
    {
        return $this->rcvrLastName;
    }
    
    /**
     * @param string $rcvrCountry
     */
    public function setRcvrCountry(string $rcvrCountry): void
    {
        $this->rcvrCountry = $rcvrCountry;
    }
    
    /**
     * @return string
     */
    public function getRcvrCountry(): string
    {
        return $this->rcvrCountry;
    }
    
    /**
     * @param string $rcvrCountrySubDivision
     */
    public function setRcvrCountrySubDivision(string $rcvrCountrySubDivision): void
    {
        $this->rcvrCountrySubDivision = $rcvrCountrySubDivision;
    }
    
    /**
     * @return string
     */
    public function getRcvrCountrySubDivision(): string
    {
        return $this->rcvrCountrySubDivision;
    }
    
    /**
     * @param string $rcvrTownName
     */
    public function setRcvrTownName(string $rcvrTownName): void
    {
        $this->rcvrTownName = $rcvrTownName;
    }
    
    /**
     * @return string
     */
    public function getRcvrTownName(): string
    {
        return $this->rcvrTownName;
    }
    
    /**
     * @param string $rcvrStreetName
     */
    public function setRcvrStreetName(string $rcvrStreetName): void
    {
        $this->rcvrStreetName = $rcvrStreetName;
    }
    
    /**
     * @return string
     */
    public function getRcvrStreetName(): string
    {
        return $this->rcvrStreetName;
    }
}