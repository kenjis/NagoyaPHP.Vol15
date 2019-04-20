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
        $point = 7;

        if ($input >= $n) {
            $output[] = $point;
            $input = $input - $n;
        }

        $n = $n / 2;
        $point--;

        if ($input >= $n) {
            $output[] = $point;
            $input = $input - $n;
        }

        $n = $n / 2;
        $point--;

        if ($input >= $n) {
            $output[] = $point;
            $input = $input - $n;
        }

        $n = $n / 2;
        $point--;

        if ($input >= $n) {
            $output[] = $point;
            $input = $input - $n;
        }

        $n = $n / 2;
        $point--;

        if ($input >= $n) {
            $output[] = $point;
            $input = $input - $n;
        }

        $n = $n / 2;
        $point--;

        if ($input >= $n) {
            $output[] = $point;
            $input = $input - $n;
        }

        $n = $n / 2;
        $point--;

        if ($input >= $n) {
            $output[] = $point;
            $input = $input - $n;
        }

        $n = $n / 2;
        $point--;

        if ($input === $n) {
            $output[] = $point;
            $input = $input - $n;
        }

        sort($output);

        return $output;
    }
}
