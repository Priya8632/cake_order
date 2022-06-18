<?php

$conn = mysqli_connect("localhost","root","");
if($conn){

    if(!mysqli_select_db($conn,"order")){
        $createdb = "CREATE DATABASE ORDER";
         if(mysqli_query($conn,$createdb)){
             mysqli_select_db($conn,"order");
         }
        }
    }
else{
    echo mysqli_connect_error();
}

?>