<?php include('connection.php'); ?>
<?php
  session_start();

  if($_POST){
    
  $username = $_POST["username"];
  $password = $_POST["password"];

  $sql = "SELECT * FROM login WHERE username = '$username' and password = '$password'";
  
  $result = $conn->query($sql);

  if ($result->num_rows != 0) {
    $_SESSION['login_user'] = $username;

    if(isset($_SESSION['login_user'])){
      header('Location: http://localhost/test4/');
    }

  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
  }
  

?>

<html>
<body>

<h1>HTML Forms</h1>

<form method="POST">
  Username:<br>
  <input type="text" name="username">
  <br>
  Password:<br>
  <input type="password" name="password" >
  <br><br>
  <input type="submit" value="Submit">
</form> 
<br>

</body>
</html>
