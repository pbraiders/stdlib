<?php

namespace PbraidersTest\Stdlib;

use function Pbraiders\Stdlib\array_intersect_key_recursive;

class ArrayIntersectKeyRecursiveTest extends \PHPUnit\Framework\TestCase
{

    /**
     * Undocumented function
     *
     * @return array
     */
    public function provideSucessData(): array
    {
        $aData = require(__DIR__ . \DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'array_intersect_key_recursive.success.php');
        return $aData;
    }

    /**
     * @covers ::\Pbraiders\Stdlib\array_intersect_key_recursive
     * @dataProvider provideSucessData
     * @group specification
     */
    public function testArrayIntersectKeyRecursiveSuccess(array $input, array $expected)
    {
        $aReturn = array_intersect_key_recursive($input['array1'], $input['array2']);
        self::assertSame($expected, $aReturn);
    }
}
