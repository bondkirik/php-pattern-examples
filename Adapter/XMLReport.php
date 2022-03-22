<?php

class XMLReport
{
    public function buildXML()
    {
        return '<?xml version="1.0"?>
            <root>
            <element><name>iphone 13</name><price>800</price><count>70</count>
            </element>
            <element><name>Xiaomi Redmi 20</name><price>350</price>
            <count>110</count></element>
            <element><name>Samsung S21</name>
            <price>750</price><count>45</count></element></root>';
    }
}