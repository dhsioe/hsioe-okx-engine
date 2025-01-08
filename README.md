# HSIOE-OKX-SDK(欧易API组件)

## 概述

基于 `Workman` 重新把之前量化系统的[欧易](https://www.okx.com/docs-v5/zh/#overview)的API做成SDK方便后续扩展

目前已经完成

- [x] RestApi V5版本接口
- [X] Websocket 长链接

## 安装

1. 通过 `composer`安装

```sh
composre require hsioe/quant-okx-api
```

## 快速开始

- RestApi

```php
use Hsioe\QuantOkxApi\OkxApi;
use Hsioe\QuantOkxApi\Rest\OkxApiRequest;

//初始化链接

$apiRequest = new OkxApiRequest([
    'apiKey' => 'You Okx ApiKey',
    'apiSecret' => 'You Okx ApiSecret',
    'passphrase' => 'You Okx Passphrase'
]);

$accountApi = OkxApi::account($apiRequest);
// 获取账户余额
$accountApi->getBalance();
// 获取账户配置
$accountApi->getAccountConfig();
...
```

- Websocket

主要用到 `Hsioe\QuantOkxApi\OkxWebsocket` 类代理访问

- PrivateWebsocket
- PublicWebsocket

并通过 `WebsocketFactory`实现socket的链接管理

```php
use Hsioe\QuantOkxApi\OkxWebsocket;
// 公共频道链接
$publicClient = OkxWebsocket::public('test01','public',[
    'wss_url' => 'ws://ws.okx.com/v5/public',
    'ping_interval' => 20
]);
// 启动websocket
$publicClient->start();

// 私有频道
$privateClient = OkxWebsocket::private('test02','private',[
    'wss_url' => 'ws://ws.okx.com/v5/private',
    'ping_interval' => 20
]);
$privateClient->start();
```

## 更新日志

- 08/14 完善API接口和单元测试