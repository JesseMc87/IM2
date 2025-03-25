<?php
include 'views/header.php';
?>
<form id="registerform" action="" method="POST">
    <label for="uname">Username</label>
  <?php 
    if(isset($_GET['uname_error'])){
      if($_GET['uname_error']==1){
          echo "<span class='error'>*</span>";
      }

    }
  
  
  ;?>


      <input type="text" name="uname=" id="uname" placeholder="Username " required>
    <label for="email">Email</label>
    <?php 
    if(isset($_GET['email_error'])){
      if($_GET['email_error']==1){
          echo "<span class='error'>*</span>";
      }

    }
  
  
  ;?>


      <input type="text" name="email=" id="uname" placeholder="Email" rrequired>
    <label for="fname">First name</label>
      <input type="text" name="fname=" id="fname" placeholder="First name" required>
    <label for="lname">Last name</label>
      <input type="text" name="lname=" id="lname" placeholder="Last name" required>
      <div id="cbgender">
          <label for="gender">Gender</label>
          <select name="gender" id="gender">
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="prefer">Prefer not to say</option>
          </select>    
      </div>
    <label for="bdate">Birth Date</label>
      <input type="date" name="bdate=" id="bdate">
    <label for="pass">Password</label>
    <?php 
    if(isset($_GET['password_error'])){
      if($_GET['password_error']==1){
          echo "<div class='error'>*</div>";
      }

    }
  
  
  ;?>

      <input type="password" name="pass" id="pass" placeholder="Password" required>
    <label for="conpass">Confirm Password</label>

    <?php 
    if(isset($_GET['password_error'])){
      if($_GET['password_error']==1){
          echo "<div class='error'>Password does not Match</div>";
      }

    }
  
  
  ;?>

      <input type="password" name="conpass" id="conpass" placeholder="Confirm Password" required>
    <input type="checkbox" name="signedin" id="signedin" value="signedin">
    <label for="signedin">Agree:<a href="" class="end">End-user License</a></label>
    <input type="submit" value="Register">
</form>
<?php
        include "views/footer.php";
        
  ?>