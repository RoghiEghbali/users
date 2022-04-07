<?php require('users.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<h1> blood  donation camp </h1>
<body  bgcolor = green>
  
<div> <h2> Registration Form  </h2></div>

<form action="connect.php"  method="post">

<label for="user"> Name:</label><br>
<input type="text" name='name' id="name" required> <br><br>
<label for="email"> Email:</label><br>
<input type="email" name='email' id="email" required> <br><br>
<label for="phone"> Phone:</label><br>
<input type="text" name='phone' id="phone" required> <br><br>

<label for="bgroup"> Blood Group:</label><br>
<input type="bgroup" name='bgroup' id="bgroup" required> <br><br>

<input type="submit" name='submit' id="submit">

<!-- Show list of users -->
<?php foreach ($users as $user) {
  echo '<p>My Name is <b>'.$user['name'].'</b> and my email is <b>'.$user['email'].'</b></p>';
} ?>

</form>
</body    >
</html>