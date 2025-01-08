<?php
/**
 * 请求实例
 * @author: hsioe1111@gmail.com
 * @date: 2024/8/8
 * @description:
 */

namespace Hsioe\QuantOkxApi\Rest;


class OkxApiRequest
{
    /**
     * APIkey
     * @var string
     */
    protected string $apiKey = '';
    
    /**
     * APISecret
     * @var string
     */
    protected string $apiSecret = '';
    
    /**
     * ApiPassphare
     * @var string
     */
    protected string $passphrase = '';
    
    /**
     * 环境 0-模拟盘 1-实盘
     * @var int
     */
    protected int $environment = 0;
    
    /**
     * 代理
     * @var ?string
     */
    protected ?string $proxy = null;
    
    
    public function __construct(array $data)
    {
        foreach ($data as $key => $val) {
            if (property_exists(self::class, $key)) {
                $this->{$key} = $val;
            }
        }
    }
    
    public function getApiKey(): string
    {
        return $this->apiKey;
    }
    
    public function setApiKey(string $apiKey): void
    {
        $this->apiKey = $apiKey;
    }
    
    public function getApiSecret(): string
    {
        return $this->apiSecret;
    }
    
    public function setApiSecret(string $apiSecret): void
    {
        $this->apiSecret = $apiSecret;
    }
    
    public function getPassphrase(): string
    {
        return $this->passphrase;
    }
    
    public function setPassphrase(string $passphrase): void
    {
        $this->passphrase = $passphrase;
    }
    
    public function getEnvironment(): int
    {
        return $this->environment;
    }
    
    public function setEnvironment(int $environment): void
    {
        $this->environment = $environment;
    }
    
    /**
     * @param string|null $proxy
     */
    public function setProxy(?string $proxy): void
    {
        $this->proxy = $proxy;
    }
    
    /**
     * @return string|null
     */
    public function getProxy(): ?string
    {
        return $this->proxy;
    }
}