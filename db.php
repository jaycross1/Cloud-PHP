<?php
$servername = "constructionusr-1.cluster-cgffl59jmcmw.us-east-1.rds.amazonaws.com";
$username = "constructiondb";
$password = "password";
$dbname = "constructiondb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$title = $_POST['title'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$mobile_number = $_POST['mobile_number'];
$street_name_number = $_POST['street_name_number'];
$city = $_POST['city'];
$post_code = $_POST['post_code'];


$sql = "INSERT INTO employee (title,firstname, lastname, email,mobile_number,street_name_number,city,post_code)
VALUES ('$title','$firstname', '$lastname', '$email','$mobile_number','$street_name_number','$city','$post_code')";

if (mysqli_query($conn, $sql)) {
    header("Location:list_employee.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>