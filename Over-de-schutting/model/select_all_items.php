<?php

$sql = "SELECT * from phpro_users";
$result = $mysqli->query($sql);
$result = convertResultToArray($result);