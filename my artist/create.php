<!doctype html>
<html lang=en>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-compatible" content="IE=edge">
<meta name="viewport" content="width=device-widith,initial-scale=1.0">
        <title>artist form</title>
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
  width: 94%;
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
  background-color: #ccc;
}
    </style>
</head>
    <body>
 
    <form action="new.php" method="post">
      <h2>FILL THIS FORM</h2>
    <label for="name">Name:</label>
    <input type="text" name="name" style=" border-radius:20px solid;" value=""><br><br>
    <label for="email">Email:</label>
    <input type="email" name="email" value=""><br><br>
    <label for="phone">Phone:</label>
    <input type="text" name="phone" value=""><br><br>
    <label for="address">Address:</label>
    <input type="text" name="address" value=""><br><br>
    <label for="code">Code:</label>
    <input type="text" name="code" value=""><br><br>
    <input type="submit" name="submit" value="Submit">
    <input type="submit" name="submit" value="cancer">
</form>
</body>
</html>