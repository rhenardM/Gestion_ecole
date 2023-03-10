<?php
namespace Model;

/*
    * classe autoloader
    * @package Tutoriel
*/ 
class Autoloader{

/*
    Enregistrement de notre autoloader
*/ 
    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }
    
    /**
     * Include le fichier corespod a notre classe
     * @param $class string le nom de nptre class a charger 
     */

     static function autoload($class){

        if (strpos($class, __NAMESPACE__ .'\\')===0) {
            # code...
            $class = str_replace(__NAMESPACE__.'\\', '', $class);
            $class = str_replace('\\', '/', $class);
            require __DIR__ . '/' . $class . '.php';
        }
     }
}