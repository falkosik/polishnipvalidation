<?php

namespace Falkosik\Polishnipvalidator;

use Illuminate\Support\ServiceProvider;

class PolishNipValidatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        \Validator::extend('nip', NipNumberRule::class.'@passes');
        

        $this->loadTranslationsFrom(__DIR__ . '/translations', 'polishnipvalidator');
    }
public function register()
    {
        //
    }

    
}
