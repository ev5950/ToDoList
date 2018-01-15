<html>
<head>
  <title> ToDo List: Register for Free! </title>
</head>

<body>
<?php
  $user = 'root';
  $pass = '';
  $db = 'todolistdb';

  #or die( ) terminates program if unable to connect
  $dbconn = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect to SQL Database");

  $userName = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT ID FROM users WHERE username='$userName'";

  $result = $dbconn->query($sql);
  if($result->num_rows>0)
  {
    while($row=$result->fetch_assoc()){
      echo "Username already exists. <a href='index.php'>Choose a different name.</a>";
    }
  }
  else
  {
    $sql = "INSERT INTO `users` (`username`, `password`) VALUES ('$userName','$password')";
    $result = $dbconn->query($sql);
    echo "Succesfully registered, <a href ='index.php'>return to login page.</a>";
  }?>

<?php #echo "hi" . $userName; ?>


</body>
</html>
