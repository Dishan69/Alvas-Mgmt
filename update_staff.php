<?php

include 'db_connection.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST["id"];
    $faculty_name = $_POST["faculty_name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $usertype = $_POST["usertype"];



    $sql = "UPDATE faculty SET faculty_name='$faculty_name', phone='$phone', email='$email', usertype='$usertype' WHERE id=$id";


    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        header("Location: view_staff.php");

    } else {
        echo "Error updating record: " . $conn->error;
    }
}


$conn->close();
?>