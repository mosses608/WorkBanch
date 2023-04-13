<?php
//if(isset($_GET['query'])){
    //$query=$_GET['query'];
//}

//connect to database
$servername="localhost";
$username="root";
$password="";
$dbname="admins";

$conn=mysqli_connect($servername,$username,$password,$dbname);

//check connection
if(!$conn){
    die("Connection Failed" . mysqli_connect_error());
}

$query=$_GET['query'];
$Name=$_GET['Name'];
$Department=$_GET['Phone'];
$Material=$_GET['Email'];
//$Status=$_GET['Status'];
$sql="SELECT* FROM newusers WHERE name LIKE '%$query%'";

$result=mysqli_query($conn,$sql);

//loop through search results and display them

if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        echo '<div class="newusers">';
        echo '<h2>'.$row['Name'].'</h2>';
        echo '<h3>'.$row['Phone'].'</h3>';
        echo '<h3>'.$row['Email'].'</h3>';
        //echo '<h2>'.$row['Status'].'</h2>';
        echo '</div>';
    }
}
else{
    echo "No results found!";
}

//close connection:
mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <style>
        h2,h3{
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        h2{
            color:blue;
        }
    </style>
</body>
</html>