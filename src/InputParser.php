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

        if ($input >= $n) {
            $output[] = 7;
            $input = $input - $n;
        }

        $n = $n / 2;

        if ($input >= $n) {
            $output[] = 6;
            $input = $input - $n;
        }

        $n = $n / 2;

        if ($input >= $n) {
            $output[] = 5;
            $input = $input - $n;
        }

        $n = $n / 2;

        if ($input >= $n) {
            $output[] = 4;
            $input = $input - $n;
        }

        $n = $n / 2;

        if ($input >= $n) {
            $output[] = 3;
            $input = $input - $n;
        }

        $n = $n / 2;

        if ($input >= $n) {
            $output[] = 2;
            $input = $input - $n;
        }

        $n = $n / 2;

        if ($input >= $n) {
            $output[] = 1;
            $input = $input - $n;
        }

        $n = $n / 2;

        if ($input === $n) {
            $output[] = 0;
            $input = $input - $n;
        }

        sort($output);

        return $output;
    }
}
