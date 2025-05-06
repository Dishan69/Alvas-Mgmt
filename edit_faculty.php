<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
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

</head>
<?php

include 'sidebar.php';
include 'header.php';
?>

<body>
    <h2>Edit User Information</h2>
    <div class="dashboard">
        <div class="content">
            <div class="widget">


                <?php

                include 'db_connection.php';

                if (isset($_GET['id'])) {

                    $id = $_GET['id'];

                    $sql = "SELECT * FROM faculty WHERE id = $id";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {

                        $row = $result->fetch_assoc();
                        $faculty_name = $row['faculty_name'];
                        $phone = $row['phone'];
                        $email = $row['email'];
                        $usertype = $row['usertype'];
                        ?>
                        <form action="update_staff.php" method="post">
                            <div class="form-group">
                                <div class="row">
                                    <div class="widget">

                                        <h2 style="  text-align: center; ">Welcome to Faculty Edit/delete</h2>
                                    </div>

                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                                        <label for="username">Faculty Name:</label><br>
                                        <input type="text" id="faculty_name" class="form-control" name="faculty_name"
                                            value="<?php echo $faculty_name; ?>" required><br><br>

                                        <label for="password">phone:</label><br>
                                        <input type="text" id="phone" class="form-control" name="phone"
                                            value="<?php echo $phone; ?>" required><br><br>

                                        <label for="firstname">Email:</label><br>
                                        <input type="text" id="email" class="form-control" name="email"
                                            value="<?php echo $email; ?>" required><br><br>

                                        <label for="lastname">User Type:</label><br>
                                        <input type="text" id="usertype" class="form-control" name="usertype"
                                            value="<?php echo $usertype; ?>" required><br><br>

                                        <input type="submit" value="Update">
                                    </div>
                                </div>

                                <?php
                    } else {
                        echo "User not found.";

                    }
                } else {
                    echo "User ID not provided.";
                }

                $conn->close();
                ?>
                    </div>
                    <div class="col-md-3"></div>

            </div>
        </div>
    </div>
    </div>
</body>
<?php

include 'footer.php';
?>

</html>