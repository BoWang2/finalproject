<?php 


class Manage
{



     public static function controll($class)
    {
//this is useful to see what class and namespace is being asked for
//echo $class . '<br>';
        $path = str_replace('\\', '/', $class) . '.php';
//this is useful to see what path is being asked for
echo $path . '<br>';
        if (is_file($path)) {echo "is files". '<br>';
            include $path;
            return;
        }
    }




}







spl_autoload_register(array('Manage', 'controll'));

 ?>