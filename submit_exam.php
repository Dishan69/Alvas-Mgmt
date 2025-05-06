<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include 'db_connection.php';


    $exam_name = mysqli_real_escape_string($conn, $_POST['exam_name']);
    $exam_code = mysqli_real_escape_string($conn, $_POST['exam_code']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $exam_date = mysqli_real_escape_string($conn, $_POST['exam_date']);
    $exam_time = mysqli_real_escape_string($conn, $_POST['exam_time']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $instructor = mysqli_real_escape_string($conn, $_POST['instructor']);
    $total_marks = mysqli_real_escape_string($conn, $_POST['total_marks']);
    $passing_marks = mysqli_real_escape_string($conn, $_POST['passing_marks']);


    $sql = "INSERT INTO exam (exam_name, exam_code, description, exam_date, exam_time, location, instructor, total_marks, passing_marks) VALUES ('$exam_name', '$exam_code', '$description', '$exam_date', '$exam_time', '$location', '$instructor', $total_marks, $passing_marks)";

    if (mysqli_query($conn, $sql)) {
        echo "Exam added successfully.";
        header("Location: add_exam.php");

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


    mysqli_close($conn);
}
?>