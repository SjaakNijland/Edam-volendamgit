<?php

$mysqli = new mysqli("localhost", "root", "", "phpro_auth");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

    $id=$_REQUEST['id'];
    $phpro_username=$_REQUEST['phpro_username'];
    $phpro_password=$_REQUEST['phpro_password'];
    
    $link_address = '../index.php?action=admin';
    
    $sql = "UPDATE phpro_users SET phpro_username='$phpro_username', phpro_password='$phpro_password' WHERE phpro_user_id='$id'";



    if (mysqli_query($mysqli, $sql)) {
        echo "<div class='container'>";
        echo "<h1> item is veranderd </h1>";

        echo "<a href='".$link_address."'>Keer terug</a>";
        echo "</div>";

    } else {
        echo "<div class='container'>";
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
        echo "</div>";
    }
    mysqli_close($mysqli);

?>