<?php

namespace Decorator;

class AddStrong extends Decorator implements Decoratorable
{
    public function operation(): string
    {
        return '<strong>' . parent::operation() . '</strong>';
    }
}