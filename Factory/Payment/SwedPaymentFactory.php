<?php

namespace Factory\Payment;

class SwedPaymentFactory implements PaymentFactoryInterface
{
    public static function createPayment(): PaymentInterface
    {
        // TODO: Implement createPayment() method.
        return new SwedPayment();
    }
}