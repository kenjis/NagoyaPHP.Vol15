<?php

declare(strict_types=1);

namespace Nagoyaphp\Dokaku15;

class InputParser
{
    public function parse(string $input) : array
    {
        $output = [];

        $input = (int) $input;

        if ($input >= 128) {
            $output[] = 7;
            $input = $input - 128;
        }

        if ($input >= 64) {
            $output[] = 6;
            $input = $input - 64;
        }

        if ($input >= 32) {
            $output[] = 5;
            $input = $input - 32;
        }

        if ($input >= 16) {
            $output[] = 4;
            $input = $input - 16;
        }

        if ($input >= 8) {
            $output[] = 3;
            $input = $input - 8;
        }

        if ($input >= 4) {
            $output[] = 2;
            $input = $input - 4;
        }

        if ($input === 1) {
            $output[] = 0;
            $input = $input - 1;
        }

        sort($output);

        return $output;
    }
}
