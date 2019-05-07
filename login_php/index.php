<!DOCTYPE html>
<?php
    session_start();

    $username = "user";
    $password = "password";


    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) //Si loggedin est isset et true
    {
        header('Location: success.php'); // redirection vers success.php
    }

    if(isset($_POST['username']) && isset($_POST['password'])) //Si username et password sont set
    {
        if($_POST['username'] == $username && $_POST['password'] == $password) // Si username et password correspondent
        {
            $_SESSION['loggedin'] = true; // loggedIn est true (Pour savoir si on a déjà été log).
            header('Location: success.php');
        }
    }


?>

<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="POST" action="index.php">
        Username:<br>
        <input type="text" name="username"><br>
        Password:<br>
        <input type="password" name="password"><br>
        <input type="submit" value="login">
    </form>
</body>
</html>
