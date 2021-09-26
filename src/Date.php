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
// | 创建于2021年09月19日 05:58
// +----------------------------------------------------------------------
// | 日期工具类
// +----------------------------------------------------------------------

namespace DustInk\Tools;

class Date
{
    /**
     * 获取今日起始时间
     * @return false|string
     */
    static public function getTodayStart()
    {
        return date('Y-m-d 00:00:00', time());
    }

    /**
     * 获取今日结束时间
     * @return false|string
     */
    static public function getTodayEnd()
    {
        return date('Y-m-d 23:59:59', time());
    }

    /**
     * 获取昨日起始时间
     * @return false|string
     */
    static public function getYesterdayStart()
    {
        return date("Y-m-d 00:00:00", strtotime("-1 day"));
    }

    /**
     * 获取昨日结束时间
     * @return false|string
     */
    static public function getYesterdayEnd()
    {
        return date("Y-m-d 23:59:59", strtotime("-1 day"));
    }

    /**
     * 获取上周起始时间
     * @return false|string
     */
    static public function getLastWeekStart()
    {
        return date("Y-m-d H:i:s", mktime(0, 0, 0, (int)date("m"), (int)date("d") - (int)date("w") + 1 - 7, (int)date("Y")));
    }

    /**
     * 获取上周结束时间
     * @return false|string
     */
    static public function getLastWeekEnd()
    {
        return date("Y-m-d H:i:s", mktime(23, 59, 59, (int)date("m"), (int)date("d") - (int)date("w") + 7 - 7, (int)date("Y")));
    }

    /**
     * 获取本周起始时间
     * @return false|string
     */
    static public function getThisWeekStart()
    {
        return date("Y-m-d H:i:s", mktime(0, 0, 0, (int)date("m"), (int)date("d") - (int)date("w") + 1, (int)date("Y")));
    }

    /**
     * 获取本周结束时间
     * @return false|string
     */
    static public function getThisWeekEnd()
    {
        return date("Y-m-d H:i:s", mktime(23, 59, 59, (int)date("m"), (int)date("d") - (int)date("w") + 7, (int)date("Y")));
    }

    /**
     * 获取上月起始时间
     * @return false|string
     */
    static public function getLastMonthStart()
    {
        return date('Y-m-d 00:00:00', strtotime(date('Y-m-01') . ' -1 month'));
    }

    /**
     * 获取上月结束时间
     * @return false|string
     */
    static public function getLastMonthEnd()
    {
        return date('Y-m-d 23:59:59', strtotime(date('Y-m-01') . ' -1 day'));
    }

    /**
     * 获取本月起始时间
     * @return false|string
     */
    static public function getThisMonthStart()
    {
        return date("Y-m-01 00:00:00");
    }

    /**
     * 获取本月结束时间
     * @return false|string
     */
    static public function getThisMonthEnd()
    {
        return date("Y-m-t 23:59:59");
    }

    /**
     * 获取上季度起始时间
     * @return false|string
     */
    static public function getThisQuarterStart()
    {
        $season = ceil((date('n')) / 3);
        return date('Y-m-d H:i:s', mktime(0, 0, 0, (int)$season * 3 - 3 + 1, 1, (int)date('Y')));
    }

    /**
     * 获取本季度结束时间
     * @return false|string
     */
    static public function getThisQuarterEnd()
    {
        $season = ceil((date('n')) / 3);
        return date('Y-m-d H:i:s', mktime(23, 59, 59, (int)$season * 3, (int)date('t', mktime(0, 0, 0, (int)$season * 3, 1, (int)date("Y"))), (int)date('Y')));
    }

    /**
     * 获取上季度起始时间
     * @return false|string
     */
    static public function getLastQuarterStart()
    {
        $season = ceil((date('n')) / 3) - 1;
        return date('Y-m-d H:i:s', mktime(0, 0, 0, (int)$season * 3 - 3 + 1, 1, (int)date('Y')));
    }

    /**
     * 获取上季度结束时间
     * @return false|string
     */
    static public function getLastQuarterEnd()
    {
        $season = ceil((date('n')) / 3) - 1;
        return date('Y-m-d H:i:s', mktime(23, 59, 59, (int)$season * 3, (int)date('t', mktime(0, 0, 0, (int)$season * 3, 1, (int)date("Y"))), (int)date('Y')));
    }

    /**
     * 获取去年起始时间
     * @return false|string
     */
    static public function getLastYearStart()
    {
        return date("Y-01-01 00:00:00", strtotime('-1 year'));
    }

    /**
     * 获取去年结束时间
     * @return false|string
     */
    static public function getLastYearEnd()
    {
        return date("Y-12-31 23:59:59", strtotime('-1 year'));
    }

    /**
     * 获取今年起始时间
     * @return false|string
     */
    static public function getThisYearStart()
    {
        return date("Y-01-01 00:00:00");
    }

    /**
     * 获取今年结束时间
     * @return false|string
     */
    static public function getThisYearEnd()
    {
        return date("Y-12-31 23:59:59");
    }
}