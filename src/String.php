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
// | 创建于2021年09月19日 06:05
// +----------------------------------------------------------------------
// | String.php
// +----------------------------------------------------------------------

namespace DustInk\Tools;


class String
{
    /**
     * 判断字符串是否为有效手机号
     * @param string $string
     * @return bool
     */
    static public function isMobile(string $string)
    {
        $rules = '/^0?1[3|4|5|6|7|8][0-9]\d{8}$/';
        if (preg_match($rules, $string)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * 判断字符串是否为有效电子邮箱
     * @param string $string
     * @return bool
     */
    static public function isEmail(string $string)
    {
        if (filter_var($string, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * 判断字符串是否为有效Url
     * @param string $string
     * @return bool
     */
    static public function isUrl(string $string)
    {
        if (filter_var($string, FILTER_VALIDATE_URL)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * 判断字符串是否经过base64加密
     * @param string $string
     * @return bool
     */
    static public function isBase64(string $string)
    {
        $old = $string;
        $decode = base64_decode($string);
        $encode = base64_encode($decode);
        if ($old == $encode) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * 判断字符串是否为json格式
     * @param String $string
     * @return bool
     */
    static public function isJson(string $string)
    {
        if (empty($string)) {
            return false;
        } else {
            return is_null(json_decode($string));
        }
    }

    /**
     * 生成随机字符串
     * @param int $length 生成的随机字符串长度
     * @return String 返回随机字符串
     */
    static public function random(int $length = 6)
    {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $str = "";
        for ($i = 0; $i < $length; $i++) {
            $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
        }
        return $str;
    }

    /**
     * 获取小数点长度
     * @param string $string
     * @return int
     */
    static public function getFloatLength(string $string)
    {
        $count = 0;
        $temp = explode('.', $string);
        if (sizeof($temp) > 1) {
            $decimal = end($temp);
            $count = strlen($decimal);
        }
        return $count;
    }
}