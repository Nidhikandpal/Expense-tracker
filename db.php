<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "YOUR_PASSWORD",
    "expense_tracker"
);

if(!$conn){
    die("Connection Failed");
}
else{
    echo "Database Connected";
}

?>