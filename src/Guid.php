<?php
declare (strict_types = 1);
// +----------------------------------------------------------------------
// | 胜家云 [ SingKa Cloud ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016~2021 https://www.singka.cloud All rights reserved.
// +----------------------------------------------------------------------
// | 宁波晟嘉网络科技有限公司
// +----------------------------------------------------------------------
// | Author: 夏慧新 <shycomet@163.com>
// +----------------------------------------------------------------------
// | 创建于2021年09月19日 06:01
// +----------------------------------------------------------------------
// | Guid.php
// +----------------------------------------------------------------------

namespace DustInk\Tools;


class Guid
{
    /**
     * 生成唯一的GUID
     * @return string
     */
    static public function guid()
    {
        $uid = uniqid(microtime(), true);
        $data = $_SERVER['REQUEST_TIME'];
        $data .= $_SERVER['HTTP_USER_AGENT'];
        $data .= $_SERVER['REMOTE_ADDR'];
        $data .= $_SERVER['REMOTE_PORT'];
        return strtoupper(hash('ripemd128', $uid . md5($data)));
    }

    /**
     * 生成唯一订单号
     * @return string
     */
    static public function orderId()
    {
        return date('Ymd') . substr(implode('', array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
    }
}