<?php
$servername="localhost";
$username="root";
$password="";
$database="employees";
$conn = mysqli_connect("localhost","root","","employees");
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="DELETE FROM artist where id = $id";
    $conn->query($sql);
}
echo"<script> alert('Data deleted successfully');window.location='form.php';</script>";

?>