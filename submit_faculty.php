<?php

include 'db_connection.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $faculty_name = $_POST["faculty_name"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $usertype = $_POST["usertype"];



    $sql = "INSERT INTO faculty(faculty_name,password, email, phone,usertype) VALUES ('$faculty_name', '$password','$email', '$phone','$usertype')";



    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: add_faculty.php");
        exit;

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $sql = "SELECT*FROM projectdemo";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {

        echo "<h1>FACULTY MANAGEMENT SYSTEM</h1>";
        echo "<table border='1'>";
        echo "<tr><th>Username</th><th>email</th><th>phone</th>th>USERTYPE</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["phone"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }


    $conn->close();
}
?>