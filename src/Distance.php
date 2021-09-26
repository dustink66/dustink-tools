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
// | 创建于2021年09月19日 06:09
// +----------------------------------------------------------------------
// | Distance.php
// +----------------------------------------------------------------------

namespace DustInk\Tools;


class Distance
{
    /**
     * 根据经纬度算距离，返回结果单位是公里，先纬度，后经度
     * @param $lat1
     * @param $lng1
     * @param $lat2
     * @param $lng2
     * @return float|int
     */
    static public function get($lat1, $lng1, $lat2, $lng2)
    {
        $EARTH_RADIUS = 6378.137;

        $radLat1 = self::rad($lat1);
        $radLat2 = self::rad($lat2);
        $a = $radLat1 - $radLat2;
        $b = self::rad($lng1) - self::rad($lng2);
        $s = 2 * asin(sqrt(pow(sin($a / 2), 2) + cos($radLat1) * cos($radLat2) * pow(sin($b / 2), 2)));
        $s = $s * $EARTH_RADIUS;
        $s = round($s * 10000) / 10000;
        return $s;
    }

    /**
     * 计算弧度大小
     * @param $d
     * @return float
     */
    static public function rad($d)
    {
        return $d * M_PI / 180.0;
    }
}