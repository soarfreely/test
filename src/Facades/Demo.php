<?php
/**
 * Desc: 门面
 * User: <zhangxiang_php@vchangyi.com>
 * Date: 2019/2/22 Time: 11:21
 */
namespace Soar\Demo\Facades;

use Illuminate\Support\Facades\Facade;

class Demo extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'demo';
    }
}