<?php
//define database connection parameters:
$servername="localhost";
$username="root";
$password="";
$dbname="admins";

//connectiom to the database:
$conn=mysqli_connect($servername,$username,$password,$dbname);
 
//check connection:
if(!$conn){
    die("Connection Failed" . mysqli_connect_error());
}
//define useer inputs:
$phone=$_POST['phone'];
$name=$_POST['phone'];
$date=$_POST['date'];
$useername=$_POST['useername'];
$password=$_POST['password'];
$password1=$_POST['password1'];
/*if(isset()){
    $phone=$_POST['phone'];
}
if(isset()){
    $name=$_POST['phone'];
}
if(isset()){
    $date=$_POST['date'];
}
if(isset()){
    $useername=$_POST['useername'];
}
if(isset()){
    $password=$_POST['password'];
}
if(isset()){
    $password1=$_POST['password1'];
}*/

/*$sql="USE admins";
$sql="CREATE TABLE registration(
    phone int(15),
    name varchar(20),
    date varchar(15),
    username varchar(20),
    password varchar(20),
    password1 varchar(20);)";*/
//$sql="INSERT INTO registration(phone,name,date,useername,password,password1) VALUES('$phone','$name','$date','$useername','$password','$password1')";
/*if($password!=$password1){
    $password1.hash();
}*/
if($password!=$password1){
    die("Confirm your password correctly!");
}else{
    $sql="SELECT* FROM registration";
    //$sql="INSERT INTO registration(phone,name,date,useername,password,password1) VALUES('$phone','$name','$date','$useername','$password','$password1')";
}
$result=mysqli_query($conn,$sql);
/*if($result){
    echo "New data added successfully";
}else{
    echo "data has not been added!";
}*/
//Fetch data crom database:


//display data in table form:
    echo "<table>";
    echo "<tr><th>phone</th><th>name</th><th>date</th><th>useername</th><th>password</th><th>password1</th><tr>";
    while($row=mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row['phone']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "td".$row['date']."</td>";
        echo "<td>".$row['useername']."</td>";
        echo "<td>".$row['password']."</td>";
        echo "<td>".$row['password1']."</td>";
        echo "</tr>";
    }
    echo "</table>";

//close connection:
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        th{
            padding-left:26px;
            border:1px solid black;
            /*display:none;*/
            background-color:blue;
            color:black;
            font-size:25px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        td{
            border:1px solid black;
            margin-left:25%;
            padding:16px;
        }
        body{
            background-color:white;
        }
    </style>
</body>
</html>