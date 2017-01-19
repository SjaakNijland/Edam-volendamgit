<?php

$sql = "SELECT * from newsarticles";
$result = $mysqli->query($sql);
$result = convertResultToArray($result);