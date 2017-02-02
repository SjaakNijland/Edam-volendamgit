<?php
/**
 * Created by PhpStorm.
 * User: Sjaak
 * Date: 27-1-2017
 * Time: 12:01
 */

$mysqli = new mysqli("localhost", "root", "", "phpro_auth");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

    $firstname= $_REQUEST['voornaam'];
    $secondname= $_REQUEST['achternaam'];
    $number= $_REQUEST['telefoon'];
    $email= $_REQUEST['e-mail'];
    $namebusiness= $_REQUEST['naam-organisatie'];
    $website= $_REQUEST['website'];
    $catogories= $_REQUEST['cultuur'];
    $location= $_REQUEST['locatie'];

    $sql="INSERT INTO phpro_bedrijf ";
    $sql.="(id,firstname, secondname, number, email, namebusiness, website, catogories, location)";
    $sql.=" VALUES ";
    $sql.="(NULL, '".$firstname."','".$secondname."', '".$number."', '".$email."', '".$namebusiness."', '".$website."', '".$catogories."', '".$location."');";
    if(mysqli_query($mysqli, $sql)){
        echo "<div class='container'>";
        echo "<h1>item is aangemaakt</h1>";
        echo "</div>";
    }
    else{
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
    mysqli_close($mysqli);