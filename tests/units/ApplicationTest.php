<?php

namespace   Tests\Units;

use App\Helpers\App;
use PHPUnit\Framework\TestCase;

class ApplicationTest extends TestCase
{
    public function testItCanGetInstanceOfApplication()
    { 
        $this->assertInstanceOf(App::class, new App  );
    }

    public function testItCanGetAppName()
    {
        $app = new App();
        $this->assertEquals('Bug Report App', $app->getAppName());
    }

    public function testItCanGetEnvironment()
    {
        $app = new App();
        $this->assertEquals('localhost', $app->getEnvironment());
    }

    public function testItCanGetDebugMode()
    {
        $app = new App();
        $this->assertTrue($app->isDebugMode());
    }

    public function testItCanGetLogPath()
    {
        $app = new App();
        $this->assertStringContainsString('/logs', $app->getLogPath());
    }

     
}