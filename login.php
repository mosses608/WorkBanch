<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login here || Welcome</title>
</head>
<body>
    <header>
    <style>
        header{
            background-size: cover;
            height: 160px;
            background-color: aqua;
        }
        hr{
            font-size: 25px;
            width: 100%;
        }
        h1{
            left: 28%;
            position: absolute;
            top: 5%;
            /*margin-top: 3%;*/
            text-align: center;
        }
        *{
            box-sizing: border-box;
            margin: 0%;
            border: 0%;
        }
        header img{
            position: absolute;
            top: 1%;
            left: 1%;
            width: 350px;
            height: 150px;
            border: 5px solid whitesmoke;
        }
        form input{
            width: 350px;
        }
        form p, input{
            padding: 16px;
        }
        form button:hover{
            color: white;
            background-color: rgb(175, 175, 182);
        }
        form button{
            color: white;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 20px;
            cursor: pointer;
            border-radius: 1rem;
        }
        /*form:hover{
            color: white;
        }*/
        a{
            text-decoration: none;
        }
        form{
            cursor: pointer;
            top: 35%;
            width: 32%;
            position: absolute;
            left: 35%;
            border: 2px solid black;
        }
        .container img{
            width: 50px;
            height: 57px;
        }
        #img2{
            right: 34%;
            top: 50%;
            position: absolute;
        }
        #img1{
            right: 34%;
            position: absolute;
            top: 41%;
        }
        form button{
            color: black;
        }
    </style>
    <h1>MBEYA UNIVERITY OF SCIENCE AND TECHNOLOGY <br>(MUST)</h1>
    <img src="images/must.jpg" alt="My Image" id="MyImage1">
</header>
<hr>
<form action="index.php" method="post" id="MyForm">
    <center>
        <p>Login Here</p>
        <input type="text" name="username" id="name1" placeholder="Enter Username" required><br><br>
        <input type="password" name="password" id="pass1" placeholder="Enter Password" required><br><br>
        <button type="submit">Login</button>
    </center>
</form>
<div class="container">
<img src="images/name.png" alt="My Image" id="img1"><img src="images/pass.png" alt="My Image" id="img2">
</div>
</body>
</html>