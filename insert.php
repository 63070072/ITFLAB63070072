
<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'tanadon.mysql.database.azure.com', 'tanadonparosin@tanadon', 'Nexus404', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['name'];
$comment = $_POST['comment'];
$link = $_POST['link'];


$sql = "INSERT INTO guestbook (Name , Comment , Link) VALUES ('$name', '$comment', '$link')";


if (mysqli_query($conn, $sql)) {
  
    echo "<center>New record created successfully</center>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>

<div class="container">
  <center><a href="show.php"><input type="button" value="Show" class="btn btn-info" class="ex1"></a></center>
</div>
<body>
{
  background-color: rgba(172, 207, 246, 1);
}
</body>
</html>
