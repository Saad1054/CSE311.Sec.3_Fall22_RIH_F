<?php
 @include 'config.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOCTOR</title>
    <link rel="stylesheet" href="CSS/table.css">
</head>
<body>
    <div class='filter'>

    </div>
    <table border='2'>
<tr>
    <th> DOCTOR_NAME </th>
    <th> DEGREE</th>
    <th> SPECIALITY</th>
    <th> VISITING_HOUR </th>
</tr>
    <?php
$sql = "SELECT * From doctor; ";

$result = mysqli_query ($conn, $sql);

while($res=mysqli_fetch_array($result))
{
   echo '<tr>';
   echo '<td>' .$res['doctor_name']. '</td>';
   echo '<td>' .$res['degree']. '</td>';
   echo '<td>' .$res['speciality']. '</td>';
   echo '<td>' .$res['visiting_hour']. '</td>';
   echo '</tr>';
}
?>
</table>
</body>
</html>

 