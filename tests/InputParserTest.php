<?php

declare(strict_types=1);

namespace Nagoyaphp\Dokaku15;

use PHPUnit\Framework\TestCase;

class InputParserTest extends TestCase
{
    /**
     * @var InputParser
     */
    protected $parser;

    protected function setUp() : void
    {
        $this->parser = new InputParser();
    }

    public function test_1の場合() : void
    {
        $input = '1';
        $expected = [0];

        $this->assertSame($expected, $this->parser->parse($input));
    }

    public function test_128の場合() : void
    {
        $input = '128';
        $expected = [7];

        $this->assertSame($expected, $this->parser->parse($input));
    }

    public function test_165の場合() : void
    {
        $input = '165';
        $expected = [0, 2, 5, 7];

        $this->assertSame($expected, $this->parser->parse($input));
    }
}
