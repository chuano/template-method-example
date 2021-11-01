<?php

declare(strict_types=1);

namespace App\Application;

abstract class GetCustomersReport
{
    public function generate(array $customers): string
    {
        return $this->header() . $this->body($customers) . $this->footer();
    }

    abstract protected function body(array $customers): string;

    protected function header(): string
    {
        return "------------------------------------------------------\n"
            . "Informe de clientes"
            . "\n------------------------------------------------------\n";
    }

    protected function footer(): string
    {
        return "\n------------------------------------------------------\n"
            . "Este informe es confidencial y no debe distribuirse"
            . "\n------------------------------------------------------\n";
    }
}
