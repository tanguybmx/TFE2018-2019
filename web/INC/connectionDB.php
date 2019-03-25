<?php
/**
 * Created by PhpStorm.
 * User: tangu
 * Date: 25-03-19
 * Time: 10:03
 */
$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";