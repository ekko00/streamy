<!DOCTYPE html>
<?php
// https://codepen.io/aquinault-1475846842/pen/LRQKLB

session_start();

if ($_SESSION['login'] == true) {
  header('Location: ./index.php');
  exit;
}

include './connect.php';

$user = strtolower(filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING));
$pass = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING);

if ($user && $pass) {
  //salt le password (verifier le hash)
  $pass     = md5($user . $pass);
  $sql      = "SELECT idUser, username, password FROM USERS";
  $response = mysqli_query($mysqli, $sql);
  while ($data = $response->fetch_assoc()) {
    //Si données sont correctes aller page home
    if ($user == $data['username'] && $pass == $data['password']) {
      $_SESSION['login'] = true;
      $_SESSION['user'] = $data['username'];
      $_SESSION['idUser'] = $data['idUser'];
      header('Location: ./index.php');
      exit;
    }
    //si données sont fausses revenir sur page login
    else {
      //header('Location: ./login.php');
      //exit;
    }
  }
}
?>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
  <link href="../css/stylesheet.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body class="loginBody">
  <div class="container">
    <div class="columns is-centered">
      <div class="column is-one-third">
        <form method="POST" action="#" class="formulaire">
          <div class="field">
            <label class="label has-text-white">Username :</label>
            <p class="control has-icons-left">
              <input class="input" type="text" placeholder="username" name="user">
              <span class="icon is-small is-left">
                <i class="fas fa-user"></i>
              </span>
            </p>
          </div>
          <div class="field">
            <label class="label has-text-white">Password :</label>
            <p class="control has-icons-left">
              <input class="input" type="password" placeholder="Password" name="pass">
              <span class="icon is-small is-left">
                <i class="fas fa-lock"></i>
              </span>
            </p>
          </div>
          <div class="buttonLogin">
            <input class="button is-fullwidth is-primary has-text-weight-bold" type="submit" value="login">
            <a href="register.php" class="button is-fullwidth is-primary has-text-weight-bold">go to register</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>
