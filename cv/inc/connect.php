<?php
    $connect = mysqli_connect('localhost', 'root', '', 'course work');

    if (!$connect) {
        die('Error connect to DataBase');
    }
?>