<?php
session_start();

if (!$_SESSION['login'] == true && !isset($_SESSION['user'])) {
  header('Location: ./login.php');
  exit;
}

//Recuperer les informations des videos
function getInfo($idVideo){
  include './connect.php';
  $sql = "SELECT name, description, link, idUser FROM VIDEO WHERE idVideo = $idVideo";
  $response = mysqli_query($mysqli, $sql);
  while ($data = $response->fetch_assoc()) {
    $_SESSION['nameVideo'] = $data['name'];
    $_SESSION['description'] = $data['description'];
    $_SESSION['link'] = $data['link'];
    $_SESSION['idUser'] = $data['idUser'];
  }
}

//Lister les videos
function listVideo(){
  include './connect.php';
  $sql = "SELECT idVideo, name FROM VIDEO ORDER BY idVideo DESC; ";
  $response = mysqli_query($mysqli, $sql);
  while ($data = $response->fetch_assoc()) {
    print '<div class="container2">
    <a href="./video.php?id='. $data['idVideo'] .'"><div class="item"></div><h4 class="is-4 has-text-white has-text-centered titreVideo">' . $data['name'] . '</h4></a>
    </div>';
  }
}

//Video favoris
function videoFavoris(){
  $idVideo = array();
  $idUser = $_SESSION['idUser'];
  include './connect.php';

  $sql = "SELECT idVideo FROM SAVE WHERE idUser = $idUser AND type = \"fav\"";
  $response = mysqli_query($mysqli, $sql);
  while ($data = $response->fetch_assoc()) {
    array_push($idVideo, $data['idVideo']);
  }

  foreach ($idVideo as $id) {
    $sql = "SELECT idVideo, name FROM VIDEO WHERE idVideo = \"$id\"";
    $response = mysqli_query($mysqli, $sql);
    if ($response > 0) {
      while ($data = $response->fetch_assoc()) {
        print '<div class="container2">
        <a href="./video.php?id='. $data['idVideo'] .'"><div class="item"></div><h4 class="is-4 has-text-white has-text-centered titreVideo">' . $data['name'] . '</h4></a>
        </div>';
      }
    }
  }
}

function videoWatchLater(){
  $idVideo = array();
  $idUser = $_SESSION['idUser'];
  include './connect.php';

  $sql = "SELECT idVideo FROM SAVE WHERE idUser = $idUser AND type = \"wl\"";
  $response = mysqli_query($mysqli, $sql);
  while ($data = $response->fetch_assoc()) {
    array_push($idVideo, $data['idVideo']);
  }

  foreach ($idVideo as $id) {
    $sql = "SELECT idVideo, name FROM VIDEO WHERE idVideo = \"$id\"";
    $response = mysqli_query($mysqli, $sql);
    if ($response > 0) {
      while ($data = $response->fetch_assoc()) {
        print '<div class="container2">
        <a href="./video.php?id='. $data['idVideo'] .'"><div class="item"></div><h4 class="is-4 has-text-white has-text-centered titreVideo">' . $data['name'] . '</h4></a>
        </div>';
      }
    } else{
    }
  }
}


function searchVideo($search){
  include './connect.php';
  $sql = "SELECT idVideo, name FROM VIDEO WHERE name LIKE '%$search%' ORDER BY name ASC;";
  $response = mysqli_query($mysqli, $sql);
  if ($response > 0) {
    while ($data = $response->fetch_assoc()) {
      print '<div class="container2">
      <a href="./video.php?id='. $data['idVideo'] .'"><div class="item"></div><h4 class="is-4 has-text-white has-text-centered titreVideo">' . $data['name'] . '</h4></a>
      </div>';
    }
  } else{
    print 'Aucune video';
  }
}

function watchLater(){
  include './connect.php';
  $sql = "SELECT idVideo, name FROM VIDEO WHERE name LIKE '%$search%' ORDER BY name ASC;";
  $response = mysqli_query($mysqli, $sql);
  if ($response > 0) {
    while ($data = $response->fetch_assoc()) {
      print '<div class="container2">
      <a href="./video.php?id='. $data['idVideo'] .'"><div class="item"></div><h4 class="is-4 has-text-white has-text-centered titreVideo">' . $data['name'] . '</h4></a>
      </div>';
    }
  } else{
    print 'Aucune video';
  }
}
?>
