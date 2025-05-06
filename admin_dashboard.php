<?php

include 'db_connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-image: url('image/c2.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
        }

        .widget {
            padding: 20px;
            margin-bottom: 20px;
            margin-left: 180px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .widget h2 {
            margin-top: 0;
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

            <h2>Welcome to dashboard</h2>
        </div>
        <div class="content">
            <div class="widget">
                <p>Admin details .</p>
            </div>
            <div class="widget">
                <h2>Announcements</h2>
                <p>No announcements.</p>
            </div>
            <div class="widget">
                <h2>Important Dates</h2>
                <p>Next Exam: <?php $current_date = date("Y-m-d");
                echo $current_date; ?></p>
                <p>Registration Deadline: April 30th, 2025</p>
            </div>
        </div>
    </div>
</body>

<?php

include 'footer.php';
?>

</html>