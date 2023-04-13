<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if($this->app->environment('production'))
        {
            URL::forceScheme('https');
        }

        //
        VerifyEmail::toMailUsing(function($notificable, $url){
            return(new MailMessage)
                -> subject('Verificar Cuenta')
                -> line('Tu cuenta ya esta casi lista, solo debes presionar el enlace a continuacion')
                -> action('Confirmar Cuenta', $url)
                -> line('Si no creaste esta cuenta, puedes ignorar este mensaje');
        });
    }
}
