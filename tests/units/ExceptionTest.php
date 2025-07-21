<?php

use PHPUnit\Framework\TestCase;
use App\Exception\BaseException;
use App\Exception\NotFoundException;
use Tests\Stubs\DummyException;

class ExceptionTest extends TestCase
{
    public function testBaseExceptionStoresMessageAndData()
    {
        $e = new DummyException('Something went wrong', ['key' => 'value'], 500);

        $this->assertInstanceOf(BaseException::class, $e);
        $this->assertEquals('Something went wrong', $e->getMessage());
        $this->assertEquals(500, $e->getCode());
        $this->assertSame(['key' => 'value'], $e->getExtraData());
    }

    public function testBaseExceptionSetDataAddsNewKey()
    {
        $e = new DummyException('Initial', ['a' => 1]);
        $e->setData('b', 2);

        $this->assertSame(['a' => 1, 'b' => 2], $e->getExtraData());
    }

    public function testBaseExceptionHandlesEmptyData()
    {
        $e = new DummyException('Empty test');
        $this->assertSame([], $e->getExtraData());
    }

    public function testNotFoundExceptionCanBeThrownAndCaught()
    {
        $this->expectException(NotFoundException::class);
        throw new NotFoundException('Not found', ['resource' => 'user']);
    }

    public function testNotFoundExceptionCarriesMessageAndData()
    {
        try {
            throw new NotFoundException('Resource not found', ['id' => 42]);
        } catch (NotFoundException $e) {
            $this->assertInstanceOf(BaseException::class, $e);
            $this->assertEquals('Resource not found', $e->getMessage());
            $this->assertSame(['id' => 42], $e->getExtraData());
        }
    }
}
