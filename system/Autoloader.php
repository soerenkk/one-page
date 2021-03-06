<?php

namespace System;

/**
 * Autoloads classes
 *
 * @author    Søren Korsholm Kjeldsen <contact at soerenkk dot dk>
 * @license   MIT License
 */
class Autoloader
{
    private $dir;
    
    // $system must be the same as the namespace \\
    private $system = "System";

    public function __construct($dir = null)
    {
        if (is_null($dir)) {
            $dir = dirname(__FILE__).'/..';
        }
        $this->dir = $dir;
        
        echo "Hi";
    }
    /**
     * Registers system_Autoloader as an SPL autoloader.
     */
    public static function register($dir = null)
    {
        ini_set('unserialize_callback_func', 'spl_autoload_call');
        spl_autoload_register(array(new self($dir), 'autoload'));
    }

    /**
     * Handles autoloading of classes.
     *
     * @param  string  $class  A class name.
     *
     * @return boolean Returns true if the class has been loaded
     */
    public function autoload($class)
    {
        
        if (0 !== strpos($class, $this->system)) {
            return;
        }

        if (file_exists($file = $this->dir.'/'.str_replace('\\', '/', $class).'.php')) {
            require $file;
        }
    }
}
