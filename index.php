<?php
declare(strict_types = 1);

require_once __DIR__ .'/vendor/autoload.php';

include_once __DIR__ . '/src/exception/Exception.php';

// $db = new mysqli( 'wrong_host' , 'root', 'password', 'test' );
    
// exit;

// $config = \App\Helpers\Config::getFileContent('app');

// var_dump($config);


// $logger = new \App\Logger\Logger();

// $logger->log( \App\Logger\LogLevel::EMERGENCY, 'There is an emergency situation', [
//     'exception' => "This is an exception",
//     'action' => 'login'
// ]);

// $logger->log( \App\Logger\LogLevel::CRITICAL, 'There is an critical situation', [
//     'exception' => "This is a critical exception",
//     'action' => 'login'
// ]);

// $logger->log( \App\Logger\LogLevel::WARNING, 'There is a warning', [
//     'exception' => "This is a warning exception",
//     'action' => 'login'
// ]);

// $logger->info( 'Test info function', [
//     'id' => 5,
//     'action' => 'login'
// ]);

// $config = \App\Helpers\Config::get('dsfsfdsdf');


$file = __DIR__ . '/src/configs/app.php';

var_dump($file);
var_dump(file_exists($file));
var_dump(is_readable($file));



// var_dump($config);


// $application = new \App\Helpers\App();
// var_dump($application->isDebugMode());
// echo $application->getEnvironment() . PHP_EOL;
// echo $application->getServerTime()->format('Y-m-d H:i:s') . PHP_EOL;

// if ( $application->isRunningFromConsole() ) {
//     echo "Running from console" . PHP_EOL;
// } else {
//     echo "Running from web server" . PHP_EOL;
// }