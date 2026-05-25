<?php

include 'db.php';

$result = mysqli_query($conn,
"SELECT * FROM transactions ORDER BY id DESC");

?>