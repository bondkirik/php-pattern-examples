<?php

namespace Factory\Payment;

use Factory\Order;

interface PaymentInterface
{
    public function pay(Order $order): void;
}