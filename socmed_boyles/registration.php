<?php
include 'views/header.php';
?>
<form id="loginform" action="" method="POST">
    <label for="uname">Username</label>
       <input type="text" name="uname" id="uname" placeholder="Username" required=>
    <label for="email">Email</label>
       <input type="text" name="email" id="email" placeholder="Email" required=>
    <label for="fname">First Name</label>
       <input type="text" name="fname" id="fname" placeholder="First Name" required=>
    <label for="lname">Last Name</label>
       <input type="text" name="lname" id="lname" placeholder="Last Name" required=>
    
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
