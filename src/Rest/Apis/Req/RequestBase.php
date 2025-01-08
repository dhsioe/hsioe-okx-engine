<?php
/**
 * 请求体基类
 * @author: hsioe1111@gmail.com
 * @date: 2024/8/14
 * @description:
 */

namespace Hsioe\QuantOkxApi\Rest\Apis\Req;


trait RequestBase
{
    public function __construct(array $data)
    {
        foreach ($data as $key => $val) {
            if (property_exists(self::class, $key)) {
                $this->{$key} = $val;
            }
        }
    }
    
    /**
     * 数组形式输出
     *
     * @return array
     */
    public function toArray(): array
    {
        $data = get_object_vars($this);
        return array_filter($data, function ($v) {
            return (null !== $v && '' !== $v);
        });
    }
    
    /**
     * Json格式输出
     *
     * @return string
     */
    public function toJson(): string
    {
        return json_encode($this->toArray());
    }
}