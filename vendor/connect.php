<?php

    $connect = mysqli_connect('localhost', 'root', '', 'regist');

    if (!$connect) {
        die('Error connect to DataBase');
    }