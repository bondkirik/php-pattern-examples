<?php

require_once ('PHPArrayReportInterfaceAdapter.php');
require_once ('PHPArrayReport.php');
require_once ('JsonReport.php');
require_once ('JsonToPHPArrayReportAdapter.php');
require_once ('SerializedReport.php');
require_once ('SerializedToPHPArrayReportAdapter.php');
require_once ('XMLReport.php');
require_once ('XMLToPHPArrayReportAdapter.php');

$reports = [
    new JsonReport(),
    new PHPArrayReport(),
    new SerializedReport(),
    new XMLReport(),
];

function clientCode(array $reports): void{

    foreach ($reports as $report){
        if ($report instanceof PHPArrayReport){
            $reportData = $report;
        }elseif ($report instanceof JsonReport){
            $reportData = (new JsonToPHPArrayReportAdapter($report));
        }elseif ($report instanceof SerializedReport) {
            $reportData = (new SerializedToPHPArrayReportAdapter($report));
        }elseif ($report instanceof XMLReport) {
            $reportData = (new XMLToPHPArrayReportAdapter($report));
        }
        renderView($reportData);
    }
}

function renderView(PHPArrayReportInterfaceAdapter $adapter){
    print_r($adapter->getData());
}

clientCode($reports);