<?php

$con=new mysqli('localhost','root','','crudoperation');

if(!$con){
    die(mysqli_error($con));
  
}

// if($con){
    
//     echo "connected";
// }else{
//     die(mysqli_error($con));
// }

?>