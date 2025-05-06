<?php

include 'db_connection.php';


if (isset($_POST['firstname']) && !empty($_POST['firstname'])) {

    $selectedFirstName = mysqli_real_escape_string($conn, $_POST['firstname']);


    $query = "SELECT lastname, usertype FROM user WHERE firstname = '$selectedFirstName'";
    $result = mysqli_query($conn, $query);


    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $userData = array(
            'lastname' => $row['lastname'],
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