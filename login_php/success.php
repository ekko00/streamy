<!DOCTYPE html>
<?php
  session_start();

	$dbHost = "127.0.0.1";
	$dbName = "test";
	$dbUser = "user";
	$dbPass = "Pass";

	$dbParameter = "mysql:host=$dbHost;dbname=$dbName;charset=utf8";

	$bdd = new PDO($dbParameter, $dbUser, dbPass);

    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) // Si on est pas connecté
    {
        header('Location: index.php'); // redirection vers index.php
    }

    if(isset($_POST['logout'])) // Si j'appuie sur le button submit logout
    {
        session_destroy(); // Destruction session
        header('Location: index.php');
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <h2>You have logged in !</h2>
        <form method="POST">
            <input type="submit" value="logout" name="logout">
        </form>
    </body>
</html>
