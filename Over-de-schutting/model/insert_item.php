<?php

$mysqli = new mysqli("localhost", "root", "", "schoolcheck", 3306);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
   
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
    
    
    $sql="INSERT INTO schools "; // LET OP DE SPATIE!
    $sql.="(id, name, street, streetNumber, zipCode, telNr, email, website, districts_id, openday, openclass)";
    $sql.=" VALUES ";
    $sql.="(NULL, '".$name."','".$street."', '".$streetNumber."', '".$zipCode."', '".$telNr."', '".$email."', '".$website."', '".$districts_id."', '".$openday."', '".$openclass."');";

    if (mysqli_query($mysqli, $sql)) {
        echo "<h1 id='gelukt'> item is aangemaakt </h1>";

        echo "<a href='".$link_address."'>Keer terug</a>";

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
    mysqli_close($mysqli);
    
?>