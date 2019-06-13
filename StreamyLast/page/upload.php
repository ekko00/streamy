<?php
session_start();
$userId = $_SESSION['idUser'];

if (isset($_FILES['fileToSend'])) {
  $name= $_FILES['fileToSend']['name'];
  $tmp_name= $_FILES['fileToSend']['tmp_name'];
  $position= strpos($name, ".");
  $fileextension= substr($name, $position + 1);

  if (isset($name)) {
    $path = '../uploaded/';
    if (empty($name))
    {
      $msg = "Please choose a file";
    }
    else if (!empty($name)){
      if (($fileextension != "mp4") && ($fileextension != "ogg") && ($fileextension != "webm")) {
        $msg = "The file extension must be .mp4, .ogg, or .webm in order to be uploaded";
      }
      else if (($fileextension == "mp4") || ($fileextension == "ogg") || ($fileextension == "webm"))
      {
        if (move_uploaded_file($tmp_name, $path.$name)) {
          $msg = ' Uploaded!';
          include './connect.php';
          $nameVideo = filter_input(INPUT_POST, 'nameVideo');
          $descVideo = filter_input(INPUT_POST, 'descVideo');
          $sql = "INSERT INTO VIDEO(name, description, link, idUser) VALUES (\"$nameVideo\", \"$descVideo\", \"$name\", \"$userId\")";
          if (mysqli_query($mysqli, $sql)) {
            $msg = "New record created successfully";
            header('Location: ./index.php');
            exit;
          }
          else {
            $msg = "Error: " . $sql . "<br>" . mysqli_error($mysqli);
          }
        }
      }

    }
  }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Streamy</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
  <link href="../css/stylesheet.css" rel="stylesheet" type="text/css">
</head>


<body class="loginBody">
  <div class="container containerUpload ">
    <div class="columns is-centered">
      <div class="column is-one-third">
        <form method="POST" action="#" enctype="multipart/form-data" >
        <div class="has-text-white"><?= $msg ?><br><br></div>
        <input class="has-text-white" type="file" name="fileToSend"/><br><br>
          <div class="field">
            <label class="label has-text-white">Nom de la video :</label>
            <p class="control has-icons-left">
              <input class="input" type="text" placeholder="" name="nameVideo">
              <span class="icon is-small is-left">
                <i class="fas fa-user"></i>
              </span>
            </p>
          </div>
          <div class="field">
            <label class="label has-text-white">Description :</label>
            <p class="control has-icons-left">
              <input class="input" type="text" placeholder="" name="descVideo">
              <span class="icon is-small is-left">
                <i class="fas fa-lock"></i>
              </span>
            </p>
          </div>
          <div class="buttonLogin">
            <input class="button is-fullwidth is-primary has-text-weight-bold" type="submit" value="Upload">
            <a href="index.php" class="button is-fullwidth is-primary has-text-weight-bold buttonUpload">back home</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>


</html>
