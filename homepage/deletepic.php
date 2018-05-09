<?php 
$conn = new mysqli("localhost", "root", "123456789a", "user");
$id=$_REQUEST['id'];
$id_user=$_REQUEST['id_user'];
$sql="DELETE FROM images WHERE id='$id'";
$conn->query($sql);
header('Location: /homepage/images.php?id= '.$id_user.'');
?>
