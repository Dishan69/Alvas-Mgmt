<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extra Curricular Activity Management</title>
</head>

<body>
    <h2>Edit Extra Curricular Activity Management</h2>
    <?php

    include 'db_connection.php';

    if (isset($_GET['id'])) {

        $id = $_GET['id'];

        $sql = "SELECT * FROM ecam WHERE id = $id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            $row = $result->fetch_assoc();
            $indooractivity = $row['indooractivity'];
            $outdooractivity = $row['outdooractivity'];
            $ex_date = $row['ex_date'];


            ?>
            <form action="update_ecam.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <label for="indooractivity">indoor Activity:</label><br>
                <input type="text" id="indooractivity" name="indooractivity" value="<?php echo $indooractivity; ?>"
                    required><br><br>

                <label for="outdooractivity">Outdoor Activity:</label><br>
                <input type="text" id="outdooractivity" name="outdooractivity" value="<?php echo $outdooractivity; ?>"
                    required><br><br>

                <label for="ex_date">Date:</label><br>
                <input type="text" id="ex_date" name="ex_date" value="<?php echo $ex_date; ?>" required><br><br>


                <input type="submit" value="Update">

                <?php
        } else {
            echo "User not found.";

        }
    } else {
        echo "User ID not provided.";
    }

    $conn->close();
    ?>

</body>

</html>