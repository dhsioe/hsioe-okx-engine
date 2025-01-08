<?php
/**
 * K线数据请求体
 * @author: hsioe1111@gmail.com
 * @date: 2024/8/19
 * @description:
 */

namespace Hsioe\QuantOkxApi\Rest\Apis\Req;


class CandleRequest
{
    use RequestBase, ListTrait;
    
    /**
     * 产品ID
     * @var string
     */
    protected string $instId = '';
    
    /**
     * 时间粒度，默认值1m
     * 如 [1m/3m/5m/15m/30m/1H/2H/4H]
     * 香港时间开盘价k线：[6H/12H/1D/2D/3D/1W/1M/3M]
     * UTC时间开盘价k线：[/6Hutc/12Hutc/1Dutc/2Dutc/3Dutc/1Wutc/1Mutc/3Mutc]
     * @var string
     */
    protected string $bar = '1m';
    
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
     * @param string $bar
     */
    public function setBar(string $bar): void
    {
        $this->bar = $bar;
    }
    
    /**
     * @return string
     */
    public function getBar(): string
    {
        return $this->bar;
    }
    
    
}