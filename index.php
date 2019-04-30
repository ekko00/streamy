<?php
$temp = filter_input(INPUT_POST, 'file');
if ($temp) {

$name= $_FILES['file']['name'];

$tmp_name= $_FILES['file']['tmp_name'];

$position= strpos($name, ".");

$fileextension= substr($name, $position + 1);

$fileextension= strtolower($fileextension);


if (isset($name)) {

$path= './test/';
if (empty($name))
{
echo "Please choose a file";
}
else if (!empty($name)){
if (($fileextension !== "mp4") && ($fileextension !== "ogg") && ($fileextension !== "webm"))
echo "The file extension must be .mp4, .ogg, or .webm in order to be uploaded";
}


else if (($fileextension == "mp4") || ($fileextension == "ogg") || ($fileextension == "webm"))
{
if (move_uploaded_file($tmp_name, $path.$name)) {
echo 'Uploaded!';
}
}
}

if (($fileextension == "mp4") || ($fileextension == "ogg") || ($fileextension == "webm"))
{
echo "<video width='320' controls>
<source src='$path/$name' type='video/$fileextension'>
Votre explorateur ne supporte pas les tags vidéos.
</video>";
// Your browser does not support the video tag.
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
<input type="file" name="file"/><br><br>
	<input type="submit" value="Upload"/>
</form>
</form>
  </body>
</html>
