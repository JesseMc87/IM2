<?php

$un = htmlspecialchars ($_POST['uname']);
$fn = htmlspecialchars ($_POST['fname']);
$ln = htmlspecialchars ($_POST['lname']);
$em = htmlspecialchars ($_POST['email']);
$gen = htmlspecialchars ($_POST['gender']);
$bdate = htmlspecialchars ($_POST['bdate']);
$pass = htmlspecialchars ($_POST['pass']);
$cpass = htmlspecialchars ($_POST['conpass']);

$con=create_connection();

if($con->connect_error){
    die("Failure".$con->connect_error);
}
//Validation of user

$sql_uname="SELECT * FROM user WHERE uname='$un'"; 
$result_uname=$con->query($sql_uname);
$uname_error=0;
if($result_uname->num_rows>0){
    $uname_error=1;
}

// check if email is available
$sql_email="SELECT * FROM user WHERE email='$un'"; 
$result_uname=$con->query($sql_enamil);
$email_error=0;
if($result_email->num_rows>0){
    $email_error=1;
}

// confirm password
$password_ERROR=0;
if(strcmp ($pass, $cpass)!=0){
    $password_ERROR=1;
}

//Insert user
if($uname_error==0 && $email_error==0 && $password_ERROR==0) {

$sql_insert="INSERT INTO user VALUES(0,'$un','$fn','$ln','$em','$gen','$bdate','$pass')";
$con->query($sql);

    header("location:.../signin.php");
}


else{
    header("location:.../signin.php?uname_error=$ename_error"
    . "&email_");
}