<?php

namespace Factory\Payment;

interface PaymentFactoryInterface
{
    public static function createPayment(): PaymentInterface;
}