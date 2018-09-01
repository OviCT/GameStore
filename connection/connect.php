<?php

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'db-gamestore';

    $conn = mysqli_connect($servername, $username, $password, $database);

    if ($conn->error) {
        echo "Error: " . $conn->error;
    }
