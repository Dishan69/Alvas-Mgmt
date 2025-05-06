<?php

include 'db_connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Curriculum</title>
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

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        .action-links a {
            margin-right: 10px;
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
            <h2>Welcome to Curriculum Dashboard</h2>
        </div>
        <div class="content">
            <div class="widget">
                <?php

                $sql = "SELECT * FROM curriculum";
                $result = $conn->query($sql);


                if ($result->num_rows > 0) {

                    echo "<table>";
                    echo "<tr><th>Curriculum ID</th><th>Curriculum Name</th><th>Description</th><th>Implementation Timeline</th><th>Budget Allocation</th></tr>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["curriculum_id"] . "</td>";
                        echo "<td>" . $row["curriculum_name"] . "</td>";
                        echo "<td>" . $row["description"] . "</td>";
                        echo "<td>" . $row["implementation_timeline"] . "</td>";
                        echo "<td>$" . number_format($row["budget_allocation"], 2) . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "No curriculum found";
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