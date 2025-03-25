<?php

function creat_connection(){
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "socmed_boyles";
    
    return new mysql($host,$username,$password,$database);
}

