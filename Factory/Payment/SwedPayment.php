<?php

namespace Factory\Payment;
use Factory\Order;

class SwedPayment implements PaymentInterface
{
    public function pay(Order $order): void
    {
        // TODO: Implement pay() method.
        echo 'Swed pay success ' .$order->getSum() . ' EUR' .PHP_EOL;
    }
}