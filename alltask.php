<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/CSS" href="style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="assets/css/jquery-ui.custom.min.css" />
		<link rel="stylesheet" href="assets/css/chosen.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-datepicker3.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-timepicker.min.css" />
		<link rel="stylesheet" href="assets/css/daterangepicker.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-colorpicker.min.css" />

    <title>All Tasks</title>
</head>
<body>
<div class="navigation">
        <ul>
           <a href="index.php"> <li> ADD Tasks </li></a>
        </ul>
    <div class="heading">
        <h2>
            All Tasks
        </h2>
    </div>
        <div class="table">
            <?php
                $servername="localhost";
                $username="root";
                $password="";
                $databasename="dbtodo";
            
                $conn =mysqli_connect($servername,$username,$password,$databasename);
                if(!$conn){
                    die("Connection failed due to ".mysqli_connect_error());
                }
                $sql = "Select * from task";
                $result=$conn->query($sql);

                $str="<table><tr><th>NO </th> <th> Task Name </th> <th> Task description</th> 
                <th> Timeline</th> <th> Urgency </th> <th> Edit </th> <th> Delete </th>";
                while($row=$result->fetch_assoc())
		{
             $str.="<tr><td>".$row["tid"]."</td><td>" .$row["tname"]."</td><td>"
              .$row["tdesc"]."</td><td>" .$row["timeline"]."</td><td>" 
              .$row["urgency"]."</td> <td><a href='updatetask.php?tid=".$row["tid"]."'>
              <i class='ace-icon fa fa-pencil bigger-120'></i></a></td>
              <td><a href='deletetask.php?tid=".$row["tid"]."'><i class='ace-icon fa fa-trash-o bigger-120'>
              </i></a></td></tr>";

			}

		$str.="</table>";

		echo $str;

            ?>
        </div>
</div>
    
</body>
</html>