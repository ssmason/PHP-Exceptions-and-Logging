<?php
namespace   Tests\Functional;

use \PHPUnit\Framework\TestCase;
use App\Logger\Logger;

/**
 * Class LoggerTest
 * @package Tests\Functional
 */
class LoggerTest extends TestCase {


    public function testItWritesLogFileToExpectedLocation()
    {
        $logger = new \App\Logger\Logger();

        // Use test-safe input
        $logger->info('Test message', ['key' => 'value']);

        $app = new \App\Helpers\App();
        $logPath = $app->getLogPath();
        $env = $app->getEnvironment();
        $expectedFile = sprintf('%s/%s-%s.log', $logPath, $env, date('j.n.Y'));

        $this->assertFileExists($expectedFile);

        $contents = file_get_contents($expectedFile);
        $this->assertStringContainsString('Level: info', $contents);
        $this->assertStringContainsString('Test message', $contents);
    }

}