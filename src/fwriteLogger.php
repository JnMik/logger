<?php
/**
 * Created by PhpStorm.
 * User: jm
 * Date: 30/03/16
 * Time: 6:24 PM
 */

namespace Support3w\Logger;

use DateTime;

class fwriteLogger implements Logger {

    /**
     * @var
     */
    private $logFilepath;
    /**
     * @var bool
     */
    private $prefixLineWithDatetime;

    public function __construct($logFilepath, $prefixLineWithDatetime = false) {
        $this->logFilepath = $logFilepath;
        $this->prefixLineWithDatetime = $prefixLineWithDatetime;
    }

    public function log($message)
    {
        if($this->prefixLineWithDatetime) {
            file_put_contents($this->logFilepath, (new Datetime())->format('Y-m-d H:i:s') . " ", FILE_APPEND);
        }

        if(is_array($message)) {
            file_put_contents($this->logFilepath, print_r($message, true) . "\n", FILE_APPEND);
        }else{
            file_put_contents($this->logFilepath, $message . "\n", FILE_APPEND);
        }
    }
}