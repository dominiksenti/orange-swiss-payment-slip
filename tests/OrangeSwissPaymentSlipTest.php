<?php

namespace Dominiksenti\OrangeSwissPaymentSlip\Test;

use Dominiksenti\OrangeSwissPaymentSlip\OrangeSwissPaymentSlip;

class OrangeSwissPaymentSlipTest extends TestCase
{
    public function testAddition()
    {
        $result = OrangeSwissPaymentSlip::add(17, 3);

        $this->assertEquals(20, $result);
    }
}
