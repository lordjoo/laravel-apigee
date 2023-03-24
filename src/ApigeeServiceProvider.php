<?php

namespace Lordjoo\Apigee;

use Lordjoo\Apigee\Exceptions\ErrorHandlerInterface;
use Lordjoo\Apigee\Exceptions\Handler;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ApigeeServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-apigee')
            ->hasConfigFile();
    }

    public function registeringPackage()
    {
        $this->app->bind("apigee", fn () => Factory::FromConfig());
        $this->app->singleton(Apigee::class, fn () => Factory::FromConfig());
        $this->app->alias(Apigee::class, 'apigee');
        $this->app->bind(ErrorHandlerInterface::class, Handler::class);
    }


}
