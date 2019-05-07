<?php

if (isset($_FILES['fileToSend'])) {
  $name= $_FILES['fileToSend']['name'];
  $tmp_name= $_FILES['fileToSend']['tmp_name'];
  $position= strpos($name, ".");
  $fileextension= substr($name, $position + 1);
  $fileextension= strtolower($fileextension) . 'test';

  if (isset($name)) {
  $path = './uploaded/';
  if (empty($name))
  {
    echo "Please choose a file";
  }
  else if (!empty($name)){
    if (($fileextension != "mp4") && ($fileextension != "ogg") && ($fileextension != "webm")) {
      echo "The file extension must be .mp4, .ogg, or .webm in order to be uploaded";
    }
    else if (($fileextension == "mp4") || ($fileextension == "ogg") || ($fileextension == "webm"))
    {
      if (move_uploaded_file($tmp_name, $path.$name)) {
        echo 'Uploaded!';
      }
    }

  }
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Streamy</title>
  </head>
  <body>
    <form action="#" method='post' enctype="multipart/form-data">
<input type="file" name="fileToSend"/><br><br>
	<input type="submit" value="Upload"/>
</form>
  </body>
</html>
