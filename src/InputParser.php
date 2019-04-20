<?php

declare(strict_types=1);

namespace Nagoyaphp\Dokaku15;

class InputParser
{
    public function parse(string $input) : array
    {
        $output = [];

        $input = (int) $input;

        $n = 128;
        for ($point = 7; $point >= 0; $point--) {
            if ($input >= $n) {
                $output[] = $point;
                $input = $input - $n;
            }

            $n = $n / 2;
        }

        sort($output);

        return $output;
    }
}
