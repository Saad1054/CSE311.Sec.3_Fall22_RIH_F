<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$docName = $_POST['docName'];
$patName = $_POST['patName'];
$date    = $_POST['date'];

$postReg = "New record created successfully";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO `appointment` (DoctorName, PatientName, Date) VALUES ( '$docName', '$patName', '$date')";


if ($conn->query($sql) === TRUE) {
    $postReg = "New record created successfully";
//    header('Location: http://' . $_SERVER[HTTP_HOST] . '/hospital/html/postAp.php', true, 303);
//    exit;
} else {
    $postReg= "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>appointment</title>
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/style3.css">

</head>
<body>
<div class="home">
    <p class="logM">
        Appointment  for <?= $date ?> has been set successfully. &nbsp;
        <a href="html/home.html">Main Menu</a> &nbsp;

        <a href="index.php">Home</a>

    </p>
</div>
home

</body>
</html>
