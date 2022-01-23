<?php


// for the adapter pattern 

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


// for the strategy pattern 

