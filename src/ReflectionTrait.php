<?php

/**
 * @package Pbraiders\Stdlib
 * @link    https://github.com/pbraiders/stdlib for the canonical source repository
 * @license https://github.com/pbraiders/stdlib/blob/master/LICENSE GNU General Public License v3.0 License.
 */

declare(strict_types=1);

namespace Pbraiders\Stdlib;

use Closure;
use ReflectionClass;
use ReflectionMethod;
use ReflectionProperty;

/**
 * Utility trait for reflection.
 */
trait ReflectionTrait
{

    /**
     * returns an accessible private or protected method.
     *
     * @param string $className
     * @param string $methodName
     * @return \ReflectionMethod
     */
    public function getMethod(string $className, string $methodName): ReflectionMethod
    {
        $pReflector = new ReflectionClass($className);
        $pMethod = $pReflector->getMethod($methodName);
        $pMethod->setAccessible(true);
        return $pMethod;
    }

    /**
     * returns an accessible private and protected property.
     *
     * @param string $className
     * @param string $propertyName
     * @return \ReflectionProperty
     */
    public function getProperty(string $className, string $propertyName): ReflectionProperty
    {
        $pReflector = new ReflectionClass($className);
        $pProperty = $pReflector->getProperty($propertyName);
        $pProperty->setAccessible(true);
        return $pProperty;
    }

    /**
     * returns a closure for a private or protected method.
     *
     * @param object $object
     * @param string $methodName
     * @return \Closure
     */
    public function getClosure(object $object, string $methodName): Closure
    {
        $pReflector = new ReflectionClass($object);
        $pMethod = $pReflector->getMethod($methodName);
        return $pMethod->getClosure($object);
    }
}
