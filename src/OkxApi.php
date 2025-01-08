<?php
/**
 * 欧易RestAPI客户端
 * @author: hsioe1111@gmail.com
 * @date: 2024/8/8
 * @description:
 */

namespace Hsioe\QuantOkxApi;


use Exception;
use Hsioe\QuantOkxApi\Rest\Apis\AccountApi;
use Hsioe\QuantOkxApi\Rest\Apis\AssetApi;
use Hsioe\QuantOkxApi\Rest\Apis\FinanceApi;
use Hsioe\QuantOkxApi\Rest\Apis\MarketApi;
use Hsioe\QuantOkxApi\Rest\Apis\PublicApi;
use Hsioe\QuantOkxApi\Rest\Apis\TradeApi;
use Hsioe\QuantOkxApi\Rest\OkxApiRequest;

/**
 *  欧易RestApi接口V5.0
 *
 * @class OkxApi
 * @method static AccountApi account(OkxApiRequest $request)
 * @method static PublicApi public (OkxApiRequest $request)
 * @method static TradeApi trade(OkxApiRequest $request)
 * @method static AssetApi asset(OkxApiRequest $request)
 * @method static FinanceApi finance(OkxApiRequest $request)
 * @method static MarketApi market(OkxApiRequest $request)
 * */
class OkxApi
{
    /**
     * @param $name
     * @param $arguments
     * @return void
     * @throws Exception
     */
    public static function __callStatic($name, $arguments)
    {
        $class = "Hsioe\\QuantOkxApi\\Rest\Apis\\" . ucfirst($name) . 'Api';
        if (!class_exists($class)) {
            throw new Exception("{$class}类不存在!");
        }
        
        return new $class($arguments[0]);
    }
}