<?php
 
 //Load config file:
  require_once 'config/config.php';

 //Load lib folder :
  // require_once "libraries/Controller.php";
  // require_once "libraries//Core.php";
  // require_once "libraries/Database.php";

 //Autoloader Core Libs

  spl_autoload_register(function($className){
    
    require_once "libraries/".$className .'.php';
  });


 

?>