<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("cannot connect to the server" . mysqli_connect_error());
} else {
    $db = mysqli_select_db($conn, 'asm');
    if (!$db) {
        die("cannot connect to database" . mysqli_connect_error());
    }
}

