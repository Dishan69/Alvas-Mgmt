<?php

include 'db_connection.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $admin_name = $_POST["admin_name"];
    $password = $_POST["password"];

    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $usertype = $_POST["usertype"];


    $sql = "INSERT INTO admin(admin_name, password, email, phone,usertype) VALUES ('$admin_name','$password', '$email', '$phone','$usertype')";



    if ($conn->query($sql) === TRUE) {

        header("Location: home.php");
        exit;

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $sql = "SELECT*FROM admin";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {

        echo "<h1>ADMIN DETAILS </h1>";
        echo "<table border='1'>";
        echo "<tr><th>NAME</th><th>EMAIL</th><th>PHONE</th><th>USERTYPE</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["admin_name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["phone"] . "</td><td>" . $row["usertype"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }


    $conn->close();
}
?>