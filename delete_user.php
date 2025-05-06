<?php

include 'db_connection.php';


if (isset($_GET['id'])) {

    $id = $_GET['id'];


    $sql = "DELETE FROM user WHERE id = $id";


    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "User ID not provided.";
}

$conn->close();
?>