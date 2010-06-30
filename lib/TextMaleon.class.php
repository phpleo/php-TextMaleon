<?php
require_once dirname(__FILE__).'/TextMaleonConfiguration.class.php';

class TextMaleon extends TextMaleonConfiguration
{

    // Hold an instance of the class
    private static $instance;
    
    /**
     * Singleton method
     * 
     * @return TextMaleon
     */
    static public function getInstance()
    {
        if (!isset(self::$instance))
        {
            $c = __CLASS__;
            self::$instance = new $c;
        }

        return self::$instance;
    }

}