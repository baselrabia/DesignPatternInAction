<?php


class AppServiceProvider extends ServiceProvider
{
    // ...

    public function register()
    {
        $this->app->singleton(Locator::class, function ($app) {
            switch ($app->make('config')->get('services.ip-locator')) {
                case 'api':
                    return new IpLocationLocator;
                case 'database':
                    return new IpDatabaseLocator;
                default:
                    throw new \RuntimeException('Unknown IP Locator service');
            }

          
        });
    }
}




/**
 * update AppServiceProvider To use LocatorFactory in making the locator
 * 
 */

class AppServiceProvider extends ServiceProvider
{
    // ...

    public function register()
    {
        $this->app->singleton(Locator::class, function ($app) {
            $locator = new LocatorFactory;
            return $locator->make($this->app->make('config')->get('services.ip-locator'));
        });
    }
}