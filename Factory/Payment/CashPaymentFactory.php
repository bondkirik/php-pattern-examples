<?php

namespace Factory\Payment;

class CashPaymentFactory implements PaymentFactoryInterface
{
    public static function createPayment(): PaymentInterface
    {
        // TODO: Implement createPayment() method.
        return new CashPayment();
    }
}