<?php

include 'db_connection.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST["id"];
    $faculty_name = $_POST["faculty_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];


    $sql = "UPDATE faculty SET faculty_name='$faculty_name', email='$email', phone='$phone',usertype='$usertype' WHERE id=$id";


    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        header("Location: faculty_report.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}


$conn->close();
?>