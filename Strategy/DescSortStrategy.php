<?php

namespace Strategy;

class DescSortStrategy implements Strategy
{
    public function doAlgorithm(array $data): array
    {
        rsort($data);

        return $data;
    }
}
