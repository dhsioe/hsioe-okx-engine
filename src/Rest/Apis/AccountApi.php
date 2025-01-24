<?php
/**
 * 账户模块接口
 * @author: hsioe1111@gmail.com
 * @date: 2024/8/8
 * @description:
 */

namespace Hsioe\QuantOkxApi\Rest\Apis;


use GuzzleHttp\Exception\GuzzleException;
use Hsioe\QuantOkxApi\ApiConst;
use Hsioe\QuantOkxApi\Rest\Apis\Req\AccountBillsRequest;
use Hsioe\QuantOkxApi\Rest\Apis\Req\HistoryPositionRequest;
use Hsioe\QuantOkxApi\Rest\Apis\Req\LeverageRequest;
use Hsioe\QuantOkxApi\Rest\Exception\OkxApiException;

class AccountApi extends ApiBase
{
    /**
     * 获取账户余额
     *
     * @param string $ccy
     * @return array
     * @throws GuzzleException|OkxApiException
     */
    public function getBalance(string $ccy = ''): array
    {
        return $this->_request(
            ApiBase::toGetUrl('/api/v5/account/balance', ['ccy' => $ccy]), 'GET');
    }
    
    /**
     * 获取持仓信息
     * 限速：10次/2s
     *
     * @link https://www.okx.com/docs-v5/zh/#trading-account-rest-api-get-positions
     * @throws GuzzleException|OkxApiException
     */
    public function getPositions(string $instType = '', string $instId = '', string $posId = ''): array
    {
        $params = [
            'instType' => $instType,
            'instId' => $instId,
            'posId' => $posId
        ];
        return $this->_request(ApiBase::toGetUrl(ApiConst::REST_ACCOUNT_POSITIONS, $params), 'GET');
    }
    
    /**
     * 获取持仓历史数据
     * 限速: 10次/2s
     *
     * @link https://www.okx.com/docs-v5/zh/#trading-account-rest-api-get-positions-history
     * @throws GuzzleException|OkxApiException
     */
    public function getHistoryPositions(HistoryPositionRequest $request): array
    {
        return $this->_request(ApiBase::toGetUrl(ApiConst::REST_HISTORY_POSITIONS, $request->toArray()), 'GET');
    }
    
    /**
     * 获取持仓风险
     *
     * @link https://www.okx.com/docs-v5/zh/#trading-account-rest-api-get-account-and-position-risk
     * @param string $instType
     * @return array
     * @throws GuzzleException
     * @throws OkxApiException
     */
    public function getPositionRisk(string $instType = ''): array
    {
        return $this->_request(ApiBase::toGetUrl(ApiConst::REST_POSITION_RISK, ['instType' => $instType]), 'GET');
    }
    
    /**
     * 获取账户配置
     *
     * @link https://www.okx.com/docs-v5/zh/#trading-account-rest-api-get-account-configuration
     * @return array
     * @throws GuzzleException
     * @throws OkxApiException
     */
    public function getAccountConfig(): array
    {
        return $this->_request(ApiBase::toGetUrl(ApiConst::REST_ACCOUNT_CONFIG, []), 'GET');
    }
    
    /**
     * 设置持仓模式
     *
     * @link https://www.okx.com/docs-v5/zh/#trading-account-rest-api-set-position-mode
     * @param string $posMode
     * @return array
     * @throws GuzzleException
     * @throws OkxApiException
     */
    public function setPositionMode(string $posMode): array
    {
        return $this->_request(ApiConst::REST_SET_POS_MODE, 'POST', ['posMode' => $posMode]);
    }
    
    /**
     * 设置杠杆
     *
     * @link https://www.okx.com/docs-v5/zh/#trading-account-rest-api-set-leverage
     * @param LeverageRequest $request
     * @return array
     * @throws GuzzleException
     * @throws OkxApiException
     */
    public function setLeverage(LeverageRequest $request): array
    {
        return $this->_request(ApiConst::REST_SET_LEVERAGE, 'POST', $request->toArray());
    }
    
    /**
     * 获取杠杆信息
     *
     * @link https://www.okx.com/docs-v5/zh/#trading-account-rest-api-get-leverage
     * @param string $instId
     * @param string $mgnMode
     * @return array
     * @throws GuzzleException
     * @throws OkxApiException
     */
    public function getLeverage(string $instId, string $mgnMode = 'cross'): array
    {
        $params = [
            'instId' => $instId,
            'mgnMode' => $mgnMode
        ];
        return $this->_request(ApiBase::toGetUrl(ApiConst::REST_GET_LEVERAGE, $params), 'GET');
    }
    
    /**
     * 获取账单流水(近七天)
     * @param AccountBillsRequest $request
     * @return array
     * @throws GuzzleException
     * @throws OkxApiException
     *
     * @link https://www.okx.com/docs-v5/zh/#trading-account-rest-api-get-bills-details-last-7-days
     */
    public function getBills(AccountBillsRequest $request): array
    {
        $requestPath = ApiBase::toGetUrl(ApiConst::REST_ACCOUNT_GET_BILLS, $request->toArray());
        return $this->_request($requestPath, 'GET');
    }
    
    /**
     * 获取账单流水(近三月)
     * @param AccountBillsRequest $request
     * @return array
     * @throws GuzzleException
     * @throws OkxApiException
     *
     * @link https://www.okx.com/docs-v5/zh/#trading-account-rest-api-get-bills-details-last-3-months
     */
    public function getBillArchive(AccountBillsRequest $request): array
    {
        $requestPath = ApiBase::toGetUrl(ApiConst::REST_ACCOUNT_GET_BILL_ARCHIVE, $request->toArray());
        return $this->_request($requestPath, 'GET');
    }
    
    /**
     * 设置账户模式
     * @param string $acctlV
     * @return array
     * @throws GuzzleException
     * @throws OkxApiException
     */
    public function setAccountLevel(string $acctlV = '2'): array
    {
        return $this->_request(ApiConst::REST_ACCOUNT_SET_ACCOUNT_LEVEL, 'POST', ['acctLv' => $acctlV]);
    }
}