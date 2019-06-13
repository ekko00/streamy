<!doctype html>
<?php
include './script.php';

$idVideo = filter_input(INPUT_GET, 'id');

//A décommenter !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
if ($idVideo && is_numeric($idVideo)) {
  getInfo($idVideo);
}else{
  header('Location: ./index.php');
}
//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

?>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Streamy : <?=$_SESSION['nameVideo']?></title>
  <link rel="stylesheet" href="../css/stylesheet.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:700&display=swap" rel="stylesheet">
  <script src="../js/script.js"></script>
</head>

<body>
  <?php include '../html/header.php'; ?>
  <main>
    <section class="section ">

        <div class="container boxtest">
          <div>
            <h1 class="title has-text-white"><?=$_SESSION['nameVideo']?></h1>
          </div>
          <div class="laucnher">
            <video width="320" height="240" controls class="videoLauncher">
              <source src="../uploaded/<?=$_SESSION['link']?>" type="video/mp4">
              Your browser does not support the video tag.
            </video>
          </div>
          <div class="navVideo">
            <button onclick="plyst('fav', <?=$idVideo?>)" class="button has-text-dark buttonVideo">Add favorit</button>
            <button onclick="plyst('wl', <?=$idVideo?>)" class="button has-text-dark buttonVideo">Add watch later</button>
            <button class="button has-text-dark buttonVideo">Downloads</button>
          </div>
          <div class="description has-text-white">
            <p><?=$_SESSION['description']?></p>
          </div>

      </div>
    </section>
  </main>

  <?php include '../html/footer.html'; ?>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="../js/main.js"></script>
</body>

</html>
