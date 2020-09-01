<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/CSS" href="style.css">
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
                <th> Timeline</th> <th>Urgency</th>";
                while($row=$result->fetch_assoc())
		{
             $str.="<tr><td>".$row["tid"]."</td><td>" .$row["tname"]."</td><td>"
              .$row["tdesc"]."</td><td>" .$row["timeline"]."</td><td>" 
              .$row["urgency"]."</td></tr>";

			}

		$str.="</table>";

		echo $str;

            ?>
        </div>
</div>
    
</body>
</html>