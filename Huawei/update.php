<?php
require_once "db_connect.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $city = $_POST['city'];
    $postalcode = $_POST['postalcode'];

    $query = "UPDATE location SET city = '$city' WHERE postalcode = '$postalcode'"; // Use single quotes around the variables in the query

    $res = mysqli_query($conn, $query);

    if ($res) {
        echo "Updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>
