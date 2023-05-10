<!doctype html>
<html lang=en>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-compatible" content="IE=edge">
<meta name="viewport" content="width=device-widith,initial-scale=1.0">
    <title>my artist</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
<h2>the artist list</h2>
<a class="btn btn-primary" href="/MY ARTIST/create.php" role="button">add new artist</a>
<br>
<table class="table">
    <thead>
        
</thead>
<tbody>
    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="employees";
    $connection=new mysqli( $servername,$username,$password,$database);
    if($connection->connect_error){
        die("connection failed:".$connection->connect_error);
    }
    
    $sql="SELECT * FROM artist";
    $result=$connection->query($sql);
    if(!$result){
        die("invalid query:".$connection->error);
    }
    echo '<table class="table">';
echo '<tr><th>Name</th><th>Email</th><th>Phone</th><th>Address</th><th>Code</th><th>Created At</th><th>Action</th></tr>';
      while($row=$result->fetch_assoc()) {
        $id = htmlspecialchars($row['id']);
    $name = htmlspecialchars($row['name']);
    $email = htmlspecialchars($row['email']);
    $phone = htmlspecialchars($row['phone']);
    $address = htmlspecialchars($row['address']);
    $code = htmlspecialchars($row['code']);
    $created_at = htmlspecialchars($row['created_at']);
echo "
<tr>
  
   <td>$row[name]</td>
  <td>$row[email]</td>
  <td>$row[phone]</td>
  <td>$row[address]</td>
  <td>$row[code]</td>
  <td>$row[created_at]</td>
  <td>
  <a class='btn btn-primary btn-sm' href='/MY ARTIST/edit form.php?id=$id'>edit</a>
  <a class='btn btn-danger btn-sm' href='/MY ARTIST/delete.php?id=$id'>delete</a>
  </td>
</tr>";

      } 
    ?>
   
</tbody>
    </div>
       
   
</body>
</html>