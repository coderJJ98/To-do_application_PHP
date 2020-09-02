<?php
if(isset($_POST['tname']))
{
    $servername="localhost";
    $username="root";
    $password="";
    $databasename="dbtodo";

    $conn =mysqli_connect($servername,$username,$password,$databasename);
    if(!$conn){
        die("Connection failed due to ".mysqli_connect_error());
    }
    else{
        //echo "Database is succesfully connected.";
    }

$tname=$_POST['tname'];
$tdesc=$_POST['tdesc'];
$timeline=$_POST['timeline'];
$urgency=$_POST['urgency'];

$sql= "INSERT INTO `task` ( `tname`, `tdesc`, `timeline`, `urgency`) 
VALUES ('$tname', '$tdesc', '$timeline', '$urgency');";

if($conn->query($sql)== true){
    echo "Data Successfully inserted !";
    
}
else{
    echo "Error: $sql <br> $conn->error";
}
// close the database connection. It is very important to close the connection.
$conn->close();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/CSS" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    
		
    <title>To-do List</title>
</head>
<body>
    <div class="navigation">
        <ul>
           <a href="alltask.php"> <li> All Tasks </li></a>
        </ul>

    </div>
    <div class="heading">
        <h2> To-Do List </h2>
    </div>
    <form action="index.php" method="post">
            <input type="text" name="tname" id="tname" placeholder="Enter Task name">
            <textarea name="tdesc" id="tdesc" placeholder="Enter task description"
             cols="12" rows="5">

            </textarea>

            <input type="text" name="timeline" id="timeline" placeholder="Timeline">
            <input type="text" name="urgency" id="urgency" placeholder="Enter Urgency level">
            
            
            
            <button class="btn">Submit</button>
       
    

    </div>



</body>
</html>