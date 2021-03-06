<?php
namespace BaiduBundle\PushBundle\PushServer;
/***************************************************************************
 * 
 * Copyright (c) 2014 Baidu.com, Inc. All Rights Reserved
 * 
 **************************************************************************/
/**
 * 表示一个客户端异常, 一般为初始化, 参数检查等出现异常
 */
class ClientException extends \Exception {
    /**
     * Constructor
     * @param string $msg
     * @param int $code
     */
    function __construct($message, $code) {
        parent::__construct($message, $code);
    }
}