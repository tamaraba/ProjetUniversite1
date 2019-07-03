<?php
    class Autoloader{
        static function register(){
            spl_autoload_register(array(__CLASS__,'autoload'));
        }
        static function autoload($class_name){
            if(file_exists('Class/'.$class_name. '.php'))
            {
                require 'Class/'.$class_name. '.php';
            }elseif(file_exists($class_name. '.php'))
            {
                require $class_name. '.php';
            }else
            {
                require '../Class/'.$class_name. '.php';
            }
        }
    }
?>