<?php

namespace PbraidersTest\Stdlib;

use function Pbraiders\Stdlib\is_string_empty;

class is_string_empty_Test extends \PHPUnit\Framework\TestCase
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
    public function test_is_string_empty_Success(string $input, bool $expected)
    {
        $bActual = is_string_empty($input);
        $this->assertSame($expected, $bActual);
    }
}
