<!DOCTYPE html>
<?php 

session_start();

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Socmed</title>
        <link href="./res/mystyle.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
         <div class="navbar">
            <a href="./index.php">Home</a>
            <a href="./gallery.php">Gallery</a>
            <a href="./about.php">About</a>
           <?php
            if(isset($_SESSION['uid'])){
                
            
           ?> 
            <a href="./profile.php"><?php echo $_SESSION ['fname']." ".$_SESSION['lname'];?></a>
            
            <a href="./model/signout_user.php">Log Out</a>
           <?php
                }
                else{
                    
           ?>
            <a href="./signin.php"> Sign In</a>
            <a href="./signup.php">Sign Up</a>  
            <?php
            }
            ?>
            
            <!--hahay -->
        </div>
        
        