<?php

namespace Dominiksenti\OrangeSwissPaymentSlip;

use Illuminate\Support\Facades\Facade;

class OrangeSwissPaymentSlipFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'orange-swiss-payment-slip';
    }
}
