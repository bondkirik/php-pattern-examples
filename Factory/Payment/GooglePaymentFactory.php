<?php

namespace Factory\Payment;

class GooglePaymentFactory implements PaymentFactoryInterface
{
    public static function createPayment(): PaymentInterface
    {
        // TODO: Implement createPayment() method.
        return new GooglePayment();
    }
}