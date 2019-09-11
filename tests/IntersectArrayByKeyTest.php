<?php

namespace PbraidersTest\Stdlib;

class IntersectArrayByKeyTest extends \PHPUnit\Framework\TestCase
{

    /**
     * @covers ::\Pbraiders\Stdlib\IntersectArrayByKey
     * @group specification
     */
    public function testIntersectArrayByKey()
    {
        $aActual = [
            'a' => 'a',
            'b' => [
                'c' => 'c',
                'e' => [
                    'f' => 'f',
                    'g' => 'g',
                ],
                'd' => 'd',
            ],
            'h' => 'h',
        ];

        $aFilter = [
            'a' => 1,
            'b' => [
                'e' => [
                    'g' => 2,
                ],
                'd' => 3,
            ],
        ];

        $aExpected = [
            'a' => 'a',
            'b' => [
                'e' => [
                    'g' => 'g',
                ],
                'd' => 'd',
            ],
        ];

        $aReturn = \Pbraiders\Stdlib\IntersectArrayByKey($aActual, $aFilter);
        $this->assertSame($aExpected, $aReturn);
    }
}
