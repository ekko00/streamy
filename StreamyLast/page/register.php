<!DOCTYPE html>
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
          <div class="field">
            <label class="label has-text-white">Confirm Password :</label>
            <p class="control has-icons-left">
              <input class="input" type="password" placeholder="Password confirmation" name="passConfirm">
              <span class="icon is-small is-left">
                <i class="fas fa-lock"></i>
              </span>
            </p>
          </div>
          <div class="field">
            <label class="label has-text-white">key :</label>
            <p class="control has-icons-left">
              <input class="input" type="text" placeholder="activation code" name="code">
              <span class="icon is-small is-left">
                <i class="fas fa-key"></i>
              </span>
            </p>
          </div>
          <div class="buttonLogin">
            <input class="button is-fullwidth is-primary has-text-weight-bold" type="submit" value="register">
            <a href="login.php" class="button is-fullwidth is-primary has-text-weight-bold">go to login</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>
