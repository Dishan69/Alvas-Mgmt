<?php

include 'db_connection.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST["id"];
    $studentname = $_POST["studentname"];
    $coursename = $_POST["coursename"];
    $checkcoursefees = $_POST["checkcoursefees"];
    $semester = $_POST["semester"];


    $sql = "UPDATE ecam SET studentname='$studentname', coursename='$coursename', checkcoursefeses='$checkcoursefees',semester='$semester' WHERE id=$id";


    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}


$conn->close();
?>