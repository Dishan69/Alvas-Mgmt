<?php

include 'db_connection.php';


if (isset($_POST['firstname']) && !empty($_POST['firstname'])) {

    $selectedFirstName = mysqli_real_escape_string($conn, $_POST['firstname']);


    $query = "SELECT lastname FROM user WHERE firstname = '$selectedFirstName'";
    $result = mysqli_query($conn, $query);


    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $lastname = $row['lastname'];
        echo $lastname;
    } else {
        echo "No matching last name found";
    }
} else {
    echo "Please select a first name";
}


mysqli_close($conn);
?>