<?php

namespace App\Providers;

use App\Modules\Common\Library\Mixins\ModelMixin;
use App\Modules\Common\Library\Mixins\RequestMixin;
use App\Modules\Common\Library\Mixins\RouteMixin;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class MixinServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //

    }

    /**
     * @throws \ReflectionException
     */
    public function boot()
    {
        //
        Request::mixin(new RequestMixin());
        Builder::mixin(new ModelMixin());
        Route::mixin(new RouteMixin());
    }
}
