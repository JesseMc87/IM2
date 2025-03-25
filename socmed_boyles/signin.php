<?php
include 'views/header.php';
?>
<form  id="signinform" action="model/signin_user.php" method="POST">
    <label for="uname">Username</label>
    <input type="text" name="uname" id="uname" placeholder="Username or Email" required>
    <label for="password">Password</label>
    <input type="password" name="pass" id="pass" placeholder="Password" required>
    <input type="checkbox" name="signedin" id="signedin" value="signedin">
    <label  for="signedin">Remember Me</label>
    <label for="forgot"><a href="#" class="pass">Forgot Password</label></a>
    <input type="submit" class="btn" value="Sign In">
</form>

<?php
 include 'views/footer.php';
 ?> 