<?php
if(isset($_POST['submit'])){
    $tid=$_GET['tid'];
    //echo $tid;
    $conn=mysqli_connect("localhost","root","","dbtodo");
    if(!$conn){
        die("Connection failed due to ".mysqli_connect_error());
    }
    else{
        //echo "Connection!";
    }
    $sql="DELETE FROM  task WHERE tid ='$tid'";
    
    $result=$conn->query($sql);
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/CSS" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    
    <title>Delete task</title>
</head>
<body>

    <div class="navigation">

        <ul>
           <a href="alltask.php"> <li> All Tasks </li></a>
        </ul>
        
    </div>
    <div class="heading">
        <h2> Delete Task </h2>
    </div>
    <form method="post">
    <input type="submit" class="btn" type="button" name="submit" value="Delete">
    
    
</body>
</html>