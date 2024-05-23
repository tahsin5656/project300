<?php
    session_start();
    $conn = mysqli_connect("localhost","root", "", "course_management");

    
  if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $id = $_POST["id"];

    $duplicate = mysqli_query($conn, "SELECT * FROM `login` WHERE id='$id'");
    
    header("Location: main.php");
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Login Form</title>
<style>
  body {
    font-family: arial, sans-serif;
    background-color: #c2c5ca; 
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  .login-container {
    background-color:#18122B; 
    padding: 40px;
    width: 300px;
    text-align: center;
    box-shadow: 0 3px 10px rgba(7, 7, 7, 0.2);
  }
  .login-container h2 {
    color: rgb(241, 235, 235);
    margin-bottom: 20px;
  }
  .login-container p {
    color: white;
    margin-bottom: 30px;
  }
  input[type="text"], input[type="number"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: none;
    background-color: whitesmoke;
    border-radius: 5px;
  }
  input[type="submit"], input[type="button"] {
    width: 100%;
    padding: 10px;
    border: none;
    color: white;
    background-color: #064663;
    cursor: pointer;
  }
  input[type="submit"]:hover, input[type="button"]:hover {
    background-color: #0F3460;
  }
  
  .footer {
    text-align: center;
    color: white;
    font-size: 12px;
    position: absolute;
    bottom: 10px;
    width: 100%;
  }
</style>
</head>
<body>

<div class="login-container">
  <h2>STUDENT LOGIN FORM</h2>
  
  <form action="" method="post">
    <input type="text" name="username" id="username" placeholder="Username">
    <input type="text" name="id" id="id" placeholder="111-222-333">
    <input type="submit" name="submit" value="Login">
    <input type="button" value="Sign Up">
  </form>
</div>



</body>
</html>
