<?php

declare(strict_types=1);

namespace App\Domain;

class Customer
{
    private string $name;
    private int $salesCounter;

    public function __construct(string $name, int $salesCounter)
    {
        $this->name = $name;
        $this->salesCounter = $salesCounter;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSalesCounter(): int
    {
        return $this->salesCounter;
    }
}
