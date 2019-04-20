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

    public function test_線分の数を返す() : void
    {
        $lineSegments = new LineSegments(0, 1);
        $this->assertSame(1, $lineSegments->getLineCount());
    }

    public function test_線分の数を返す_オーバーフローした場合() : void
    {
        $lineSegments = new LineSegments(7, 0);
        $this->assertSame(1, $lineSegments->getLineCount());
    }

    public function test_何角形かを返す_3() : void
    {
        $lineSegments = new LineSegments(0, 1);
        $this->assertSame(3, $lineSegments->getCornerCount());
    }

    public function test_何角形かを返す_4() : void
    {
        $lineSegments = new LineSegments(0, 2);
        $this->assertSame(4, $lineSegments->getCornerCount());
    }

    public function test_何角形かを返す_5() : void
    {
        $lineSegments = new LineSegments(0, 3);
        $this->assertSame(5, $lineSegments->getCornerCount());
    }

    public function test_何角形かを返す_5_例外() : void
    {
        $lineSegments = new LineSegments(0, 4);
        $this->assertSame(5, $lineSegments->getCornerCount());
    }
}
