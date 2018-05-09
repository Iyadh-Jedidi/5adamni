<?php 
$conn = new mysqli("localhost", "root", "123456789a", "user");
$id=$_REQUEST['id'];
$sql="DELETE FROM users WHERE id='$id'";
$conn->query($sql);
header('Location: /homepage/admin.php');
?>
