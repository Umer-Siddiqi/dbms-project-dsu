<?php
require_once "db_connect.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $rating = $_POST['rating'];
    $feedback = $_POST['feedback'];

    $query = "INSERT INTO feedbackform ( feedback, rating) VALUES ( '$feedback', '$rating')";
    
    $res = mysqli_query($conn, $query);

    if ($res) {
        echo "feedback sent successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
