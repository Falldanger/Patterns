<?php

namespace Strategy;

final class Context
{

    private Strategy $strategy;

    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(Strategy $strategy): void
    {
        $this->strategy = $strategy;
    }

    public function doSomeBusinessLogic(): string
    {
//        Context: Sorting data using the strategy (not sure how it'll do it)
        $result = $this->strategy->doAlgorithm(['b', 'e', 'd', 'a', 'c']);
        return implode(",", $result);
    }

    public function getDefaultData(): string
    {
        $data = ['b', 'e', 'd', 'a', 'c'];
        return implode(",", $data);
    }
}
