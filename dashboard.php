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
        .widget {
            background-color: rgb(193, 31, 31);
            padding: 20px;
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

        <h2>Welcome to dashboard</h2>
        <div class="content">
            <div class="widget">
                <h2>Student Academic</h2>
                <p>Give details .</p>
            </div>
            <div class="widget">
                <h2>Announcements</h2>
                <p>No announcements.</p>
            </div>
            <div class="widget">
                <h2>Important Dates</h2>
                <p>Next Exam: May 5th, 2025</p>
                <p>Registration Deadline: April 30th, 2025</p>
            </div>
        </div>
    </div>
</body>

<?php

include 'footer.php';
?>

</html>