<?php

class PHPArrayReport implements PHPArrayReportInterfaceAdapter
{
    public function getData(): array
    {
        return [
            [
                'name' => 'iphone 13',
                'price' => 800,
                'count' => 70,
            ],
            [
                'name' => 'Xiaomi Redmi 20',
                'price' => 350,
                'count' => 110,
            ],
            [
                'name' => 'Samsung S21',
                'price' => 750,
                'count' => 45,
            ],
        ];
    }

}