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

            <h2>Welcome to dashboard</h2>
        </div>
        <div class="content">
            <div class="widget">

            </div>
        </div>
    </div>
</body>

<?php

include 'footer.php';
?>

</html>