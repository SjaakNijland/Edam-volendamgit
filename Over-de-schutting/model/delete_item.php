<?php

$sql = "DELETE from phpro_users WHERE phpro_user_id=$id";

$link = '';
echo "item deleted";
echo "<a href='index.php?action=admin'>index page</a>";

$mysqli->query($sql);