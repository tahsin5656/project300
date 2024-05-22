<?php
$Username=$_POST['Username'];
$ID=$_POST['ID'];

$conn = new mysqli('localhost','root','','register'); // Added missing semicolon
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
    $stmt=$conn->prepare("INSERT INTO registration(Username,ID) values(?,?)"); // Corrected SQL command
    $stmt->bind_param("ss",$Username,$ID); // Corrected method name
    $stmt->execute();
    echo "Registration is successful";
    $stmt->close();
    $conn->close();
}
?>



