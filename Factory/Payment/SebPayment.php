<?php

namespace Factory\Payment;
use Factory\Order;

class SebPayment implements PaymentInterface
{
    public function pay(Order $order): void
    {
        // TODO: Implement pay() method.
        echo 'SEB pay success ' .$order->getSum() . ' EUR' .PHP_EOL;
    }
}