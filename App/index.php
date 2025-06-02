<?php

   if(file_exists(__DIR__ .'/autoload.php')) {
    require_once __DIR__. '/autoload.php';
   }
 
   $foods = ["Mango","Apple","Banana","Lichi"];
   echo "<pre>";
   print_r($foods);
   echo "</pre>";
   // info('Moriom', 20 ,"PHP. <br>");
   // info('Rifat', 10 ,"Laravel.");


?>