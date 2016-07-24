<?php
/**
 * Created by PhpStorm.
 * User: jm
 * Date: 30/03/16
 * Time: 8:03 PM
 */

namespace Support3w\Logger;


class LoggerComposite implements Logger {

    /**
     * @var Logger[]
     */
    protected $logger = array();

    public function __construct(array $loggers) {
        $this->logger = $loggers;
    }

    public function add(Logger $logger) {
        $this->logger[] = $logger;
    }

    public function log($msg)
    {
        /**
         * @var Logger $logger
         */
        foreach($this->logger as $logger)  {
            $logger->log($msg);
        }
    }
}