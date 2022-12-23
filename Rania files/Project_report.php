<?php


//connecting database
$Servername="localhost";
$username="root";
$password="";
$dbname="lucid_healthcare";

//conection
$conn=new mysqli($Servername,$username,$password,$dbname);

// checking
if($conn!=true){
    die("Connection has been failed:");
}
else{
 
}


$db=$conn;
$t_name="report";
$col=['rep_id','patient_id','patient_name','age','symptoms'];
$fetchData= fetch_data($db,$t_name, $col);
function fetch_data($db,$t_name,$col){
if(empty($db)){
    $msg= "Database connection error";
}
elseif (empty($col) || !is_array($col)) {
    $msg="columns Name must be defined in an indexed array";
}
elseif(empty($t_name)){
    $msg= "Table Name is empty";
}else
{
    $patient_id= $_POST['patient_id'];
    $patient_name = $_POST['patient_name'];
    $query = "SELECT rep_id,patient_id,patient_name,age,symptoms FROM report WHERE patient_name = '$patient_name' and patient_id='$patient_id';";
    $result = $db->query($query);

    if($result== true){
        if ($result->num_rows > 0) {
            $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
            $msg= $row;
        } else {
            $msg= "No Data Found";
        }
    }else{
        $msg= mysqli_error($db);
    }
}
return $msg;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="php_style.css">
</head>
<body>

<div class="docContain about">
    <div class="infoContain">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">

                    <?php echo isset($deleteMsg) ? $deleteMsg : ''; ?>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            
                        
                            <thead><tr><th>Report_id </th>
                                <th>Patient Id</th>
                                <th>Patient Name</th>
                                <th>Age </th>
                                <th>Symptoms</th>
                                
                            </thead>
                            <tbody>
                            
                            <?php
                          
                            if(is_array($fetchData)){
                            
                                foreach($fetchData as $data){
                                    ?>
                                    <tr>
                                        <td><?php echo $data['rep_id']; ?></td>
                                        <td><?php echo $data['patient_id']; ?></td>
                                        <td><?php echo $data['patient_name']; ?></td>
                                        <td><?php echo $data['age']; ?></td>
                                        <td><?php echo $data['symptoms']; ?></td>
                                    </tr>
                                    <?php
                                    }}else{ ?>
                            <tr>
                                <td colspan="8">
                                    <?php echo $fetchData; ?>
                                </td>
                            <tr>
                                <?php
                                }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>