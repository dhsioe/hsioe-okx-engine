<?php
/**
 * 市场行情接口
 * @author: hsioe1111@gmail.com
 * @date: 2024/8/19
 * @description:
 */

namespace Hsioe\QuantOkxApi\Rest\Apis;

use GuzzleHttp\Exception\GuzzleException;
use Hsioe\QuantOkxApi\ApiConst;
use Hsioe\QuantOkxApi\Rest\Apis\Req\CandleRequest;
use Hsioe\QuantOkxApi\Rest\Exception\OkxApiException;

/**
 * 行情接口
 *
 * @package Hsioe\QuantOkxApi\Rest\Apis
 * @class MarketApi
 */
class MarketApi extends ApiBase
{
    /**
     * 获取所有产品行情信息
     * @param string $instType
     * @param string $uly
     * @param string $instFamily
     * @return array
     * @throws GuzzleException
     * @throws OkxApiException
     *
     * @link https://www.okx.com/docs-v5/zh/#order-book-trading-market-data-get-tickers
     */
    public function tickers(string $instType = 'SWAP', string $uly = '', string $instFamily = ''): array
    {
        $requestPath = ApiBase::toGetUrl(ApiConst::REST_MARKET_TICKERS, [
            'instType' => $instType,
            'uly' => $uly,
            'instFamily' => $instFamily
        ]);
        
        return $this->_request($requestPath, 'GET');
    }
    
    /**
     * 获取当个产品行情
     * @param string $instId 产品ID
     * @param string $instType
     * @return array
     * @throws GuzzleException
     * @throws OkxApiException
     * @link https://www.okx.com/docs-v5/zh/#order-book-trading-market-data-get-ticker
     */
    public function ticker(string $instId,string $instType='SWAP'): array
    {
        $requestPath = ApiBase::toGetUrl(ApiConst::REST_MARKET_TICKER, [
            'instType' => $instType,
            'instId' => $instId
        ]);
        
        return $this->_request($requestPath, 'GET');
    }
    
    /**
     * 获取交易产品K线数据
     *
     * @param CandleRequest $request
     * @return array
     * @throws GuzzleException
     * @throws OkxApiException
     *
     * @link https://www.okx.com/docs-v5/zh/#order-book-trading-market-data-get-candlesticks
     */
    public function getCandles(CandleRequest $request): array
    {
        $requestPath = ApiBase::toGetUrl(ApiConst::REST_MARKET_CANDLES, $request->toArray());
        return $this->_request($requestPath, 'GET');
    }
    
    /**
     * 获取交易产品历史K线
     *
     * @param CandleRequest $request
     * @return array
     * @throws GuzzleException
     * @throws OkxApiException
     *
     * @link https://www.okx.com/docs-v5/zh/#order-book-trading-market-data-get-candlesticks-history
     */
    public function getHistoryCandles(CandleRequest $request): array
    {
        $requestPath = ApiBase::toGetUrl(ApiConst::REST_MARKET_HISTORY_CANDLES, $request->toArray());
        return $this->_request($requestPath, 'GET');
    }
    
    /**
     * 获取交易产品数据
     *
     * @link https://www.okx.com/docs-v5/zh/#public-data-rest-api-get-instruments
     * @param string $instType 产品类型
     * @return array
     * @throws GuzzleException
     * @throws OkxApiException
     */
    public function getInstruments(string $instType = 'SWAP'): array
    {
        $requestPath = ApiBase::toGetUrl(ApiConst::REST_MARKET_INSTRUMENTS,['instType'=>$instType]);
        return $this->_request($requestPath,'GET');
    }
}