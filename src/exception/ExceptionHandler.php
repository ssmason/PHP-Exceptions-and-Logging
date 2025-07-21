<?php 
namespace App\Exception;

use Throwable, ErrorException;

class ExceptionHandler
{
    public function handle( Throwable $exception): void
    {
        $application = new \App\Helpers\App();

        if ( $application->isDebugMode() ) {
            // Log the exception details
            echo '<pre>';
            var_dump( $exception); 
            echo '</pre>';
        } else {
            echo 'Something went wrong. Please try again later.';
        }

        exit;
    }

    public function render( Throwable $exception): string
    {
        // Render a user-friendly error message
        return 'An error occurred: ' . $exception->getMessage();
    }

    public function convertWarningAndNoticesToException( $severity, $message,  $file, $line) 
    { 
        throw new ErrorException(
            $message,
            $severity,
            $severity,
            $file,
            $line
        ); 
    }

    
}