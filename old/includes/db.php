<?php
$connection = mysqli_connect('localhost', 'root', 'qwerty', 'test_db');

if ($connection == false) {
    echo 'we cannot connect to database';
    echo mysqli_connect_error();
    exit();
}

