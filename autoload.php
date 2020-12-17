<?php

class Autoload{
    // méthode : autoloader
    public static function inclusionAuto($className){
        // new Controller\Controller
        // => Controller/Controller.php
        $path = str_replace('\\','/',$className) . '.php';
        require $path;
    }
}

// Déclaration de l'autoloader, la méthode doit être STATIC
spl_autoload_register(array('Autoload','inclusionAuto'));


