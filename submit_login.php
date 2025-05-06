<?php

session_start();
include 'db_connection.php';
echo "Type should be in small letters (i.e. student)";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Type should be in small letters (i.e. student)";
    $usertype = $_POST['usertype'];

    echo $usertype;
    if ($usertype === 'admin') {
        if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['usertype'])) {

            $username = $_POST['username'];
            $password = $_POST['password'];
            $usertype = $_POST['usertype'];

            echo $username;
            echo $password;






            $sql = "SELECT * FROM admin WHERE admin_name = '$username' AND password = '$password'AND  usertype = '$usertype'";
            $result = $conn->query($sql);
            print_r($result);


            if ($result->num_rows != 0) {
                echo "inside";

                $_SESSION['username'] = $username;
                $_SESSION['usertype'] = $usertype;


                header("Location: admin_dashboard.php");
                exit();
            } else {
                header("Location: index.php");
            }

        }

    }

    if ($usertype === 'student') {


        if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['usertype'])) {

            $username = $_POST['username'];
            $password = $_POST['password'];
            $usertype = $_POST['usertype'];

            echo $username;
            echo $password;






            $sql = "SELECT * FROM students WHERE username = '$username' AND password = '$password'AND  usertype = '$usertype'";
            $result = $conn->query($sql);
            print_r($result);


            if ($result->num_rows != 0) {
                echo "inside";

                $_SESSION['username'] = $username;
                $_SESSION['usertype'] = $usertype;


                header("Location: student_dashboard.php");
                exit();
            } else {
                header("Location: index.php");
            }

        }
    }


    if ($usertype === 'faculty') {


        if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['usertype'])) {

            $username = $_POST['username'];
            $password = $_POST['password'];
            $usertype = $_POST['usertype'];

            echo $username;
            echo $password;






            $sql = "SELECT * FROM new_faculty WHERE username = '$username' AND password = '$password'AND  usertype = '$usertype'";
            $result = $conn->query($sql);
            print_r($result);


            if ($result->num_rows != 0) {
                echo "inside";

                $_SESSION['username'] = $username;
                $_SESSION['usertype'] = $usertype;


                header("Location: teacher_dashboard.php");
                exit();
            } else {
                header("Location: index.php");
            }

        }
    }


}
?>