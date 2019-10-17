<?php

namespace Dominiksenti\OrangeSwissPaymentSlip\Test;

use Dominiksenti\OrangeSwissPaymentSlip\OrangeSwissPaymentSlipFacade;
use Dominiksenti\OrangeSwissPaymentSlip\OrangeSwissPaymentSlipServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    /**
     * Load package service provider
     * @param  \Illuminate\Foundation\Application $app
     * @return Dominiksenti\OrangeSwissPaymentSlip\OrangeSwissPaymentSlipServiceProvider
     */
    protected function getPackageProviders($app)
    {
        return [OrangeSwissPaymentSlipServiceProvider::class];
    }

    /**
     * Load package alias
     * @param  \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'OrangeSwissPaymentSlip' => OrangeSwissPaymentSlipFacade::class,
        ];
    }
}
