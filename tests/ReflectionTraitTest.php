<?php

namespace PbraidersTest\Stdlib;

use Closure;
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
        /** @var ReflectionTrait */
        $pMock = $this->getMockForTrait(ReflectionTrait::class);
        $pReflectionMethod = $pMock->getMethod(\PbraidersTest\Stdlib\StdClass::class, 'theMethod');
        self::assertTrue($pReflectionMethod instanceof ReflectionMethod);

        $pObject = new StdClass();
        self::assertTrue($pReflectionMethod->invoke($pObject));
    }

    /**
     * @covers \Pbraiders\Stdlib\ReflectionTrait
     * @group specification
     */
    public function testGetProperty()
    {
        /** @var ReflectionTrait */
        $pMock = $this->getMockForTrait(ReflectionTrait::class);
        $pReflectionProperty = $pMock->getProperty(StdClass::class, 'theProperty');
        self::assertTrue($pReflectionProperty instanceof ReflectionProperty);

        $pObject = new StdClass();
        self::assertTrue($pReflectionProperty->getValue($pObject));
        $pReflectionProperty->setValue($pObject, \false);
        self::assertFalse($pReflectionProperty->getValue($pObject));
    }

    /**
     * @covers \Pbraiders\Stdlib\ReflectionTrait
     * @group specification
     */
    public function testGetClosure()
    {
        /** @var ReflectionTrait */
        $pMock = $this->getMockForTrait(ReflectionTrait::class);

        $pObject = new StdClass();
        $pClosure = $pMock->getClosure($pObject, 'theMethod');
        self::assertTrue($pClosure instanceof Closure);
        self::assertTrue($pClosure());
    }
}
