<?php
  $task = $_POST['taskset'];
  $dateset = $_POST['datesetter'];
  $userName = $_POST['usern'];
  $password = $_POST['passn'];

  $user = 'root';
  $pass = '';
  $db = 'todolistdb';

  #or die( ) terminates program if unable to connect
  $dbconn = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect to SQL Database");

  $sql = "INSERT INTO `tasks` (`usernm`, `task`, `taskstatus`, `task_due`) VALUES ('$userName', '$task', 'Pending', '$dateset');";
  $result = $dbconn->query($sql);
  echo "Succesfully created task!
  <form action='login.php' method='post' autocomplete='off'>
  <input type='text' value='$userName' hidden name='username' autocomplete='off'/>
  <input type='password' hidden value='$password' name='password'/>
  <br><input type='submit' value='Back'/>
  </form>";
?>
