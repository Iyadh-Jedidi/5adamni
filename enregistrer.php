<?php
// Create connection
 $conn = new mysqli("localhost", "root", "123456789a", "user");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$nom=$_POST["name"];
$prenom=$_POST["lastname"];
$email=$_POST["email"];
$pass=$_POST["password"];
$age=$_POST["age"];
$travaille=$_POST["travaille"];
$adresse=$_POST["adresse"];
$tel=$_POST["numtel"];
$sql = "INSERT INTO users (email, name, lastname,password,age,travaille,adresse,numtel)
VALUES ('$email', '$nom', '$prenom', '$pass','$age','$travaille','$adresse','$tel')";


if ($conn->query($sql) === TRUE) {
    	header('Location: index.html');

} else {
    echo "Error: " . $sql . "<br>" . $conn->error ;
}
$conn->close();
?>