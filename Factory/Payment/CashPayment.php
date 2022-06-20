<?php

namespace Factory\Payment;
use Factory\Order;

class CashPayment implements PaymentInterface
{
    public function pay(Order $order): void
    {
        // TODO: Implement pay() method.
        echo 'Cash pay success ' .$order->getSum() . ' EUR' .PHP_EOL;
    }
}