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

            <h2>TIME TABLE FOR ALL</h2>
        </div>
        <div class="content">
            <div class="widget">
                <?php

                include 'db_connection.php';


                $sql = "SELECT * FROM class_timetable";
                $result = $conn->query($sql);


                if ($result->num_rows > 0) {

                    echo "<table border='1'>";
                    echo "<tr><th>Sl. No</th><th>Class Name</th><th>semester </th><th>section</th><th>timetable_image</th><th>Action</th></tr>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["course_name"] . "</td>";
                        echo "<td>" . $row["semester"] . "</td>";
                        echo "<td>" . $row["section"] . "</td>";
                        echo "<td>" . $row["timetable_image"] . "</td>";
                        echo "<td>";

                        echo "<a href='edit_timetable.php?id=" . $row["id"] . "'>Edit</a> ";
                        echo "<a href='delete_timetable.php?id=" . $row["id"] . "' onclick='return confirm(\"Are you sure you want to delete this ?\")'>Delete</a>";
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