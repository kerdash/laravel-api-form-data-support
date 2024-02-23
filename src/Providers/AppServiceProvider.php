<?php

namespace HassanKerdash\LaravelApiFormDataSupport\Providers;

use Illuminate\Support\ServiceProvider;
use HassanKerdash\LaravelApiFormDataSupport\Middleware\FormDataMiddleware;

class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        (new FormDataMiddleware())->handle(request(), function ($request) {});
    }
}
