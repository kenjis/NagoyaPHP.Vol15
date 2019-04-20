<?php

declare(strict_types=1);

namespace Nagoyaphp\Dokaku15;

use PHPUnit\Framework\TestCase;

class LineSegmentsFactoryTest extends TestCase
{
    public function test_LineSegmentsを作成できる() : void
    {
        $factory = new LineSegmentsFactory();
        $input = [0, 2, 5, 7];
        $lineSegmentsArray = $factory->create($input);

        foreach ($lineSegmentsArray as $lineSegments) {
            $this->assertInstanceOf(LineSegments::class, $lineSegments);
        }

        $this->assertCount(4, $lineSegmentsArray);
    }

    public function test_作成したLineSegmentsの線分の数が正しい() : void
    {
        $factory = new LineSegmentsFactory();
        $input = [0, 2, 5, 7];
        $lineSegmentsArray = $factory->create($input);

        $this->assertSame(2, $lineSegmentsArray[0]->getLineSegmentCount());
        $this->assertSame(3, $lineSegmentsArray[1]->getLineSegmentCount());
        $this->assertSame(2, $lineSegmentsArray[2]->getLineSegmentCount());
        $this->assertSame(1, $lineSegmentsArray[3]->getLineSegmentCount());
    }
}
