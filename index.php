<?php
require_once __DIR__ . '/vendor/koolreport/core/autoload.php';
require_once 'MyReport.php';

$report = new MyReport;
$report->run()->render();
