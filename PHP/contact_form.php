<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mis_thursday";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
if(isset($_POST['first_name']))
    $first_name=$_POST['first_name'];
if(isset($_POST['middle_name']))
    $middle_name=$_POST['middle_name'];
if(isset($_POST['last_name']))
    $last_name=$_POST['last_name'];
if(isset($_POST['suffix']))
    $suffix=$_POST['suffix'];
if(isset($_POST['address1']))
    $address1=$_POST['address1'];
if(isset($_POST['address2']))
    $address2=$_POST['address2'];
if(isset($_POST['city']))
    $city=$_POST['city'];
if(isset($_POST['state']))
    $state=$_POST['state'];
if(isset($_POST['zip']))
    $zip=$_POST['zip'];
if(isset($_POST['country']))
    $country=$_POST['country'];
if(isset($_POST['phone_number']))
    $phone_number=$_POST['phone_number'];
if(isset($_POST['email']))
    $email=$_POST['email'];
if(isset($_POST['contactPreference']))
    $contactPreference=$_POST['contactPreference'];
if(isset($_POST['message']))
    $message=$_POST['message'];


$sql = "INSERT INTO contact_form (first_name, middle_name, last_name, suffix, address1, address2, city, state, zip, country, phone_number, email, contactPreference, message)
VALUES
('$first_name', '$middle_name', '$last_name', '$suffix', '$address1', '$address2', '$city', '$state', '$zip', '$country', '$phone_number', '$email',  '$contactPreference', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Thanks for contacting us";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();

?>
