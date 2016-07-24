<?php
/**
 * Created by PhpStorm.
 * User: jm
 * Date: 30/03/16
 * Time: 6:24 PM
 */

namespace Support3w\Logger;


class stdoutLogger implements Logger {

    public function log($message)
    {
        if(is_array($message)) {
            echo print_r($message, true) . "\n";
        }else{
            echo $message . "\n";
        }
    }
}