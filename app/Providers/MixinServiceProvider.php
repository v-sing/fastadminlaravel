<?php

namespace App\Providers;

use App\Modules\Common\Library\Mixins\ModelMixin;
use App\Modules\Common\Library\Mixins\RequestMixin;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Request;
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

    }
}
