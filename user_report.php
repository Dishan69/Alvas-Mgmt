<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>User Management System</title>
</head>

<body>

    <?php

    include 'sidebar.php';
    include 'header.php';
    ?>
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-8">



                    <h2>User Management System</h2>
                    <a href="add_user.html">Add New User</a>
                    <br><br>
                    <?php

                    include 'db_connection.php';


                    $sql = "SELECT * FROM user";
                    $result = $conn->query($sql);


                    if ($result->num_rows > 0) {

                        echo "<table border='1'>";
                        "<tr><th>ID</th><th>Username</th><th>password</th><th>firstname</th><th>lastname</th><th>phoneno</th><th>Email</th><th>Actions</th></tr>";
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["id"] . "</td>";
                            echo "<td>" . $row["username"] . "</td>";
                            echo "<td>" . $row["password"] . "</td>";
                            echo "<td>" . $row["firstname"] . "</td>";
                            echo "<td>" . $row["lastname"] . "</td>";
                            echo "<td>" . $row["phoneno"] . "</td>";
                            echo "<td>" . $row["email"] . "</td>";
                            echo "<td>" . $row["usertype"] . "</td>";
                            echo "<td>";
                            echo "<a href='edit_user.php?id=" . $row["id"] . "'>Edit</a> ";
                            echo "<a href='delete_user.php?id=" . $row["id"] . "' onclick='return confirm(\"Are you sure you want to delete this user?\")'>Delete</a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "0 results";
                    }


                    $conn->close();
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>


<?php

include 'footer.php';
?>

</html>