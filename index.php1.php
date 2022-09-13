<?php
session_start();
if(!$_SESSION['user']){
    header('location:index,php');
}
?>

<h1>Selamat Datang, <?php ech $_SESSION['user']; ?> di XII RPL 1</h1>

<br>
<br>
<form method="POST">

<input type="submit" name="logout" value="logout">

</form>

<?php

if (isset($_POST['logout'])) {

    session_unset($_SESSION['user']);
    header("location:index.php");

}

?>