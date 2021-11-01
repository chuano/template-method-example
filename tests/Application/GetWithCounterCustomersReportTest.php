<?php

namespace Tests\Application;

use App\Application\GetWithCounterCustomersReport;
use App\Domain\Customer;
use PHPUnit\Framework\TestCase;

class GetWithCounterCustomersReportTest extends TestCase
{
    /** @test */
    public function should_return_only_names_report(): void
    {
        $customers = [
            new Customer('Pedro Pérez', 16),
            new Customer('Antonio López', 1),
        ];

        $generator = new GetWithCounterCustomersReport();
        $report = $generator->generate($customers);

        $this->assertEquals($this->getExpected(), $report);
    }

    private function getExpected(): string
    {
        return "------------------------------------------------------\n"
            . "Informe de clientes\n"
            . "------------------------------------------------------\n"
            . "Pedro Pérez - 16\n"
            . "Antonio López - 1\n"
            . "------------------------------------------------------\n"
            . "Este informe es confidencial y no debe distribuirse\n"
            . "------------------------------------------------------\n";
    }
}
