<html>
<head>
  <title> ToDo List: Login </title>
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

  $sql = "SELECT ID FROM users WHERE username='$userName' AND password='$password'";
  $result = $dbconn->query($sql);
  if($result->num_rows>0)
  {
    while($row=$result->fetch_assoc()){
      echo "Welcome ".$_POST['username'] . "!<br><a href='logout.php'>Log out</a>";
      include 'usrprf.php';
    }
  }
  else echo "Login info incorrect, <a href='index.php'>return to login page.</a>";
  ?>
</body>
</html>
