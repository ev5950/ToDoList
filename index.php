<html>
<?php
  $user = 'root';
  $pass = '';
  $db = 'todolistdb';

  #or die( ) terminates program if unable to connect
  $dbconn = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect to SQL Database");

    ##Test if we can reach database
    #echo "Connected to database."
 ?>
<body>
  <form action="sc.php" method="post">
    <input type="text" name="username" size="30"/>
    <input type="submit" value="Test"/>
  </form>
</body>
</html>
