<?php
// Establish database connection
$host = "localhost";
$username = "root";
$password = "";
$dbname = "employees";
$conn = mysqli_connect($host, $username, $password, $dbname);

// Retrieve data from database
$id = $_GET['id'];
$sql = "SELECT * FROM artist WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<html>
    <head>
        <title>edit form</title>
    <style type="text/css">
        form {
  border: 1px solid #ccc;
  padding: 10px;
  margin: 20px auto;
  max-width: 400px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
input[type="datetime"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}
    </style>
    </head>
    <body>
<form method="post" action="edit.php">
    <h2>edit through here</h2>
    
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <label for="name">Name:</label>
    <input type="text" name="name" style=" border-radius:20px solid;" value="<?php echo $row['name']; ?>"><br><br>
    <label for="email">Email:</label>
    <input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>
    <label for="phone">Phone:</label>
    <input type="text" name="phone" value="<?php echo $row['phone']; ?>"><br><br>
    <label for="address">Address:</label>
    <input type="text" name="address" value="<?php echo $row['address']; ?>"><br><br>
    <label for="code">Code:</label>
    <input type="text" name="code" value="<?php echo $row['code']; ?>"><br><br>
    <label for="created_at">Created At:</label>
    <input type="datetime" name="created_at" value="<?php echo date('Y-m-d\TH:i', strtotime($row['created_at'])); ?>"><br><br>
    <input type="submit" name="submit" value="Update">
</form>

</body></html>