<?php
  $user = 'root';
  $pass = '';
  $db = 'todolistdb';

  #or die( ) terminates program if unable to connect
  $dbconn = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect to SQL Database");

  $userName = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT `ID` FROM `tasks` WHERE `usernm` = '$userName'";
    $alltasks = $dbconn->query($sql);

  $sql = "SELECT `ID` FROM `tasks` WHERE `usernm` = '$userName' AND `taskstatus` = 'Complete'";
    $complete = $dbconn->query($sql);
  #INSERT INTO `tasks`(`usernm`, `task`, `taskstatus`, `task_due`) VALUES ("ev5950","Learn basic PHP", "Complete","2018/12/1")
  $sql = "SELECT `ID` FROM `tasks` WHERE `usernm` = '$userName' AND `taskstatus` = 'Incomplete'";
    $incomplete = $dbconn->query($sql);
  $sql = "SELECT `ID` FROM `tasks` WHERE `usernm` = '$userName' AND `taskstatus` = 'Pending'";
    $pending = $dbconn->query($sql);
  $sql = "SELECT `ID` FROM `tasks` WHERE `usernm` = '$userName' AND `taskstatus` = 'Late'";
    $late = $dbconn->query($sql);

  echo "<br><br> <h3>Task Data</h3>";
  if($alltasks->num_rows == 1)
    echo "The system found " . $alltasks->num_rows . " task under your name!<br><br>";
  else echo "The system found " . $alltasks->num_rows . " tasks under your name!<br><br>";

  #echo "Pending: <a href='pending.php' target='_blank'>$pending->num_rows</a><br>";
  echo "Pending: $pending->num_rows<br>";
  echo "Late: $late->num_rows<br>";
  echo "Incomplete: $incomplete->num_rows<br>";
  echo "Complete: $complete->num_rows<br>";

  #form that will open a new page displaying task
  echo "<br><br><form action='tasks.php' method='post'>
    <select name='viewtasks'>
    <option value='Pending'>Pending</option>
    <option value='Incomplete'>Incomplete</option>
    <option value='Late'>Late</option>
    <option value='Complete'>Complete</option>
    <option value='all'>All</option>
    </select>
    <input type='text' hidden name='usern' value='$userName'>
    <input type='text' hidden name='passn' value='$password'>
    <input type='submit' value='View'>
    </form>";


  echo "<br><br>Create a task!<br>
    <form action='create.php' method='post'>
      Task: <input type='text' autocomplete='off' name='taskset' required><br>
      Due Date: <input type='date' name='datesetter' required><br>
      <input type='text' hidden name='usern' value='$userName'>
      <input type='text' hidden name='passn' value='$password'>
      <input type='submit'>
    </form>";
  ?>
