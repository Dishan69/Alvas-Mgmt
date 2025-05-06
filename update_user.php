<?php

include 'db_connection.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST["id"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $phoneno = $_POST["phoneno"];
    $email = $_POST["email"];
    $usertype = $_POST["usertype"];



    $sql = "UPDATE user SET username='$username', password='$password', firstname='$firstname', lastname='$lastname', phoneno='$phoneno', email='$email', usertype='$usertype' WHERE id=$id";


    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        header("Location: view_user.php");

    } else {
        echo "Error updating record: " . $conn->error;
    }
}


$conn->close();
?>