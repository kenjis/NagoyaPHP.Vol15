<?php

declare(strict_types=1);

namespace Nagoyaphp\Dokaku15;

class Dokaku15
{
    public function run(string $input) : string
    {
        $parser = new InputParser();
        $points = $parser->parse($input);

        $factory = new LineSegmentsFactory();
        $lineSegmentsArray = $factory->create($points);

        $output = [];
        foreach ($lineSegmentsArray as $lineSegments) {
            $output[] = $lineSegments->getCornerCount();
        }

        sort($output);

        return implode('', $output);
    }
}
