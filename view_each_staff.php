<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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

    include 'db_connection.php';

    if (isset($_GET['id'])) {

        $id = $_GET['id'];
        echo $id;

        $sql = "SELECT * FROM faculty WHERE id = $id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            $row = $result->fetch_assoc();
            $faculty_name = $row['faculty_name'];
            $phone = $row['phone'];
            $email = $row['email'];
            $usertype = $row['usertype'];
            echo $email;
            ?>

            <div class="dashboard">
                <div class="widget">

                    <h2>Welcome to dashboard</h2>
                </div>
                <div class="content">
                    <div class="widget">
                        <?php
                        echo "Faculty  Name: " . $faculty_name . '<br>';
                        echo "Phone No :" . $phone . '<br>';
                        echo "Email : " . $email . '<br>';
                        echo "User Type :" . $usertype . '<br>';
                        ?>
                    </div>
                </div>
            </div>
        </body>
        <?php
        } else {
            echo "User not found.";

        }
    } else {
        echo "User ID not provided.";
    }

    $conn->close();
    ?>

<?php

include 'footer.php';
?>

</html>