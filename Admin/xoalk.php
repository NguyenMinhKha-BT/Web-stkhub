<?php
    require '../inc/myconnect.php';
    $id = $_GET['id'];

    // sql to delete a record
    $sql = "DELETE FROM linhkien WHERE ID=".$id;

    if ($conn->query($sql) === TRUE) {
        header('Location: qlylk.php');
    } else {
        echo "Error deleting record: " . $conn->error;
    }

$conn->close();
?>
