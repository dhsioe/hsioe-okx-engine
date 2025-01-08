<?php
/**
 * OKXWebsocket
 * @author: hsioe1111@gmail.com
 * @date: 2024/8/12
 * @description:
 */

namespace Hsioe\QuantOkxApi;


use Hsioe\QuantOkxApi\Websocket\BusinessWebsocket;
use Hsioe\QuantOkxApi\Websocket\PrivateWebsocket;
use Hsioe\QuantOkxApi\Websocket\PublicWebsocket;

/**
 * 欧易长链接客户端
 *
 * @method static PublicWebsocket public (string $title, string $channel, array $option)
 * @method static PrivateWebsocket private (string $title, string $channel, array $option)
 * @method static BusinessWebsocket business(string $title, string $channel, array $option)
 * */
class OkxWebsocket
{
    /**
     * 静态调用
     *
     * @param string $name
     * @param array $arguments
     * @return void
     * @throws \Exception
     */
    public static function __callStatic(string $name, array $arguments)
    {
        $class = "Hsioe\\QuantOkxApi\\Websocket\\" . ucfirst($name) . 'Websocket';
        if (!class_exists($class)) {
            throw new \Exception("{$class}类不存在!");
        }
        
        return new $class(...$arguments);
    }
}