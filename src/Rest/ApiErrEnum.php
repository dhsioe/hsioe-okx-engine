<?php

namespace Hsioe\QuantOkxApi\Rest;


enum ApiErrEnum: int
{
    case SUCCESS = 0;
    
    case ALL_OPERATION_FAILED = 1;
    
    case PART_OF_SUCCESS = 2;
    
    case SERVER_TEMPORARY_ERROR = 50001;
    // JSON语法错误
    case JSON_FORMAT_ERROR = 50002;
    // 请求超时
    case TIMEOUT = 50004;
    // 接口已下线
    case API_OUT_OF_LINE = 50005;
    // Content-Type错误
    case INVALID_CONTENT_TYPE = 50006;
    // 用户已被冻结
    case USER_FROZEN_ERROR = 50007;
    // 用户不存在
    case USER_NOT_FOUND = 50008;
    // 爆仓冻结
    case USER_FROZEN_BY_BOOM = 50009;
    // 用户ID为空
    case USER_ID_EMPTY = 50010;
    // 请求频率过快
    case TOO_MANY_REQUESTS = 50011;
    // 用户状态无效
    case INVALID_USER = 50012;
    // 系统繁忙
    case SYSTEM_BUSY = 50013;
    // 没有API权限
    case API_NOT_AUTHENTICATED = 50030;
    // 全部撤单/平仓后重试
    case RETRY_AFTER_CLOSE_OR_CANCEL_ORDER = 50056;
    // API已被冻结
    case API_FROZEN_ERROR = 50100;
    // API环境不匹配
    case API_ENVIROMENT_ERROR = 50101;
    // 请求时间戳过期
    case API_TIMESTAMP_EXPIRED = 50102;
    
}