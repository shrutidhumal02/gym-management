<?php
//echo 'welcome ';
$servername = "localhost";
$username = "root";

// Create connection
$conn = mysqli_connect($servername, $username);

/*if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    echo 'Connected failed';
}else{
    echo 'Connected successfully';
}*/

mysqli_select_db($conn, "websitedata");

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO `userinformationdata` (`name`,`email`, `message`) VALUES ('$name', '$email', '$message')";
mysqli_query($conn, $query);

echo 'Contact Details Submitted Successfully!';
?>