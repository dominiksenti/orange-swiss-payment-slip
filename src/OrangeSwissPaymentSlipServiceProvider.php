<?php

namespace Dominiksenti\OrangeSwissPaymentSlip;

use Illuminate\Support\ServiceProvider;

class OrangeSwissPaymentSlipServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(OrangeSwissPaymentSlip::class, function () {
            return new OrangeSwissPaymentSlip();
        });

        $this->app->alias(OrangeSwissPaymentSlip::class, 'orange-swiss-payment-slip');
    }
}
