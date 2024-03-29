<?php

declare(strict_types=1);

namespace Nagoyaphp\Dokaku15;

class InputParser
{
    public function parse(string $input) : array
    {
        $output = [];

        $input = (int) $input;

        for ($point = 7; $point >= 0; $point--) {
            $n = 2 ** $point;

            if ($input >= $n) {
                $output[] = $point;
                $input = $input - $n;
            }
        }

        sort($output);

        return $output;
    }
}
