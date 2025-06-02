<?php

/**
 * This is a dev info fumc
 */
  function info(string $name, int $age, string $skill){
      if( $skill ){
       echo "Hello {$name},You are {$age} years old and you are a {$skill}";
    }else {
         echo "Hello {$name}, You are {$age} years old";
      }
  }
  
?>