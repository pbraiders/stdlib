<?php

namespace PbraidersTest\Stdlib;

use function Pbraiders\Stdlib\ksort_recursive;

class KsortRecursiveTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Undocumented function
     *
     * @return array
     */
    public function provideSucessData(): array
    {
        $aData = require(__DIR__ . \DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'ksort_recursive.success.php');
        return $aData;
    }

    /**
     * @covers ::\Pbraiders\Stdlib\ksort_recursive
     * @dataProvider provideSucessData
     * @group specification
     */
    public function testKsortRecursiveSuccess(array $input, array $expected)
    {
        $bActual = ksort_recursive($input);
        self::assertTrue($bActual);
        self::assertSame($expected, $input);
    }
}
