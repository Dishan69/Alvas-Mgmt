<?php

include 'db_connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View User</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .widget {
            background-color: #f2f2f2;
            padding: 20px;
            margin-left: 100px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .widget h2 {
            margin-top: 0;
        }

        body {
            background-image: url('image/c2.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
        }
    </style>
</head>

<body>
    <?php

    include 'sidebar.php';
    include 'header.php';
    ?>
    <div class="dashboard">
        <div class="widget">

            <h2>Welcome to Student Mangement</br>
                Update</h2>
        </div>
        <div class="content">
            <div class="widget">
                <?php

                include 'db_connection.php';


                $sql = "SELECT * FROM user";
                $result = $conn->query($sql);


                if ($result->num_rows > 0) {

                    echo "<table border='1'>";
                    echo "<tr><th>ID</th><th>Username</th><th>password</th><th>firstname</th><th>lastname</th><th>phoneno</th><th>Email</th><th>Actions</th></tr>";
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
</body>

<?php

include 'footer.php';
?>

</html>