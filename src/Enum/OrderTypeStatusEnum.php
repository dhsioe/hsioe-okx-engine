<?php
/**
 * 欧易订单状态
 * @author: hsioe1111@gmail.com
 * @date: 2025/1/8
 * @description:
 */

namespace Hsioe\QuantOkxApi\Enum;


enum OrderTypeStatusEnum: string
{
    // 市价单
    case MARKET = 'market';
    // 限价单
    case LIMIT = 'limit';
    // 只做maker单
    case POST_ONLY = 'post_only';
    // 全部成交或立即取消
    case FOK = 'fok';
    // 立即成交并取消剩余
    case IOC = 'ioc';
    // 市价委托立即成交
    case OPTIMAL_LIMIT_IOC = 'optimal_limit_ioc';
    case mmp = '做市商保护';
}