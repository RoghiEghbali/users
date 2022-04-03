
 <?php
$mysqli = new mysqli("localhost","root","","roghi");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}


$sql = "SELECT * FROM Users WHERE first_name = 'Roghi'";
$result = $mysqli -> query($sql);

// Fetch all
$items = $result -> fetch_all(MYSQLI_ASSOC);

// Free result set
echo '<pre>';
print_r($items);

$mysqli -> close();
?> 
