<?php
//define database connection parameters:
$host = "localhost";
$username = "root";
$password = "";
$dbname = "admins";

//connect to the database:
$conn = mysqli_connect($host, $username, $password, $dbname);

//check connection:
if(!$conn){
    die("Connection  Failed:  " . mysqli_connect_error());
}
//get user input from the login form:
$username=$_POST["username"];
$password=$_POST["password"];

//query the database for the user:
 $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
 $result = mysqli_query($conn, $sql);

//check if the user exists in the database:
if(mysqli_num_rows($result)>0){
    header("Location: dashboard.php");
}else{
    echo "Incorrect username or password!!!";
}
 //close database connection:
 mysqli_close($conn); 
?>