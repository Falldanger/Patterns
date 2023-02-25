<?php

namespace Decorator;

class AddWorldWord extends Decorator implements Decoratorable
{

    public function operation(): string
    {
        return parent::operation() . 'World!';
    }
}