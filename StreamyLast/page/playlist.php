<?php
session_start();

//PlayList choisie
print $choosedPlyst = filter_input(INPUT_GET, 'playlist');
print $choosedVideo = filter_input(INPUT_GET, 'idVideo');
print $choosedUser = $_SESSION['idUser'];

function addPlaylist($playlist, $user, $video){
  include './connect.php';
  $sql = "INSERT INTO SAVE(type, idUser, idVideo) VALUES (\"$playlist\", \"$user\", \"$video\")";
  if (mysqli_query($mysqli, $sql)) {
    echo "New record created successfully";
    header('Location: ./video.php?id=' . $video);
  }
  else {
    echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
  }
}

addPlaylist($choosedPlyst, $choosedUser, $choosedVideo);

?>
