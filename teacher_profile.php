<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>User Management System</title>
    <style>
        .widget {
            background-color: #f2f2f2;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            margin-left: -70px;
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
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-8">



                    <?php

                    session_start();
                    include 'db_connection.php';

                    $user = $_SESSION['username'];

                    $sql = "SELECT * FROM new_faculty where username='$user'";
                    $result = $conn->query($sql);


                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {


                            ?>
                            <div class="content">
                                <div class="widget">
                                    <h2>Teacher Details:</h2>
                                    Teaher Name : <?php echo $row['fullname']; ?><br>
                                    Email : <?php echo $row['email']; ?><br>
                                    Phone No : <?php echo $row['phone']; ?><br>
                                    <p>Give details .</p>
                                </div>

                            </div>
                        </div>

                        <?php

                        }
                    } else {
                        echo "0 results";
                    }


                    $conn->close();

                    ?>
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