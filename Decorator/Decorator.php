<?php

namespace Decorator;

class Decorator
{
    protected Decoratorable $decoratorObject;

    public function __construct(Decoratorable $decoratorObject)
    {
        $this->decoratorObject = $decoratorObject;
    }

    protected function getObject(): Decoratorable
    {
        return $this->decoratorObject;
    }

    public function operation(): string
    {
        return $this->getObject()->operation();
    }
}
