<?php

declare(strict_types=1);

namespace Nagoyaphp\Dokaku15;

class LineSegmentsFactory
{
    /**
     * @return LineSegments[]
     */
    public function create(array $input) : array
    {
        $lineSegments = [];

        // 配列の最後に最初の要素を追加した配列を作る
        $targets = $input;
        $targets[] = $input[0];

        $i = 0;
        foreach ($input as $point) {
            $lineSegments[] = new LineSegments($point, $targets[$i + 1]);
            $i++;
        }

        return $lineSegments;
    }
}
