<?php

if (($fileextension == "mp4") || ($fileextension == "ogg") || ($fileextension == "webm"))
{
echo "<video width='320' controls>
<source src='$path/$name' type='video/$fileextension'>
Your browser does not support the video tag.Votre
</video>";

}

?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Streamy</title>
  </head>
  <body>
    <form action="" method='post' enctype="multipart/form-data">
<input type="file" name="file"/><br><br>
	<input type="submit" value="Upload"/>
</form>
</form>
  </body>
</html>
