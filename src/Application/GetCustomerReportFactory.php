<?php

declare(strict_types=1);

namespace App\Application;

class GetCustomerReportFactory
{
    public static function getGenerator(?string $type = null): GetCustomersReport
    {
        if ($type === 'counter') {
            return new GetWithCounterCustomersReport();
        }
        return new GetOnlyNameCustomersReport();
    }
}
