
<?php
require_once "db_connect.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $query = "DELETE FROM signup WHERE name = '$name' and email ='$email'"; 

    $res = mysqli_query($conn, $query);

    if ($res) {
        echo "Deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

?>
