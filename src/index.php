<?php

use App\Application\GetCustomerReportFactory;
use App\Domain\Customer;

require __DIR__ . "/../vendor/autoload.php";

$customers = [
    new Customer('Pedro Pérez', 16),
    new Customer('Antonio López', 1),
];

$generator = GetCustomerReportFactory::getGenerator($argv[1] ?? null);
$report = $generator->generate($customers);

echo $report;
