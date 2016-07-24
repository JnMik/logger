<?php
/**
 * Created by PhpStorm.
 * User: jm
 * Date: 30/03/16
 * Time: 6:24 PM
 */

namespace Support3w\Logger;


class fwriteLogger implements Logger {

    /**
     * @var
     */
    private $logFilepath;

    public function __construct($logFilepath) {
        $this->logFilepath = $logFilepath;
    }

    public function log($message)
    {
        if(is_array($message)) {
            file_put_contents($this->logFilepath, print_r($message, true) . "\n", FILE_APPEND);
        }else{
            file_put_contents($this->logFilepath, $message . "\n", FILE_APPEND);
        }
    }
}