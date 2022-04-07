<?php 

require('functions.php');

$conn=mysqli_connect( 'localhost','root','','roghi1')or die ("connection Failed:".mysqli_connect_error());

// retrive users from db
$sql="SELECT * FROM Users";
$query =mysqli_query($conn,$sql);

// populate users in array
$users = [];
while($row = mysqli_fetch_array($query))
{
    $users[] = $row;
}

// dd($users);
