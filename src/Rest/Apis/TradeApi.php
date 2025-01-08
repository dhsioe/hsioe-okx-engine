<?php
/**
 * 交易API
 * @author: hsioe1111@gmail.com
 * @date: 2024/8/14
 * @description:
 */

namespace Hsioe\QuantOkxApi\Rest\Apis;


use GuzzleHttp\Exception\GuzzleException;
use Hsioe\QuantOkxApi\ApiConst;
use Hsioe\QuantOkxApi\Rest\Apis\Req\AmendOrderAlgoRequest;
use Hsioe\QuantOkxApi\Rest\Apis\Req\AmendOrderRequest;
use Hsioe\QuantOkxApi\Rest\Apis\Req\CommonOrderRequest;
use Hsioe\QuantOkxApi\Rest\Apis\Req\FillsHistoryRequest;
use Hsioe\QuantOkxApi\Rest\Apis\Req\HistoryOrderRequest;
use Hsioe\QuantOkxApi\Rest\Apis\Req\OrderAlgoRequest;
use Hsioe\QuantOkxApi\Rest\Apis\Req\OrderRequest;
use Hsioe\QuantOkxApi\Rest\Apis\Req\OrdersAlgoPendingRequest;
use Hsioe\QuantOkxApi\Rest\Apis\Req\PendingOrdersRequest;
use Hsioe\QuantOkxApi\Rest\Exception\OkxApiException;

class TradeApi extends ApiBase
{
    /**
     * 下单接口
     *
     * @param OrderRequest $request
     * @return array
     * @throws GuzzleException
     * @throws OkxApiException
     */
    public function order(OrderRequest $request): array
    {
        return $this->_request(ApiConst::REST_TRADE_ORDER, 'POST', $request->toArray());
    }
    
    /**
     * 批量下单
     *
     * @param array $orders
     * @return array
     * @throws GuzzleException
     * @throws OkxApiException
     */
    public function batchOrders(array $orders): array
    {
        return $this->_request(ApiConst::REST_TRADE_BATCH_ORDER, 'POST', $orders);
    }
    
    /**
     * 撤销订单
     * 限速：60次/2s
     *
     * @link https://www.okx.com/docs-v5/zh/#order-book-trading-trade-post-cancel-order
     * @param CommonOrderRequest $request
     * @return array
     * @throws GuzzleException
     * @throws OkxApiException
     */
    public function cancelOrder(CommonOrderRequest $request): array
    {
        return $this->_request(ApiConst::REST_TRADE_CANCEL_ORDER, 'POST', $request->toArray());
    }
    
    /**
     * 批量撤销订单
     *
     * @link https://www.okx.com/docs-v5/zh/#order-book-trading-trade-post-cancel-multiple-orders
     * @param array $orders
     * @return array
     * @throws GuzzleException
     * @throws OkxApiException
     */
    public function batchCancelOrder(array $orders): array
    {
        return $this->_request(ApiConst::REST_TRADE_BATCH_CANCEL_ORDER, 'POST', $orders);
    }
    
    /**
     * 修改订单
     *
     * @link https://www.okx.com/docs-v5/zh/#order-book-trading-trade-post-amend-order
     * @param AmendOrderRequest $request
     * @return array
     * @throws GuzzleException
     * @throws OkxApiException
     */
    public function amendOrder(AmendOrderRequest $request): array
    {
        return $this->_request(ApiConst::REST_TRADE_AMEND_ORDER, 'POST', $request->toArray());
    }
    
    /**
     * 批量改单
     *
     * @link https://www.okx.com/docs-v5/zh/#order-book-trading-trade-post-amend-order
     * @param array $orders
     * @return array
     * @throws GuzzleException
     * @throws OkxApiException
     */
    public function batchAmendOrder(array $orders): array
    {
        return $this->_request(ApiConst::REST_TRADE_BATCH_AMEND_ORDER, 'POST', $orders);
    }
    
    /**
     * 市价全平
     *
     * @link https://www.okx.com/docs-v5/zh/#order-book-trading-trade-post-close-positions
     * @param CommonOrderRequest $request
     * @return array
     * @throws GuzzleException
     * @throws OkxApiException
     */
    public function closePosition(CommonOrderRequest $request): array
    {
        return $this->_request(ApiConst::REST_TRADE_CLOSE_POSITION, 'POST', $request->toArray());
    }
    
    /**
     * 获取订单信息
     *
     * @link https://www.okx.com/docs-v5/zh/#order-book-trading-trade-get-order-details
     * @param CommonOrderRequest $request
     * @return array
     * @throws GuzzleException
     * @throws OkxApiException
     */
    public function getOrderInfo(CommonOrderRequest $request): array
    {
        $requestPath = ApiBase::toGetUrl(ApiConst::REST_TRADE_ORDER, $request->toArray());
        return $this->_request($requestPath, 'GET');
    }
    
