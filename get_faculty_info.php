<?php

include 'db_connection.php';


if (isset($_POST['faculty_name']) && !empty($_POST['faculty_name'])) {

    $faculty_name = mysqli_real_escape_string($conn, $_POST['faculty_name']);


    $query = "SELECT * FROM faculty WHERE faculty_name = '$faculty_name'";
    $result = mysqli_query($conn, $query);


    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $userData = array(
            'usertype' => $row['usertype']
        );

        echo json_encode($userData);
    } else {
        echo "No matching user found";
    }
} else {
    echo "Please select a first name";
}


mysqli_close($conn);
?>