<?php
//NR_ITEMS_PER_PAGE
//$page_nr
$offset = $page_nr * NR_ITEMS_PER_PAGE -4;
$sql = "SELECT * FROM newsarticles order by date_created desc LIMIT " . $offset . ", " . NR_ITEMS_PER_PAGE;
$homeResult = $mysqli->query($sql);
//echo $sql;
$homeResult = convertResultToArray($homeResult);

