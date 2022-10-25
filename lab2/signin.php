<?php 
include('header.php'); 
include('connect.php');

$email = $password = '';

if (isset($_POST['submit_signin'])){
    $email = $_POST['email_signin'];
    $password = md5($_POST['password_signin']);
    echo $email;
    echo $password;
    $sql = "SELECT first_name FROM user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // free result from memory
    mysqli_free_result($result);
    mysqli_close($conn);
    if ($res){
        $_SESSION['loggedIn'] = true;
        $_SESSION['name'] = $res[0]['first_name'];
        header('Location: profile.php');
    }
    else {
        function_alert('Email and password do not match !');
    }
}

?>

<!DOCTYPE html>
<form name="sign_in_form" action="signin.php" onsubmit="return validateNotEmpty(this)" method="POST">
    <label for="email">Email:</label> 
    <input type="email" name="email_signin" value="<?php echo $email; ?>" required> 
    <label for="password">Password:</label> 
    <input type="password" name="password_signin" required>
    <button class="btn" type="submit" name="submit_signin" id="submit_signup">OK</button>
</form>
</html>