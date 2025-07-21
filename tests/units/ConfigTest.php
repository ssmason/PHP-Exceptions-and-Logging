<?php

namespace   Tests\Units;

use App\Helpers\Config;
use PHPUnit\Framework\TestCase;

class ConfigTest extends TestCase
{
   public function testItCanGetFileContent()
   {
       $config = new Config(); 
       $file = 'app'; 
       $content = $config->getFileContent( $file ); 
       $this->assertNotNull($content);
       $this->assertIsArray($content);
   }

   public function testItCanGet() {
         $config = new Config();
         $file = 'app';
         $content = $config->get($file);
         $this->assertIsArray($content);
         $this->assertArrayHasKey('app_name', $content);
         $this->assertArrayHasKey('env', $content);
         $this->assertArrayHasKey('debug', $content);
         $this->assertArrayHasKey('log_path', $content);

   }

}