
<?php
require_once "db_connect.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $country = $_POST['country'];
    $city = $_POST['city'];
    $postalcode = $_POST['postalcode'];
    $address = $_POST['address'];

    $query = "insert into location(country,city,postalcode,address) values('$country','$city','$postalcode','$address');";
    $alterQuery = "ALTER TABLE location ADD id INT AUTO_INCREMENT PRIMARY KEY";

    $res = mysqli_query($conn,$query);
    

    if($res) {
        echo "address details sent successfully";    
    }

}
?>