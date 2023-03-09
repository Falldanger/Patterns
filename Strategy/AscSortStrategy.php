<?php

namespace Strategy;

class AscSortStrategy implements Strategy
{
    public function doAlgorithm(array $data): array
    {
        sort($data);

        return $data;
    }
}
