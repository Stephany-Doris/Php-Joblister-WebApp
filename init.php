<?php
//autoload all classes
//it will include the file whenever we instantiate the class.

//config file
require_once 'config.php';



//Autoloader
function __autoload($class_name){
   require_once 'lib/'.$class_name. '.php';

}
echo "hello";

 ?>
