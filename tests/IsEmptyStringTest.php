<?php

namespace PbraidersTest\Stdlib;

class IsEmptyStringTest extends \PHPUnit\Framework\TestCase
{

    /**
     * @covers ::\Pbraiders\Stdlib\isEmptyString
     * @group specification
     */
    public function testIsEmptyStringEmpty()
    {
        $bReturn = \Pbraiders\Stdlib\isEmptyString('');
        $this->assertTrue($bReturn);
    }

    /**
     * @covers ::\Pbraiders\Stdlib\isEmptyString
     * @group specification
     */
    public function testIsEmptyStringSpace()
    {
        $bReturn = \Pbraiders\Stdlib\isEmptyString('   ');
        $this->assertTrue($bReturn);
    }

    /**
     * @covers ::\Pbraiders\Stdlib\isEmptyString
     * @group specification
     */
    public function testIsEmptyStringNo()
    {
        $bReturn = \Pbraiders\Stdlib\isEmptyString('hello');
        $this->assertFalse($bReturn);
    }
}
