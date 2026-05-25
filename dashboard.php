<?php
session_start();

include 'db.php';

$user_id = $_SESSION['user_id'];

$result = mysqli_query($conn,

"SELECT * FROM transactions
WHERE user_id='$user_id'
ORDER BY id DESC");

$result = mysqli_query($conn,
"SELECT * FROM transactions ORDER BY id DESC");

?>