<?php
include './script.php';

$search = filter_input(INPUT_GET, 'search');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Streamy home</title>

  <!-- Place your stylesheet here-->
  <link href="../css/stylesheet.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:700&display=swap" rel="stylesheet">

</head>

<body>

  <div class="stickyFooter">

    <?php include '../html/header.php'; ?>

    <main>
      <h1 class="title is-1 has-text-white">HOME</h1>
      <?php
      if ($search) {
        searchVideo($search);
      }
      else{
        listVideo();
      }
      ?>
    </main>
  </div>

  <?php include '../html/footer.html'; ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="../js/main.js"></script>

</body>

</html>
