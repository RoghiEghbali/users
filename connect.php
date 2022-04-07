<?php 
if ( $_SERVER ['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){

    $conn=mysqli_connect( 'localhost','root','','roghi1')or die ("connection Failed:".mysqli_connect_error());
    if (isset ($_POST['name']) && isset($_POST['email'])&& isset($_POST['phone'])&& isset($_POST['bgroup']))
    {
      $name=$_POST['name'];
      $email=$_POST['email'];
      $phone=$_POST['phone'];
      $bgroup=$_POST['bgroup'];

      $sql="SELECT * FROM Users";
     $query =mysqli_query($conn,$sql);

     $rows = [];
while($row = mysqli_fetch_array($result))
{
    $rows[] = $row;
}


     if ($query){
         echo 'Entry Successfull';
     }
     else {
         echo 'Error Occurred';
     }




    } 
     
}  ?>
