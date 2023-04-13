<?php

//define database connection parameters:
$host="localhost";
$username="root";
$password="";
$dbname="admins";

//database connection:5
$conn=mysqli_connect($host,$username,$password,$dbname);

//check connection:
if(!$conn){
    die("Connection Failed" . mysqli_connect_error());
}

 //get inputs:
$ID=$_POST["ID"];
$Name=$_POST["Name"];
$Date=$_POST["Date"];
$Department=$_POST["Department"];
$Material=$_POST["Material"];
$Status=$_POST["Status"];

//query the database:
$sql="UPDATE uploaded SET Name='$Name' WHERE ID='$ID'";

if(mysqli_query($conn,$sql)){
    echo "Data Updated Successfully";
}else{
    echo "Data not Updated";
}

//close connection:
mysqli_close($conn);
?>