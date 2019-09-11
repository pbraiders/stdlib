<?php

namespace PbraidersTest\Stdlib;

class SortArrayByKeyTest extends \PHPUnit\Framework\TestCase
{

    /**
     * @covers ::\Pbraiders\Stdlib\sortArrayByKey
     * @group specification
     */
    public function testSortArrayByKey()
    {
        $aExpected = [
            'a' => [
                'x' => 1,
                'y' => [
                    'g' => 1,
                    'h' => 1,
                    'i' => 1,
                ],
                'z' => 1,
            ],
            'b' => 1,
            'c' => [
                'k' => 1,
                'm' => 1,
            ],
        ];
        $aActual = [
            'c' => [
                'm' => 1,
                'k' => 1,
            ],
            'a' => [
                'z' => 1,
                'x' => 1,
                'y' => [
                    'h' => 1,
                    'g' => 1,
                    'i' => 1,
                ],
            ],
            'b' => 1,
        ];
        \Pbraiders\Stdlib\sortArrayByKey($aActual);
        $this->assertSame($aExpected, $aActual);
    }
}
