<?php
/**
 * 资产类API
 * @author: hsioe1111@gmail.com
 * @date: 2024/8/16
 * @description:
 */

namespace Hsioe\QuantOkxApi\Rest\Apis;


use GuzzleHttp\Exception\GuzzleException;
use Hsioe\QuantOkxApi\ApiConst;
use Hsioe\QuantOkxApi\Rest\Apis\Req\AssetBillsRequest;
use Hsioe\QuantOkxApi\Rest\Apis\Req\AssetTransferRequest;
use Hsioe\QuantOkxApi\Rest\Apis\Req\AssetWithdrawalRequest;
use Hsioe\QuantOkxApi\Rest\Exception\OkxApiException;

class AssetApi extends ApiBase
{
    /**
     * 获取资金账户余额
     *
     * @param string $ccy
     * @return array
     * @throws GuzzleException
     * @throws OkxApiException
     */
    public function getAssetBalance(string $ccy = 'USDT'): array
    {
        $requestPath = ApiBase::toGetUrl(ApiConst::REST_ASSET_BALANCE, ['ccy' => $ccy]);
        return $this->_request($requestPath, 'GET');
    }
    
    /**
     * 资金划转
     *
     * @param AssetTransferRequest $request
     * @return array
     * @throws GuzzleException
     * @throws OkxApiException
     */
    public function transfer(AssetTransferRequest $request): array
    {
        return $this->_request(ApiConst::REST_ASSET_TRANSFER, 'POST', $request->toArray());
    }
    
    /**
     * 获取账单流水
     *
     * @param AssetBillsRequest $request
     * @return array
     * @throws GuzzleException
     * @throws OkxApiException
     * @link https://www.okx.com/docs-v5/zh/#funding-account-rest-api-asset-bills-details
     */
    public function getBills(AssetBillsRequest $request): array
    {
        $requestPath = ApiBase::toGetUrl(ApiConst::REST_ASSET_BILLS, $request->toArray());
        return $this->_request($requestPath, 'GET');
    }
    
    /**
     * 提币
     *
     * @param AssetWithdrawalRequest $request
     * @return array
     * @throws GuzzleException
     * @throws OkxApiException
     *
     * @link https://www.okx.com/docs-v5/zh/#funding-account-rest-api-withdrawal
     */
    public function withdrawal(AssetWithdrawalRequest $request): array
    {
        return $this->_request(ApiConst::REST_ASSET_WITHDRAWAL, 'POST', $request->toArray());
    }
}