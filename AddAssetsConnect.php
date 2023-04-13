<?php
//connect to database:
$servername="localhost";
$username="root";
$password="";
$dbname="admins";

$conn = mysqli_connect($servername, $username, $password, $dbname);

//check connection: 
if(!$conn){
    die("Connection Failed "  . mysqli_connect_error());
}

//insert into table:
$ID=$_POST["ID"];
$Name=$_POST["Name"];
$Date=$_POST["Date"];
$Department=$_POST["Department"];
$Material=$_POST["Material"];
$Status=$_POST["Status"];

$sql = "INSERT INTO uploaded (ID,Name,Date,Department,Material,Status) VALUES('$ID','$Name','$Date','$Department','$Material','$Status')";

if(mysqli_query($conn,$sql)){
    echo "New Asset Added Successfully.";
}else{
    echo "Error:  " .$sql  . "<br>"  . mysqli_error($conn);
}


/*//Fetch data:
$sql ="SELECT * FROM new_assets";
$result=mysqli_query($conn,$sql);

//Display data in the table format:
    echo "<table>";
    echo "<tr><th>ID</><th>Name</th><th>Date</th><th>Department</th><th>Material</th><th>Status</th><tr>";
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row['ID']."</td>";
        echo "<td>".$row['Name']."</td>";
        echo "<td>".$row['Date']."</td>";
        echo "<td>".$row['Department']."</td>";
        echo "<td>".$row['Material']."</td>";
        echo "<td>".$row['Status']."</td>";
        echo "</tr>";
    }
    echo "</table>";*/
//close connection:

mysqli_close($conn);
?>