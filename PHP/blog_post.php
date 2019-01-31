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
if(isset($_POST['blog_username']))
    $blog_username=$_POST['blog_username'];
if(isset($_POST['datetime']))
    $datetime=$_POST['datetime'];
if(isset($_POST['blog_title']))
    $blog_title=$_POST['blog_title'];
if(isset($_POST['blog_comment']))
    $blog_comment=$_POST['blog_comment'];

$sql = "INSERT INTO blog (blog_username, datetime, blog_title, blog_comment)
VALUES ('$blog_username', '$datetime', '$blog_title', '$blog_comment')";

if ($conn->query($sql) === TRUE) {
    echo "Thanks for posting";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();

?>
