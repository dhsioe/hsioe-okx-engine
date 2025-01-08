<?php
/**
 * 分页特效
 * @author: hsioe1111@gmail.com
 * @date: 2024/8/15
 * @description:
 */

namespace Hsioe\QuantOkxApi\Rest\Apis\Req;

trait ListTrait
{
    /**
     * 筛选的时间开始时间戳
     * @var string
     */
    protected string $begin = '';
    
    /**
     * 筛选结束的时间戳
     * @var string
     */
    protected string $end = '';
    
    /**
     * 请求此ID之前(更旧的数据)
     * @var string
     */
    protected string $after = '';
    
    /**
     * 请求此ID之后(更新的数据)
     * @var string
     */
    protected string $before = '';
    
    /**
     * 返回结果数量,默认100
     * @var string
     */
    protected string $limit = '100';
    
    /**
     * @param string $after
     */
    public function setAfter(string $after): void
    {
        $this->after = $after;
    }
    
    /**
     * @return string
     */
    public function getAfter(): string
    {
        return $this->after;
    }
    
    /**
     * @param string $before
     */
    public function setBefore(string $before): void
    {
        $this->before = $before;
    }
    
    /**
     * @return string
     */
    public function getBefore(): string
    {
        return $this->before;
    }
    
    /**
     * @param string $limit
     */
    public function setLimit(string $limit): void
    {
        $this->limit = $limit;
    }
    
    /**
     * @return string
     */
    public function getLimit(): string
    {
        return $this->limit;
    }
    
    /**
     * @param string $begin
     */
    public function setBegin(string $begin): void
    {
        $this->begin = $begin;
    }
    
    /**
     * @return string
     */
    public function getBegin(): string
    {
        return $this->begin;
    }
    
    /**
     * @param string $end
     */
    public function setEnd(string $end): void
    {
        $this->end = $end;
    }
    
    /**
     * @return string
     */
    public function getEnd(): string
    {
        return $this->end;
    }
    
}