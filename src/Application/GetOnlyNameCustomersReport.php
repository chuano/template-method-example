<?php

declare(strict_types=1);

namespace App\Application;

use App\Domain\Customer;

class GetOnlyNameCustomersReport extends GetCustomersReport
{
    protected function body(array $customers): string
    {
        $lines = array_map(
            static fn(Customer $customer) => $customer->getName(),
            $customers
        );
        return implode("\n", $lines);
    }
}
