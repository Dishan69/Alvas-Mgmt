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

            <h2>Welcome to USER DASHBOARD</h2>
        </div>
        <div class="content">
            <div class="widget">
                <?php

                include 'db_connection.php';


                $sql = "SELECT * FROM students";
                $result = $conn->query($sql);


                if ($result->num_rows > 0) {

                    echo "<table border='1'>";
                    echo "<tr><th>Sl. No</th><th>StudentId</th><th>First NAme</th><th>LastNmae</th><th>DatePf birth</th><th>contact Number</th><th>Address</th><th>Action</th></tr>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["student_id"] . "</td>";
                        echo "<td>" . $row["first_name"] . "</td>";
                        echo "<td>" . $row["last_name"] . "</td>";
                        echo "<td>" . $row["date_of_birth"] . "</td>";
                        echo "<td>" . $row["contact_number"] . "</td>";
                        echo "<td>" . $row["address"] . "</td>";
                        echo "<td><a href='view_students_each_detail.php?id=" . $row["id"] . "'>Details</a></td> ";

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