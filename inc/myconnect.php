<?php
// Create connection
$conn = mysqli_connect("localhost", "id20609927_ban_user", "qd%Sq53mk1^nXVg1","id20609927_ban_sp");

// Check connection
if ($conn->connect_error) {
  echo "Connection failed: " . mysqli_connect_error
();
  }
  $conn->set_charset("utf8")
?>