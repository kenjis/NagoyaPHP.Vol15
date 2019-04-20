<?php

declare(strict_types=1);

namespace Nagoyaphp\Dokaku15;

class LineSegments
{
    const OVERFLOW_COUNT = 8;

    /**
     * @var int 線分の始点（0〜7）
     */
    private $startPoint;

    /**
     * @var int 線分の終点（0〜7）
     */
    private $endPoint;

    public function __construct(int $start, int $end)
    {
        $this->startPoint = $start;
        $this->endPoint = $end;
    }

    /**
     * 線の数（長さ）を返す
     *
     * @return int
     */
    public function getCount() : int
    {
        $count = $this->endPoint - $this->startPoint;

        if ($count < 0) {
            $count = $count + self::OVERFLOW_COUNT;
        }

        return $count;
    }

    /**
     * 何角形かを返す
     *
     * @return int
     */
    public function getCornerCount() : int
    {
        if ($this->getCount() === (self::OVERFLOW_COUNT / 2)) {
            return $this->getCount() + 1;
        }

        return $this->getCount() + 2;
    }
}
