
<?php
require_once "db_connect.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Yourname = $_POST['Yourname'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $message = $_POST['message'];

    $query = "insert into contactus(Yourname,Email,Phone,message) values('$Yourname','$Email','$Phone','$message');";
    $res = mysqli_query($conn,$query);

    if($res) {
        echo "message sent successfully";    
    }

}

?>