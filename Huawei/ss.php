<?php
require_once "db_connect.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $query = "insert into signup(name,email,password,confirm_password) values('$name','$email','$password','$confirm_password');";
    $res = mysqli_query($conn,$query);

    if($res) {
        echo "record inserted successfully";    
    }

}

?> 