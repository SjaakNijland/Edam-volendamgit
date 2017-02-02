<?php

$sql = "SELECT * FROM phpro_users WHERE phpro_user_id= " . $id;

$result = $mysqli->query($sql);
$result = convertResultToArray($result);