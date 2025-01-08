<?php
/**
 * 提币请求
 * @author: hsioe1111@gmail.com
 * @date: 2024/8/19
 * @description:
 */

namespace Hsioe\QuantOkxApi\Rest\Apis\Req;


class AssetWithdrawalRequest
{
    use RequestBase;
    
    /**
     * 币种
     * @var string
     */
    protected string $ccy = 'USDT';
    
    /**
     * 提币数量
     * @var string
     */
    protected string $amt = '';
    
    /**
     * 提币方式  3-内部转账
     *          4-链上提币
     * @var string
     */
    protected string $dest = '3';
    
    /**
     * toAddr必须是认证过的地址/账户。如果选择链上提币，某些数字货币地址格式为地址:标签，如 ARDOR-7JF3-8F2E-QUWZ-CAN7F:123456
     * 如果选择内部转账，toAddr必须是接收方地址，可以是邮箱、手机或者账户名（只有子账户才有账户名）。
     * @var string
     */
    protected string $toAddr = '';
    
    
    /**
     * 提币到数字货币地址所需网络手续费可以通过接口 获取币种列表 获取
     * 内部转账无需手续费
     * @var string
     */
    protected string $fee = '';
    
    /**
     * 币种链信息
     * @var string
     */
    protected string $chain = '';
    
    /**
     * 手机区号 默认86
     * @var string
     */
    protected string $areaCode = '86';
    
    /**
     * 钱包类型
     * exchange：提币到交易所钱包
     * private：提币到私人钱包
     * 如果提币到交易所钱包，必须提供接收方相关信息。
     * 对于交易所钱包接收方为公司的，rcvrFirstName可以填公司名称，rcvrLastName可以填"N/A"，地址信息可以填写公司注册地址。
     * 提币到私人钱包，则不需要提供接收方信息。
     * @var WalletType|null
     */
    protected WalletType|null $walletType = null;
    
    /**
     * 客户自定义ID
     * @var string
     */
    protected string $clientId = '';
    
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
     * @param string $dest
     */
    public function setDest(string $dest): void
    {
        $this->dest = $dest;
    }
    
    /**
     * @return string
     */
    public function getDest(): string
    {
        return $this->dest;
    }
    
    /**
     * @param string $toAddr
     */
    public function setToAddr(string $toAddr): void
    {
        $this->toAddr = $toAddr;
    }
    
    /**
     * @return string
     */
    public function getToAddr(): string
    {
        return $this->toAddr;
    }
    
    /**
     * @param string $fee
     */
    public function setFee(string $fee): void
    {
        $this->fee = $fee;
    }
    
    /**
     * @return string
     */
    public function getFee(): string
    {
        return $this->fee;
    }
    
    /**
     * @param string $chain
     */
    public function setChain(string $chain): void
    {
        $this->chain = $chain;
    }
    
    /**
     * @return string
     */
    public function getChain(): string
    {
        return $this->chain;
    }
    
    /**
     * @param string $areaCode
     */
    public function setAreaCode(string $areaCode): void
    {
        $this->areaCode = $areaCode;
    }
    
    /**
     * @return string
     */
    public function getAreaCode(): string
    {
        return $this->areaCode;
    }
    
    /**
     * @param WalletType|null $walletType
     */
    public function setWalletType(?WalletType $walletType): void
    {
        $this->walletType = $walletType;
    }
    
    /**
     * @return WalletType|null
     */
    public function getWalletType(): ?WalletType
    {
        return $this->walletType;
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
    public function getClientId(): string
    {
        return $this->clientId;
    }
    
}