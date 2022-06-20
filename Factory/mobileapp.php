<?php

use Factory\Order;
use Factory\Payment\PaymentHelper;

//get from app Orders
$ordersData = array(
    [
        'order' => new Order(200),
        'paymentType' => 'swed_bank',
    ],
    [
        'order' => new Order(3334),
        'paymentType' => 'seb_bank',
    ],
    [
        'order' => new Order(1500),
        'paymentType' => 'google_pay',
    ],
);

echo 'mobile app payment' . PHP_EOL;

foreach ($ordersData as $ordersDataItem){
    $order = $ordersDataItem['order'];
    $paymentType = $ordersDataItem['paymentType'];
    $payment = PaymentHelper::getPaymentFactory($paymentType)->createPayment();
    $payment->pay($order);
}