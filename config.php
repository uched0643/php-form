<?php

const DB_SERVER = 'localhost';
const BD_USER = 'root';
const DB_PASSWORD = 'OZAGI1234lespro!@#$?>';
const DB_NAME = 'Auth';

$link = mysqli_connect(DB_SERVER, BD_USER, DB_PASSWORD, DB_NAME);

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>



