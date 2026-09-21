<?php

declare(strict_types=1);

namespace VendorName\PackageName\Tests;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use VendorName\PackageName\Example;

#[CoversClass(Example::class)]
final class ExampleTest extends TestCase
{
    #[Test]
    public function fooReturnsBar(): void
    {
        $example = new Example();
        $this->assertSame('bar', $example->foo());
    }
}
