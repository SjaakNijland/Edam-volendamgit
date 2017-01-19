<!DOCTYPE html>
<html>
<head>
<body>

<?php
$q = $_GET['q'];
$con = mysqli_connect('localhost','root','','myband');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"myband");

$sql="SELECT title, content FROM newsarticles WHERE title LIKE '%$q%'"; //wildcard

$result = mysqli_query($con,$sql);
echo "<table>
<tr>
<th>Title</th>
<th>Content</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" .$row['title']. "</td>";
    echo "<td>" .$row['content']. "</td>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>