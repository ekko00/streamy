<?php
$user = "root";
$pass = "root";
$dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);

function ajouterVideo(){
  
}

if (isset($_GET['file'])) {
    $file = $_GET['file'] ;
        if (file_exists($file) && is_readable($file) && preg_match('/\.mp3$/',$file))  {
            header('Content-type: application/mp3');
            header("Content-Disposition: attachment; filename=\"$file\"");
            readfile($file);
        }
    } else {
    header("HTTP/1.0 404 Not Found");
    echo "<h1>Error 404: File Not Found: <br /><em>$file</em></h1>";
}
?>

save it as download.php

then create a link like this one

<html>
<body>
<a href="index.php?file=test.mp3">download</a>
</body>
</html>
