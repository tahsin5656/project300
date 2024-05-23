<?php
$Username=$_POST['Username'];
$ID=$_POST['ID'];

$conn = new mysqli('localhost','root','','register'); 
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
    $stmt=$conn->prepare("INSERT INTO registration(Username,ID) values(?,?)"); 
    $stmt->bind_param("ss",$Username,$ID); 
    $stmt->execute();
    echo "Registration is successful";
    $stmt->close();
    $conn->close();
}
?>



