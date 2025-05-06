<?php
include 'db_connection.php';
echo "kkk";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['course_name']) && isset($_POST['semester']) && isset($_POST['section']) && isset($_FILES['timetable_image'])) {

        $course_name = $_POST['course_name'];
        $semester = $_POST['semester'];
        $section = $_POST['section'];



        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["timetable_image"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


        if ($imageFileType != "jpg" && $imageFileType != "png") {
            echo "Sorry, only JPG, PNG files are allowed.";
        } else {

            if (move_uploaded_file($_FILES["timetable_image"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["timetable_image"]["name"])) . " has been uploaded.";


                $sql = "INSERT INTO class_timetable (course_name, semester, section, timetable_image) VALUES ('$course_name', '$semester', '$section', '$target_file')";


                if ($conn->query($sql) === TRUE) {
                    header("Location: add_timetable.php");

                    echo "Class timetable data inserted into database successfully.";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

                $conn->close();

            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        echo "Please fill in all required fields.";
    }
} else {
    echo "Form submission method not allowed.";
}
?>