    /**
     * 获取未完成订单列表
     *
     * @link https://www.okx.com/docs-v5/zh/#order-book-trading-trade-get-order-list
     * @param PendingOrdersRequest $request
     * @return array
     * @throws GuzzleException
     * @throws OkxApiException
     */
    public function getPendingOrders(PendingOrdersRequest $request): array
    {
        $requestPath = ApiBase::toGetUrl(ApiConst::REST_TRADE_GET_PENDING_ORDERS, $request->toArray());
        return $this->_request($requestPath, 'GET');
    }
    
    /**
     * 获取历史订单记录(近七日)
     *
     * @link https://www.okx.com/docs-v5/zh/#order-book-trading-trade-get-order-history-last-7-days
     * @param HistoryOrderRequest $request
     * @return array
     * @throws GuzzleException
     * @throws OkxApiException
     */
    public function getOrdersHistory(HistoryOrderRequest $request): array
    {
        $requestPath = ApiBase::toGetUrl(ApiConst::REST_TRADE_ORDERS_HISTORY_LAST_SEVEN, $request->toArray());
        return $this->_request($requestPath, 'GET');
    }
    
    /**
     * 获取历史订单(近3月)
     *
     * @link https://www.okx.com/docs-v5/zh/#order-book-trading-trade-get-order-history-last-3-months
     * @param HistoryOrderRequest $request
     * @return array
     * @throws GuzzleException
     * @throws OkxApiException
     */
    public function getOrdersArchive(HistoryOrderRequest $request): array
    {
        $requestPath = ApiBase::toGetUrl(ApiConst::REST_TRADE_ORDERS_HISTORY_ARCHIVE, $request->toArray());
        return $this->_request($requestPath, 'GET');
    }
    
    /**
     * 策略委托单
     *
     * @link https://www.okx.com/docs-v5/zh/#order-book-trading-algo-trading-post-place-algo-order
     * @param OrderAlgoRequest $request
     * @return array
     * @throws GuzzleException
     * @throws OkxApiException
     */
    public function orderAlgo(OrderAlgoRequest $request): array
    {
        return $this->_request(ApiConst::REST_TRADE_ORDER_ALGO, 'POST', $request->toArray());
    }
    
    /**
     * 修改策略委托单
     *
     * @link https://www.okx.com/docs-v5/zh/#order-book-trading-algo-trading-post-place-algo-order
     * @param AmendOrderAlgoRequest $request
     * @return array
     * @throws GuzzleException
     * @throws OkxApiException
     */
    public function amendOrderAlgo(AmendOrderAlgoRequest $request): array
    {
        return $this->_request(ApiConst::REST_TRADE_AMEND_ORDER_ALGO, 'POST', $request->toArray());
    }
    
    /**
     * 撤销策略委托单(最多10条)
     *
     * @param array $orders
     * @return array
     * @throws GuzzleException
     * @throws OkxApiException
     */
    public function cancelOrderAlgo(array $orders): array
    {
        return $this->_request(ApiConst::REST_TRADE_CANCEL_ORDER_ALGO, 'POST', $orders);
    }
    
    /**
     * 获取策略委托单信息
     *
     * @link https://www.okx.com/docs-v5/zh/#order-book-trading-algo-trading-get-algo-order-details
     * @param string $algoId 策略委托单ID
     * @return array
     * @throws GuzzleException
     * @throws OkxApiException
     */
    public function getOrderAlgo(string $algoId): array
    {
        $requestPath = ApiBase::toGetUrl(ApiConst::REST_TRADE_GET_ORDER_ALGO, ['algoId' => $algoId]);
        return $this->_request($requestPath, 'GET');
    }
    
    /**
     * 获取未完成的策略委托单列表
     *
     * @link https://www.okx.com/docs-v5/zh/#order-book-trading-algo-trading-get-algo-order-list
     * @param OrdersAlgoPendingRequest $request
     * @return array
     * @throws GuzzleException
     * @throws OkxApiException
     */
    public function getOrdersAlgoPending(OrdersAlgoPendingRequest $request): array
    {
        $requestPath = ApiBase::toGetUrl(ApiConst::REST_TRADE_GET_PENDING_ORDERS_ALGO, $request->toArray());
        return $this->_request($requestPath, 'GET');
    }
    
    /**
     * 获取成交记录(近3天)
     *
     * @param FillsHistoryRequest $request
     * @return array
     * @throws GuzzleException
     * @throws OkxApiException
     *
     * @link https://www.okx.com/docs-v5/zh/#order-book-trading-trade-get-transaction-details-last-3-days
     */
    public function getFills(FillsHistoryRequest $request): array
    {
        $requestPath = ApiBase::toGetUrl(ApiConst::REST_TRADE_GET_FILLS, $request->toArray());
        return $this->_request($requestPath, 'GET');
    }
    
    /**
     * 获取历史成交记录(近3月)
     *
     * @param FillsHistoryRequest $request
     * @return array
     * @throws GuzzleException
     * @throws OkxApiException
     */
    public function getFillsHistory(FillsHistoryRequest $request): array
    {
        $requestPath = ApiBase::toGetUrl(ApiConst::REST_TRADE_GET_FILLS_HISTORY, $request->toArray());
        return $this->_request($requestPath, 'GET');
    }
}