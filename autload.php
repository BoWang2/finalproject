<?php 
    class Manage
    {
        static public function setDir($input)
        {
            return str_replace('\\', '/', $input) . '.php';
        }
        static public function autoload($class)
        {
            include self::setDir($class);
        }
    }
    spl_autoload_register(array('Manage', 'autoload'));

 ?>