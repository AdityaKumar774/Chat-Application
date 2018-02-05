<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';

$db_name = 'chat';

if($connection = mysqli_connect($db_host, $db_user, $db_pass)){
    echo 'Connected to Database Server... <br />';
    if ($database = mysqli_select_db($connection, $db_name)){
        echo 'Database has been selected... <br />';
    }else {
        echo 'Database was not found... <br />';
    }
}else {
    echo 'Unable to connect to MYSQL Server <br />';
}
?>