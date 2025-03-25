<?php
include 'views/header.php';
?>
<form id="loginform" action="model/Register_user.php" method="POST">
    <label for="uname">Username</label>
    <?php
        if(isset($_GET['uname_error'])){
            if($_GET['uname_error']==1){
                echo"<span class='error_msg'>*Invalid Username</span>";
            }
        }
      ?>

       <input type="text" name="uname" id="uname" placeholder="Username" required=>
       <label for="fname">First Name</label>
       <input type="text" name="fname" id="fname" placeholder="First Name" required=>
       <label for="lname">Last Name</label>
       <input type="text" name="lname" id="lname" placeholder="Last Name" required=>
       <label for="email">Email</label>

       <?php
        if(isset($_GET['email_error'])){
            if($_GET['email_error']==1){
                echo"<span class='error_msg'>*Invalid Email</span>";
            }
        }
      ?>
          <input type="text" name="email" id="email" placeholder="Email" required=>
       
    <div  id="cbgender">
        <label for="gender">Gender  </label>
        <select name="gender" id="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
    </div>
    <label for="bdate">Birthdate</label>
        <input type="date" name="bdate" id="bdate" required=>
    <label for="uname">Password</label> 
        <input type="password" name="pass" id="pass" placeholder="Password" required>
    <input type="checkbox" name="signedin" id="signedin" value="signedin">
           <label for="signedin"><a href="">End-user License</label>
    <input type="submit" value="login">


<?php
include 'views/footer.php'
?>
