<?php

namespace Factory\Payment;
use Factory\Order;

class GooglePayment implements PaymentInterface
{
    public function pay(Order $order): void
    {
        // TODO: Implement pay() method.
        echo 'Google pay success ' .$order->getSum() . ' EUR' .PHP_EOL;
    }
}
