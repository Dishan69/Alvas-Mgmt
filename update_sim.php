<?php

include 'db_connection.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST["id"];
    $name = $_POST["name"];
    $address = $_POST["address"];
    $currentcourse = $_POST["currentcourse"];
    $previouscourse = $_POST["previouscourse"];
    $phoneno = $_POST["phoneno"];
    $email = $_POST["email"];
    $document = $_POST["document"];



    $sql = "UPDATE sim SET name='$name', address='$address', currentcourse='$currentcourse', previouscourse='$previouscourse', phoneno='$phoneno', email='$email', document='$document' WHERE id=$id";


    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}


$conn->close();
?>