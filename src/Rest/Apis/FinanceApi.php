<?php

/**
 * 金融产品API
 * @author: hsioe1111@gmail.com
 * @date: 2024/8/16
 * @description:
 */

namespace Hsioe\QuantOkxApi\Rest\Apis;


use GuzzleHttp\Exception\GuzzleException;
use Hsioe\QuantOkxApi\ApiConst;
use Hsioe\QuantOkxApi\Rest\Apis\Req\LendingHistoryRequest;
use Hsioe\QuantOkxApi\Rest\Apis\Req\PurchaseRedemptRequest;
use Hsioe\QuantOkxApi\Rest\Apis\Req\WithdrawalHistoryRequest;
use Hsioe\QuantOkxApi\Rest\Exception\OkxApiException;

class FinanceApi extends ApiBase
{
    /**
     * 获取金融产品余额
     *
     * @param string $ccy
     * @return array
     * @throws GuzzleException
     * @throws OkxApiException
     * @link https://www.okx.com/docs-v5/zh/#financial-product-savings-get-saving-balance
     */
    public function getBalance(string $ccy = 'USDT'): array
    {
        $requestPath = ApiBase::toGetUrl(ApiConst::REST_FINANCE_BALANCE, ['ccy' => $ccy]);
        return $this->_request($requestPath, 'GET');
    }
    
    /**
     *
     * 简单赚币(申购/赎回)
     * @param PurchaseRedemptRequest $request
     * @return array
     * @throws GuzzleException
     * @throws OkxApiException
     *
     * @link https://www.okx.com/docs-v5/zh/#financial-product-savings-post-savings-purchase-redemption
     */
    public function purchaseRedempt(PurchaseRedemptRequest $request): array
    {
        return $this->_request(ApiConst::REST_FINANCE_PURCHASE, 'POST', $request->toArray());
    }
    
    /**
     * 获取余币宝出借明细
     *
     * @param LendingHistoryRequest $request
     * @return array
     * @throws GuzzleException
     * @throws OkxApiException
     *
     * @link https://www.okx.com/docs-v5/zh/#financial-product-savings-get-lending-history
     */
    public function getLendingHistory(LendingHistoryRequest $request): array
    {
        $requestPath = ApiBase::toGetUrl(ApiConst::REST_FINANCE_GET_LENDING_HISTORY, $request->toArray());
        return $this->_request($requestPath, 'GET');
    }
    
    /**
     * 获取账户提币记录
     *
     *
     * @param WithdrawalHistoryRequest $request
     * @return array
     * @throws GuzzleException
     * @throws OkxApiException
     * @link https://www.okx.com/docs-v5/zh/#funding-account-rest-api-get-withdrawal-history
     */
    public function getWithdrawalHistory(WithdrawalHistoryRequest $request): array
    {
        $requestPath = ApiBase::toGetUrl(ApiConst::REST_ASSET_WITHDRAWAL_HISTORY, $request->toArray());
        return $this->_request($requestPath, 'GET');
    }
    
}