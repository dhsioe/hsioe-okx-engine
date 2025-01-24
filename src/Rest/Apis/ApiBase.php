<?php
/**
 * 基本API
 * @author: hsioe1111@gmail.com
 * @date: 2024/8/8
 * @description:
 */

namespace Hsioe\QuantOkxApi\Rest\Apis;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Hsioe\QuantOkxApi\ApiConst;
use Hsioe\QuantOkxApi\Rest\Exception\OkxApiException;
use Hsioe\QuantOkxApi\Rest\OkxApiRequest;

class ApiBase
{
    /**
     * 请求客户端
     * @var Client
     */
    protected Client $httpClient;
    
    /**
     * 请求实例
     * @var OkxApiRequest
     */
    protected OkxApiRequest $apiRequest;
    
    /**
     * 构造函数
     * @param OkxApiRequest $apiRequest
     */
    public function __construct(OkxApiRequest $apiRequest)
    {
        $this->apiRequest = $apiRequest;
        $this->httpClient = new Client(['http_errors'=>false,'timeout' => 5, 'proxy' => $apiRequest->getProxy()]);
    }
    
    /**
     * 格式化GET请求参数
     * @param string $requestPath
     * @param array $params
     * @return string
     */
    public static function toGetUrl(string $requestPath, array $params): string
    {
        $url = "?";
        $hasParamsValue = false;
        foreach ($params as $key => $value) {
            if ($value != '') {
                $url .= (string)$key . '=' . (string)$value . '&';
                $hasParamsValue = true;
            }
        }
        
        if (empty($params) || !$hasParamsValue) {
            return $requestPath;
        }
        
        return $requestPath . rtrim($url, '&');
    }
    
    /**
     * 获取IOS格式时间戳
     * @return bool|string
     */
    public function getRequestTime(): bool|string
    {
        return gmdate("Y-m-d\TH:i:s.B\Z");
    }
    
    /**
     * 获取完整的请求数据接口
     * @param string $uri
     * @return string
     */
    public function getRequestUrl(string $uri): string
    {
        return sprintf("%s%s", ApiConst::API_URI, $uri);
    }
    
    /**
     * 生成签名
     * @param string $url 请求地址
     * @param string $method 请求方法
     * @param string $body 请求内容Json
     * @param string $timestamp
     * @return string
     */
    public function getSign(string $url, string $method, string $body, string $timestamp): string
    {
        $encryptString = sprintf("%s%s%s%s", $timestamp, strtoupper($method), $url, $body);
        return base64_encode(hash_hmac('sha256', $encryptString, $this->apiRequest->getApiSecret(), true));
    }
    
    /**
     * 生成请求头
     * @param string $sign
     * @param string $timestamp
     * @return array
     */
    public function getHeader(string $sign, string $timestamp): array
    {
        $header = [];
        $header['Content-Type'] = 'application/json';
        $header[ApiConst::OKX_ACCESS_KEY] = $this->apiRequest->getApiKey();
        $header[ApiConst::OKX_ACCESS_SIGN] = $sign;
        $header[ApiConst::OKX_ACCESS_TIMESTAMP] = $timestamp;
        $header[ApiConst::OKX_ACCESS_PASSPHRASE] = $this->apiRequest->getPassphrase();
        if ($this->apiRequest->getEnvironment() == 1) {
            $header['x-simulated-trading'] = 1;
        }
        
        return $header;
    }
    
    /**
     * 构建请求
     * @param string $method
     * @param array $payload
     * @return array|array[]
     */
    public function buildQuery(string $method, array $payload): array
    {
        return match (strtoupper($method)) {
            'POST' => ['json' => $payload],
            default => []
        };
    }
    
    /**
     * 公共请求
     * @param string $uri
     * @param string $method
     * @param array $payload
     * @return array
     * @throws GuzzleException|OkxApiException
     */
    public function _request(string $uri, string $method, array $payload = []): array
    {
        $timestamp = $this->getRequestTime();
        
        $body = "";
        if ("POST" == strtoupper($method)) {
            $body = json_encode($payload, JSON_UNESCAPED_SLASHES);
        }
        
        $sign = $this->getSign($uri, $method, $body, $timestamp);
        $header = $this->getHeader($sign, $timestamp);
        
        $options = [];
        $options['headers'] = $header;
        $options = array_merge($options, $this->buildQuery($method, $payload));
        $response = $this->httpClient->request($method, $this->getRequestUrl($uri), $options);
        
        $response = json_decode($response->getBody(), true);
        return $this->_checkResults($response);
        
    }
    
    /**
     * 检查结果
     * @param array $response
     * @return array
     * @throws OkxApiException
     */
    public function _checkResults(array $response): array
    {
        if (!$response || $response['code'] != 0) {
            throw new OkxApiException($response['msg'] ?? "请求失败!");
        }
        return $response;
    }
}