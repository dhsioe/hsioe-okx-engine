<?php
/**
 * API接口地址
 * @author: hsioe1111@gmail.com
 * @date: 2024/8/8
 * @description:
 */

namespace Hsioe\QuantOkxApi;

class ApiConst
{
    // 接口地址
    const API_URI = 'https://www.okx.com';
    
    const OKX_ACCESS_KEY = 'OK-ACCESS-KEY';
    
    const OKX_ACCESS_SIGN = 'OK-ACCESS-SIGN';
    
    const OKX_ACCESS_TIMESTAMP = 'OK-ACCESS-TIMESTAMP';
    
    const OKX_ACCESS_PASSPHRASE = 'OK-ACCESS-PASSPHRASE';
    
    
    /**
     * WEBSOCKET验证登录地址
     *
     * @var string
     */
    const WEBSOCKET_LOGIN_URL = '/users/self/verify';
    
    const WEBSOCKET_PRIVATE_URL = 'ws://ws.okx.com:8443/ws/v5/private';
    const WEBSOCKET_PUBLIC_URL = 'ws://ws.okx.com:8443/ws/v5/public';
    // 业务频道
    const WEBSOCKET_BUSINESS_URL = 'ws://ws.okx.com:8443/ws/v5/business';
    
    // 虚拟盘公共链接
    const WEBSOCKET_TEST_PUBLIC_URL = 'wss://wspap.okx.com:8443/ws/v5/public';
    // 模拟盘私有链接
    const WEBSOCKET_TEST_PRIVATE_URL = 'wss://wspap.okx.com:8443/ws/v5/private';
    // 模拟盘业务链接
    const WEBSOCKET_TEST_BUSINESS_URL = 'wss://wspap.okx.com:8443/ws/v5/business';
    
    // 设置杠杆
    const REST_SET_LEVERAGE = '/api/v5/account/set-leverage';
    
    const PUBLIC_CHANNEL = 'public';
    const PRIVATE_CHANNEL = 'private';
    const BUSINESS_CHANNEL = 'business';
    
    // 持仓接口名
    const REST_ACCOUNT_POSITIONS = '/api/v5/account/positions';
    // 持仓历史接口
    const REST_HISTORY_POSITIONS = '/api/v5/account/positions-history';
    // 持仓风险获取接口
    const REST_POSITION_RISK = '/api/v5/account/account-position-risk';
    // 账户配置
    const REST_ACCOUNT_CONFIG = '/api/v5/account/config';
    // 获取账户账单流水(近7天)
    const REST_ACCOUNT_GET_BILLS = '/api/v5/account/bills';
    // 获取账单流水(近3月)
    const REST_ACCOUNT_GET_BILL_ARCHIVE = '/api/v5/account/bill-archive';
    // 设置持仓模式
    const REST_SET_POS_MODE = '/api/v5/account/set-position-mode';
    // 获取杠杆
    const REST_GET_LEVERAGE = '/api/v5/account/leverage-info';
    // 下单接口
    const REST_TRADE_ORDER = '/api/v5/trade/order';
    // 批量下单
    const REST_TRADE_BATCH_ORDER = '/api/v5/trade/batch-orders';
    // 撤销订单
    const REST_TRADE_CANCEL_ORDER = '/api/v5/trade/cancel-order';
    // 批量撤销订单
    const REST_TRADE_BATCH_CANCEL_ORDER = '/api/v5/trade/batch-cancel-orders';
    // 修改订单
    const REST_TRADE_AMEND_ORDER = '/api/v5/trade/amend-order';
    // 批量修改订单
    const REST_TRADE_BATCH_AMEND_ORDER = '/api/v5/trade/batch-amend-order';
    // 市价全平
    const REST_TRADE_CLOSE_POSITION = '/api/v5/trade/close-position';
    // 获取未完成订单列表
    const REST_TRADE_GET_PENDING_ORDERS = '/api/v5/trade/orders-pending';
    // 策略委托单
    const REST_TRADE_ORDER_ALGO = '/api/v5/trade/order-algo';
    // 修改委托单
    const REST_TRADE_AMEND_ORDER_ALGO = '/api/v5/trade/amend-algos';
    // 撤销策略委托单
    const REST_TRADE_CANCEL_ORDER_ALGO = '/api/v5/trade/cancel-algos';
    // 获取策略委托单
    const REST_TRADE_GET_ORDER_ALGO = '/api/v5/trade/order-algo';
    // 未完成的策略委托单列表
    const REST_TRADE_GET_PENDING_ORDERS_ALGO = '/api/v5/trade/orders-algo-pending';
    // 获取资金余额
    const REST_ASSET_BALANCE = '/api/v5/asset/balances';
    // 资金划转
    const REST_ASSET_TRANSFER = '/api/v5/asset/transfer';
    // 提币
    const REST_ASSET_WITHDRAWAL = '/api/v5/asset/withdrawal';
    // 提币记录
    const REST_ASSET_WITHDRAWAL_HISTORY = '/api/v5/asset/withdrawal-history';
    // 资金流水获取(近一月)
    const REST_ASSET_BILLS = '/api/v5/asset/bills';
    // 获取余币宝余额
    const REST_FINANCE_BALANCE = '/api/v5/finance/savings/balance';
    // 申购/赎回余币宝
    const REST_FINANCE_PURCHASE = '/api/v5/finance/savings/purchase-redempt';
    // 获取出借明细
    const REST_FINANCE_GET_LENDING_HISTORY = '/api/v5/finance/savings/lending-history';
    // 所有产品行情信息
    const REST_MARKET_TICKERS = '/api/v5/market/tickers';
    // 单个产品行情信息
    const REST_MARKET_TICKER = '/api/v5/market/ticker';
    // 获取交易产品K线数据
    const REST_MARKET_CANDLES = '/api/v5/market/candles';
    // 获取交易产品历史K线数据
    const REST_MARKET_HISTORY_CANDLES = '/api/v5/market/history-candles';
    // 历史订单记录(近7日)
    const REST_TRADE_ORDERS_HISTORY_LAST_SEVEN = '/api/v5/trade/orders-history';
    // 历史订单记录(近3月)
    const REST_TRADE_ORDERS_HISTORY_ARCHIVE = '/api/v5/trade/orders-history-archive';
    // 获取历史成交记录(近3月)
    const REST_TRADE_GET_FILLS_HISTORY = '/api/v5/trade/fills-history';
    // 获取历史成交记录(近3天)
    const REST_TRADE_GET_FILLS = '/api/v5/trade/fills';
}