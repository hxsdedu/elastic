<?php
/**
 * Created by PhpStorm.
 * User: xiewh
 * Date: 2017/11/30
 * Time: 上午11:48
 */

namespace Hxsd\Elastic\Providers;

use Hxsd\Elastic\Elastic;
use Illuminate\Support\ServiceProvider;

class ElasticProviders extends ServiceProvider
{
    /**
     * 是否延时加载提供器。
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * 引导任何应用程序服务。
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * 在容器中注册绑定。
     *
     * @return void
     */
    public function register()
    {
        // 注册 Elastic 实现
        $this->registerNativeElastic();
    }

    /**
     * 注册 Elastic 实现
     *
     * @return void
     */
    protected function registerNativeElastic()
    {
        $this->app->singleton('elastic', function () {
            return new Elastic;
        });
    }
}
