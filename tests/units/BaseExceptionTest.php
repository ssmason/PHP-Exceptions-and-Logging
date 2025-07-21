<?php

use PHPUnit\Framework\TestCase;
use App\Exception\BaseException;
use Tests\Stubs\DummyException;

class BaseExceptionTest extends TestCase
{
    public function testItStoresAndReturnsExtraData()
    {
        $e = new DummyException('Something went wrong', ['foo' => 'bar']);

        $this->assertSame(['foo' => 'bar'], $e->getExtraData());

        $e->setData('baz', 123);
        $this->assertSame(['foo' => 'bar', 'baz' => 123], $e->getExtraData());
    }

    public function testItExtendsStandardException()
    {
        $e = new DummyException('Test', [], 404);

        $this->assertInstanceOf(\Exception::class, $e);
        $this->assertSame('Test', $e->getMessage());
        $this->assertSame(404, $e->getCode());
    }
}
