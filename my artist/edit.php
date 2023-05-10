<?php
// Establish database connection
$host = "localhost";
$username = "root";
$password = "";
$dbname = "employees";
$conn = mysqli_connect("localhost","root","","employees");

// Update data in database
if(isset($_POST['submit'])) {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $code = $_POST['code'];

  $sql = "UPDATE artist SET name='$name', email='$email', phone='$phone', address='$address', code='$code' WHERE id=$id";

  if(mysqli_query($conn,$sql)) {
    echo"<script> alert('Data updated successfully');window.location='form.php';</script>";
  } else {
    echo "Error updating data: " . mysqli_error($conn);
  }
}
// Retrieve data from database
@$id = $_GET['id'];
$sql1 = "SELECT * FROM artist WHERE id=$id";
$result = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($result);

?>