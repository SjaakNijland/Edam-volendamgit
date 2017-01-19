<?php

$mysqli = new mysqli("localhost", "root", "", "schoolcheck", 3306);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

    
    $id=$_REQUEST['id'];
    $name=$_REQUEST['name'];
    $street=$_REQUEST['street'];
    $streetNumber=$_REQUEST['streetNumber'];
    $zipCode=$_REQUEST['zipCode'];
    $telNr=$_REQUEST['telNr'];
    $email=$_REQUEST['email'];
    $website=$_REQUEST['website'];
    $districts_id=$_REQUEST['districts_id'];
    $openday=$_REQUEST['openday'];
    $openclass=$_REQUEST['openclass'];
    
    $link_address = '../index.php?action=admin';
    
    $sql = "UPDATE schools SET name='$name', street='$street', streetNumber='$streetNumber', zipCode='$zipCode', telNr='$telNr', email='$email', website='$website', districts_id='$districts_id', openday='$openday', openclass='$openclass' WHERE id='$id'";



    if (mysqli_query($mysqli, $sql)) {
        echo "<h1 id='gelukt'> item is veranderd </h1>";

        echo "<a href='".$link_address."'>Keer terug</a>";

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
    mysqli_close($mysqli);
    
?>