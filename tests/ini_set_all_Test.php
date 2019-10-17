<?php

namespace PbraidersTest\Stdlib;

use function Pbraiders\Stdlib\ini_set_all;

class ini_set_all_Test extends \PHPUnit\Framework\TestCase
{

    /**
     * @covers ::\Pbraiders\Stdlib\ini_set_all
     * @group specification
     */
    public function test_ini_set_all_Success()
    {
        $sInitial = @ini_get('error_log');
        $sExpected = sprintf('/var/log/%s_pbraiders_error.log', date("Ymd"));
        $bReturn = ini_set_all(['error_log' => $sExpected]);
        $sActual = @ini_get('error_log');
        $this->assertTrue($bReturn);
        $this->assertSame($sExpected, $sActual);
        @ini_set('error_log', $sInitial);
    }
}
