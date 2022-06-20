<?php

use Factory\Order;
use Factory\Payment\PaymentHelper;

$ordersData = array(
    [
        'order' => new Order(100),
        'paymentType' => 'swed_bank',
    ],
    [
        'order' => new Order(200),
        'paymentType' => 'seb_bank',
    ],
    [
        'order' => new Order(300),
        'paymentType' => 'google_pay',
    ],
    [
        'order' => new Order(400),
        'paymentType' => 'cash',
    ],
);

echo 'mobile app payment' . PHP_EOL;

foreach ($ordersData as $ordersDataItem){
    $order = $ordersDataItem['order'];
    $paymentType = $ordersDataItem['paymentType'];
    $payment = PaymentHelper::getPaymentFactory($paymentType)->createPayment();
    $payment->pay($order);
}