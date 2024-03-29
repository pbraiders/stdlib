# ReflectionTrait

ReflectionTrait is an utility trait for reflection. We use it to easily add reflection methods to a PHPUnit test class. When added, the test class has methods to access tested class protected methods and properties.

## How to use

```php

<?php

namespace Pbraiders;

use Pbraiders\Stdlib\ReflectionTrait;

class HelloWorld {

    protected string $name = 'Mike';

    protected function sayHelloTo( string $name): string {
        return 'Hello ' . $name;
    }

}

class HelloWorldTest extends \PHPUnit\Framework\TestCase
{
    use ReflectionTrait;

    public function test_protected_property()
    {
        $class = new HelloWorld();
        $property = $this->getProperty('\Pbraiders\HelloWorld', 'name');
        $actual = $property->getValue($class);
        $this->assertSame('Mike', $actual);
    }

    public function test_protected_method()
    {
        $class = new HelloWorld();
        $method = $this->getMethod('\Pbraiders\HelloWorld', 'sayHelloTo');
        $actual = $method->invokeArgs($class,['you']);
        $this->assertSame('Hello you', $actual);
    }

    public function test_protected_method_with_closure()
    {
        $class = new HelloWorld();
        $method = $this->getClosure($class, 'sayHelloTo');
        $actual = $class('you');
        $this->assertSame('Hello you', $actual);
    }
}

```
