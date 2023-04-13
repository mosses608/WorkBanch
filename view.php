<?php
$servername="localhost";
$username="root";
$password="";
$dbname="admins";

//connect to the database:
$conn=mysqli_connect($servername,$username,$password,$dbname);

//check connection:
if(!$conn){
    die("Connection Failed" . mysqli_connect_error());
}
 //get user inputs:
$TimeTable=$_POST["TimeTable"];
$Course=$_POST["Course"];

$sql="SELECT* FROM file";

$result=mysqli_query($conn,$sql);
//display in table form:
    echo "<table>";
    echo "<tr><th><TimeTable</th><th>Course</th></tr>";
    while($row=mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row['TimeTable']."</td>";
        echo "<td>".$row['Course']."</td>";
        echo "</tr>";
    }
    echo "</table>";
//close connection:
mysqli_close($conn);
?>