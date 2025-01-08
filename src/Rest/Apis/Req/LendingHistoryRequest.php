<?php
/**
 * 余币宝出借请求
 * @author: hsioe1111@gmail.com
 * @date: 2024/8/19
 * @description:
 */

namespace Hsioe\QuantOkxApi\Rest\Apis\Req;


class LendingHistoryRequest
{
    use RequestBase, ListTrait;
    
    /**
     * 币种
     * @var string
     */
    protected string $ccy = 'USDT';
    
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
    
    
}