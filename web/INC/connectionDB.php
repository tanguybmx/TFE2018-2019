<?php
/**
 * Created by PhpStorm.
 * User: tangu
 * Date: 25-03-19
 * Time: 10:03
 */
/*$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";*/

function produits()
{
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "mydb";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $result = $conn->query("select id, nom, description, prix, estPrixDuJour, cat, cat2, estPromo from produits") or die($mysqli->error());
    if ($result->num_rows == 0) {
        $_SESSION['message'] = "Il n'y a pas encore de cartes mises en avant";
        print $_SESSION['message'];
    } else {
        $produits = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $produits;
    }
}

function requete($req){
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "mydb";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $result = $conn->query("$req") or die($mysqli->error());
    if ($result->num_rows == 0) {
        $_SESSION['message'] = "Il n'y a pas encore de cartes mises en avant";
        print $_SESSION['message'];
    } else {
        $resultat = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $resultat;
    }
}