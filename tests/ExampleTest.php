<?php

declare(strict_types=1);

namespace Vendor\Package\Tests;

use PHPUnit\Framework\TestCase;
use Project\Example;

/**
 * Class ExampleTest
 */
class ExampleTest extends TestCase
{
    public function test_it_works() : void
    {
        $example = new Example();

        $this->assertInstanceOf(Example::class, $example);

        $this->assertEquals(true, $example->classCreated, "actual value is not equals to expected");

        $this->assertEquals(null, $example->thisIsPartlyCovered(), "foobarfoofowef");
    }
}
