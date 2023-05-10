<?php
$host="localhost";
$username="root";
$password="";
$db="employees";
$conn=mysqli_connect("localhost","root","","employees");

$name = $_POST['name'];
$email = $_POST['email'];
$phone =$_POST ['phone'];
$address = $_POST['address'];
$code = $_POST['code'];

$sql="insert into artist(name,email,phone,address,code) values ('$name','$email','$phone','$address','$code')";
if($res=mysqli_query($conn,$sql))
{
    echo"<script> alert('the new one is entered');window.location='form.php';</script>";  
}
else{
    echo "<script> alert('not yet entered');window.location='form.php';</script>";
}
    
?>