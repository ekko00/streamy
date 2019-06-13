<?php
include 'connect.php';

$user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING);

$sql = "DELETE FROM USERS WHERE username = \"$user\"";

if (mysqli_query($mysqli, $sql)) {
    echo "Record deleted successfully";
    header('Location: ./deco.php');
    exit;
} else {
    echo "Error deleting record: " . mysqli_error($mysqli);
}
?>
