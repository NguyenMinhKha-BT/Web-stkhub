<?php 
    if(isset($_POST['Edit']))
    {
    require '../inc/myconnect.php';
    $id = $_POST['id'];
    $name = $_POST['name'];
        $sql = "UPDATE linhkien SET Ten='$name'
        WHERE id= '$id ' " ;
        if ($conn->query($sql) === TRUE) {
            header('Location: qlylk.php');
        } else {
            echo "Error updating record: " . $conn->error;
        }
        $conn->close();
    }
  
?>
