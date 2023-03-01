<?php

namespace Factory;

class HumanFactory
{
    public function create(string $name, int $age): Human
    {
        return new Human($name, $age);
    }
}