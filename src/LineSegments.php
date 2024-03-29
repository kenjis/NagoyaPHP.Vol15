<?php

declare(strict_types=1);

namespace Nagoyaphp\Dokaku15;

/**
 * 八角形の辺の線分の集まり
 * 頂点の場所を表す始点と終点を持つ
 */
class LineSegments
{
    const OVERFLOW_COUNT = 8;

    /**
     * @var int 線の始点（0〜7）
     */
    private $startPoint;

    /**
     * @var int 線の終点（0〜7）
     */
    private $endPoint;

    public function __construct(int $start, int $end)
    {
        $this->startPoint = $start;
        $this->endPoint = $end;
    }

    /**
     * 線分の数（長さ）を返す
     */
    public function getLineSegmentCount() : int
    {
        $count = $this->endPoint - $this->startPoint;

        if ($count < 0) {
            $count = $count + self::OVERFLOW_COUNT;
        }

        return $count;
    }

    /**
     * 何角形かを返す
     */
    public function getCornerCount() : int
    {
        if ($this->getLineSegmentCount() === (self::OVERFLOW_COUNT / 2)) {
            return $this->getLineSegmentCount() + 1;
        }

        return $this->getLineSegmentCount() + 2;
    }
}
