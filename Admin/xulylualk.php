<?php
if(isset($_POST['create']))
{
    require '../inc/myconnect.php';
    $name = $_POST['name'];
    $sql="INSERT INTO  linhkien (Ten) 
    VALUES ('$name')";
    // echo  $mk;
    if (mysqli_query($conn, $sql)) {
        header('Location: qlylk.php');
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

 ?>