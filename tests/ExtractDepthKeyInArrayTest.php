<?php

namespace PbraidersTest\Stdlib;

class ExtractDepthKeyInArrayTest extends \PHPUnit\Framework\TestCase
{

    /**
     * @covers ::\Pbraiders\Stdlib\extractDepthKeyInArray
     * @group specification
     */
    public function testextractDepthKeyInArrayTrue()
    {
        $aActual = [
            'a' => 'a',
            'b' => [
                'c' => 'c',
                'e' => [
                    'f' => 'ff',
                    'g' => 'g',
                ],
                'd' => 'd',
            ],
            'h' => 'h',
        ];

        $aFilter = [
            'b' => [
                'e' => [
                    'f' => true,
                ],
            ],
        ];

        $return = \Pbraiders\Stdlib\extractDepthKeyInArray($aActual, $aFilter);
        $this->assertSame('ff', $return);
    }

    /**
     * @covers ::\Pbraiders\Stdlib\extractDepthKeyInArray
     * @group specification
     */
    public function testextractDepthKeyInArrayNotArray()
    {
        $aActual = [
            'a' => 'a',
            'b' => [
                'c' => 'c',
                'e' => [
                    'f' => 'ff',
                    'g' => 'g',
                ],
                'd' => 'd',
            ],
            'h' => 'h',
        ];

        $aFilter = [
            'b' => [
                'd' => [
                    'g' => true,
                ]
            ],
        ];

        $return = \Pbraiders\Stdlib\extractDepthKeyInArray($aActual, $aFilter);
        $this->assertSame(null, $return);
    }

    /**
     * @covers ::\Pbraiders\Stdlib\extractDepthKeyInArray
     * @group specification
     */
    public function testextractDepthKeyInArrayMissingKey()
    {
        $aActual = [
            'a' => 'a',
            'b' => [
                'c' => 'c',
                'e' => [
                    'f' => 'ff',
                    'g' => 'g',
                ],
                'd' => 'd',
            ],
            'h' => 'h',
        ];

        $aFilter = [
            'b' => [
                'g' => true,
            ],
        ];

        $return = \Pbraiders\Stdlib\extractDepthKeyInArray($aActual, $aFilter);
        $this->assertSame(null, $return);
    }

    /**
     * @covers ::\Pbraiders\Stdlib\extractDepthKeyInArray
     * @group specification
     */
    public function testextractDepthKeyInArrayArray()
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
            'b' => [
                'e' => true,
            ],
        ];

        $aExpected = [
            'f' => 'f',
            'g' => 'g',
        ];

        $return = \Pbraiders\Stdlib\extractDepthKeyInArray($aActual, $aFilter);
        $this->assertSame($aExpected, $return);
    }
}
