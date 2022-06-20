<?php

namespace Factory\Payment;

class SebPaymentFactory implements PaymentFactoryInterface
{
    public static function createPayment(): PaymentInterface
    {
        // TODO: Implement createPayment() method.
        return new SebPayment();
    }
}