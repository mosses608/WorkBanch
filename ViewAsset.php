<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Assets</title>
</head>
<body>
  <center>
      <form action="isset.php" method="post">
          <input type="number" name="phone" id="" placeholder="phone"><br><br>
          <input type="text" name="name" id="" placeholder="Enter Name"><br><br>
          <input type="date" name="date" id=""><br><br>
          <input type="text" name="useername" id="" placeholder="Enter username"><br><br>
          <input type="password" name="password" id="" placeholder="Enter password"><br><br>
          <input type="password" name="password1" id="" placeholder="Confirm password"><br><br>
          <button type="submit">Save</button>
      </form>
  </center>  
  <style>
      a{
          text-decoration:none;
      }
  </style>
  <a href="isset.php">View Result</a>
  <form action="view.php" method="post" enctype="multipart/form-data">
      <input type="file" name="TimeTable" accept="images/" required><br><br>
      <input type="text" name="Course" id="" placeholder="Enter a Course" required><br><br>
      <button type="submit">Upload</button>
  </form>
</body>
</html>