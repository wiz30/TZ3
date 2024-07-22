<?php
echo('Hi. ');
$conn = new mysqli("172.18.0.2", 'root', '123123');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "mysql connected successfully";
?>
