<?php

namespace PbraidersTest\Stdlib;

use function Pbraiders\Stdlib\is_string_empty;

class IsStringEmptyTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Undocumented function
     *
     * @return array
     */
    public function provideSucessData(): array
    {
        $aData = require(__DIR__ . \DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'is_string_empty.success.php');
        return $aData;
    }

    /**
     * @covers ::\Pbraiders\Stdlib\is_string_empty
     * @dataProvider provideSucessData
     * @group specification
     */
    public function testIsStringEmptySuccess(string $input, bool $expected)
    {
        $bActual = is_string_empty($input);
        self::assertSame($expected, $bActual);
    }
}
