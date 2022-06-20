<?php

namespace Factory\Payment;

class PaymentHelper
{
    public static function getPaymentFactory(string $paymentType): PaymentFactoryInterface
    {
        switch ($paymentType){
            case 'swed_bank' : {
                return new SwedPaymentFactory();
            }
            case 'seb_bank' : {
                return new SebPaymentFactory();
            }
            case 'google_pay' : {
                return new GooglePaymentFactory();
            }
            case 'cash' : {
                return new CashPaymentFactory();
            }
            default:{
                throw new \Exception('undefined payment type:' . $paymentType);
            }
        }
    }
}