<?php

namespace LaravalSendpulse;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class SendPulseLaravelServiceProvider extends BaseServiceProvider
{

    /**
     * Perform post-registration booting of services.
     * @return void
     */
    public function boot(): void
    {

        $this->publishes(
            [
                __DIR__ . '/config/send-pulse.php' => config_path('send-pulse.php'),
            ],
            'config'
        );
    }

    /**
     * Register the service provider.
     *
     * @return \LaravalSendpulse\SendPulseService
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/send-pulse.php', 'send-pulse');

        $this->app->singleton(
            SendPulseFacade::class, fn () => new SendPulseService(config('send-pulse.userId'), config('send-pulse.secret'), config('send-pulse.bookId'))
        );
    }
}