<?php 
include('header.php'); 
include('connect.php');

$_SESSION['pass'] = '';
$_SESSION['retype'] = '';
$_SESSION['errors'] = [];
?>

<!DOCTYPE html>
<form action="ajax/validate.php?name=l" onsubmit="return validateNotEmpty(this)" method="POST">
    <label for="first_name">First Name</label>
    <input type="text" name="first_name" required> 
    <label for="last_name">Last Name</label> 
    <input type="text" name="last_name"> 
    <label for="email">Email</label> 
    <input type="email" name="email" onkeyup="email_check(this.value)" required> 
    <h3 class="error_check" id="check_email"></h3>
    <label for="password">Password</label> 
    <input type="password" name="password" onkeyup="pass_check(this.value)" required>
    <label for="retype_password">Retype Password </label> 
    <input type="password" name="retype_password" id="retype_password" onkeyup="retype_pass_check(this.value)" required> <br>
    <h3 class="error_check" id="check_retype_password"></h3>
    <button class="btn" type="submit" name="submit" id="submit_signup">OK</button>
</form>
</html>