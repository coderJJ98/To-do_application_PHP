<?php
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
     $tid=$_GET['tid'];
     if(isset($_POST['submit'])){
        $tname=$_POST['tname'];
        $tdesc=$_POST['tdesc'];
        $timeline=$_POST['timeline'];
        $urgency=$_POST['urgency'];
        
        $sql="UPDATE task SET  tname= '$tname',tdesc= '$tdesc',
        timeline= '$timeline',urgency= '$urgency' WHERE tid= '$tid'";
		
        $result=$conn->query($sql);

        $sql="Select * from task where tid = $tid";

        $result=$conn->query($sql);
        $row=$result->fetch_assoc();
    
       
        $tname=$row['tname'];
		$tdesc=$row['tdesc'];
        $timeline=$row['timeline'];
        $urgency=$row['urgency'];

    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/CSS" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    
		
    <title>Update Task</title>
</head>
<body>
<div class="navigation">

        <ul>
           <a href="alltask.php"> <li> All Tasks </li></a>
        </ul>

    </div>
    <div class="heading">
        <h2> Update Task </h2>
    </div>
    <form method="post">
            <input type="text" name="tname" id="tname" placeholder="Enter Task name">
            <textarea name="tdesc" id="tdesc" placeholder="Enter task description"
             cols="12" rows="5">

            </textarea>

            <input type="text" name="timeline" id="timeline" placeholder="Timeline">
            <input type="text" name="urgency" id="urgency" placeholder="Enter Urgency level">
            
            
            <input type="submit" class="btn" name="submit" value="Update">
            
       
    

    </div>



</body>
</html>