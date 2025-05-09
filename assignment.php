<?php

include 'db_connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Assignments</title>
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

        .data-div {
            margin-bottom: 10px;
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
        <div class="content">
            <div class="widget">
                <?php

                include 'db_connection.php';


                $query = "SELECT * FROM assignment";
                $result = mysqli_query($conn, $query);


                if ($result) {
                    echo "<table border='1' id='data-table'>";
                    echo "<tr>
            <th>ID</th>
            <th>Course Name</th>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
          </tr>";

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['assignment_id'] . "</td>";
                        echo "<td>" . $row['course_name'] . "</td>";
                        echo "<td>" . $row['title'] . "</td>";
                        echo "<td>" . $row['description'] . "</td>";
                        echo "<td><button onclick='showRowData(" . json_encode($row) . ")'>Show Data</button></td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "Error: " . mysqli_error($connection);
                }


                mysqli_close($conn);
                ?>

                <div id="form-container"></div>

                <script>
                    function showRowData(rowData) {
                        var formContainer = document.getElementById('form-container');
                        formContainer.innerHTML = "";

                        var form = document.createElement('form');
                        form.setAttribute('id', 'data-form');


                        for (var key in rowData) {
                            if (rowData.hasOwnProperty(key)) {
                                var div = document.createElement('div');
                                var label = document.createElement('label');
                                label.textContent = key + ": ";
                                var input = document.createElement('input');
                                input.setAttribute('type', 'text');
                                input.setAttribute('name', key);
                                input.setAttribute('value', rowData[key]);
                                div.appendChild(label);
                                div.appendChild(input);
                                form.appendChild(div);
                            }
                        }

                        var submitButton = document.createElement('input');
                        submitButton.setAttribute('type', 'submit');
                        submitButton.setAttribute('value', 'Submit');
                        form.appendChild(submitButton);

                        formContainer.appendChild(form);
                    }
                </script>
            </div>
        </div>
    </div>
</body>
<?php

include 'footer.php';
?>

</html>