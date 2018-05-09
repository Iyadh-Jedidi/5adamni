<?php




session_start();
// Create connection
 $conn = new mysqli("localhost", "root", "123456789a", "user");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if  (($_POST["user"]==="admin" )and ($_POST["pass"]==="admin"))
{
	header('Location: ./homepage/admin.php');
}
echo "<br>";
$sql = "SELECT name,email,password FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if  (($_POST["user"]===$row["email"] )and ($_POST["pass"]===$row["password"]))
		{
			header('Location: ./homepage/index.html');
		}
    }
} else {
    echo "0 results";
}
echo "entrer votre adresse et votre mot de passe";
$_SESSION["email"]=$_POST["user"];

$conn->close();







 

?>
