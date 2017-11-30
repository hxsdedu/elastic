<?php
/**
 * Created by PhpStorm.
 * User: xiewh
 * Date: 2017/11/30
 * Time: 下午2:34
 */

namespace Hxsd\Elastic\Facades;


use Illuminate\Support\Facades\Facade;

class Elastic extends Facade
{
    /**
     * 获取组件的注册名称。
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'elastic';
    }
}