<?php

function create_connection(){
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "socmed_boyles";
    
    return new mysqli($host,$username,$password,$database);
}

