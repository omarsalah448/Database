<?php 
session_start();
function function_alert($msg) {
    echo "<script>alert('$msg');</script>";
}
?>

<!DOCTYPE html>
<html>
   <head>
    <link rel="stylesheet" href="style.css">
    <title>Lab #2</title>
   </head> 
   <body>
    <header>
        <div class="left">
            <a href="/lab2">Home</a>
            <a href="profile.php">Profile</a>
        </div>
        <div class="right">
            <?php 
            if (empty($_SESSION['loggedIn']) or $_SESSION['loggedIn'] == false){ ?>
                <a href="signin.php">Sign In</a>
                <a href="signup.php">Sign Up</a>
            <?php } 
            else{
            ?>
                <a href="signout.php">Sign Out</a>
            <?php }?>
        </div>
        <script src="validation.js"></script>
    </header>
   </body>
</html>