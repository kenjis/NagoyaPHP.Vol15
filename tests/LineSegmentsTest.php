<?php

declare(strict_types=1);

namespace Nagoyaphp\Dokaku15;

use PHPUnit\Framework\TestCase;

class LineSegmentsTest extends TestCase
{
    /**
     * @var LineSegments
     */
    protected $lineSegments;

    public function test_LineSegmentsをインスタンス化できる() : void
    {
        $lineSegments = new LineSegments(0, 1);
        $this->assertInstanceOf(LineSegments::class, $lineSegments);
    }

    public function test_線の数を返す() : void
    {
        $lineSegments = new LineSegments(0, 1);
        $this->assertSame(1, $lineSegments->getCount());
    }

    public function test_線の数を返す_オーバーフローした場合() : void
    {
        $lineSegments = new LineSegments(7, 0);
        $this->assertSame(1, $lineSegments->getCount());
    }
}
