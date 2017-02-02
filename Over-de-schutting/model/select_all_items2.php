<?php
/**
 * Created by PhpStorm.
 * User: Sjaak
 * Date: 30-1-2017
 * Time: 11:25
 */

$sql = "SELECT * from phpro_bedrijf";
$result = $mysqli->query($sql);
$result = convertResultToArray($result);