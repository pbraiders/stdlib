<?php

namespace PbraidersTest\Stdlib;

use Pbraiders\Stdlib\ReflectionTrait;
use PbraidersTest\Stdlib\StdClass;
use ReflectionMethod;
use ReflectionProperty;

class ReflectionTraitTest extends \PHPUnit\Framework\TestCase
{

    /**
     * @covers \Pbraiders\Stdlib\ReflectionTrait
     * @group specification
     */
    public function testGetMethod()
    {
        $pMock = $this->getMockForTrait(ReflectionTrait::class);
        $pActual = $pMock->getMethod(\PbraidersTest\Stdlib\StdClass::class, 'theMethod');
        self::assertTrue($pActual instanceof ReflectionMethod);
    }

    /**
     * @covers \Pbraiders\Stdlib\ReflectionTrait
     * @group specification
     */
    public function testGetProperty()
    {
        $pMock = $this->getMockForTrait(ReflectionTrait::class);
        $pActual = $pMock->getProperty(StdClass::class, 'theProperty');
        self::assertTrue($pActual instanceof ReflectionProperty);
    }
}
