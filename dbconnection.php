<?php
/* Connect to the database
*check connection
*select a database to work with */
$mysqli = new mysqli('localhost', 'root', '', 'schedule');

if(mysqli_connect_errno()) {
    printf("Connection failed: %s\n", mysqli_connect_errno());
    exit();
}

$mysqli -> select_db("schedule");

?>