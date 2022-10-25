<?php 
include('header.php'); 
if ($_SESSION['loggedIn'] == false){
    header('Location: signin.php');
}
?>

<!DOCTYPE html>
<h1>
    <?php 
    echo "Welcome ".$_SESSION['name'];
    ?>
</h1>
<img src="data/welcome.gif" alt="This is an animated welcome gif"/>
</html>