<?php

namespace PbraidersTest\Stdlib;

use function Pbraiders\Stdlib\ini_set_all;

class IniSetAllTest extends \PHPUnit\Framework\TestCase
{

    /**
     * @covers ::\Pbraiders\Stdlib\ini_set_all
     * @group specification
     */
    public function testIniSetAllSuccess()
    {
        $sInitial = @ini_get('error_log');
        $sExpected = sprintf('/var/log/%s_pbraiders_error.log', date("Ymd"));
        $bReturn = ini_set_all(['error_log' => $sExpected]);
        $sActual = @ini_get('error_log');
        self::assertTrue($bReturn);
        self::assertSame($sExpected, $sActual);
        @ini_set('error_log', $sInitial);
    }
}
