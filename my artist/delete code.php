<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "employees";
$conn = mysqli_connect("localhost","root","","employees");
if(isset($_GET["id"])){
$sql="DELETE FROM artist WHERE id=$id";
$conn->query($sql);
}
header("location:/MY ARTIST/form.php");
exit;
?>