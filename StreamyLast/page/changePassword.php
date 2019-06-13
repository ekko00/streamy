<?php
include 'connect.php';

$user = strtolower(filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING));
$newPass = filter_input(INPUT_POST, 'newPass', FILTER_SANITIZE_STRING);

$salt = md5($user . $newPass);
//Saler le mot de passe
$newPass = md5($user . $salt . $newPass);

$sql = "UPDATE USERS SET password = \"$newPass\" WHERE username = \"$user\"";

if (mysqli_query($mysqli, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($mysqli);
}

?>
