<?php

namespace Decorator;

class Hello implements Decoratorable
{

    public function operation(): string
    {
        return 'Hello';
    }
}