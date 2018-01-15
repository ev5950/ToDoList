<!DOCTYPE html>
<html>
<head>
  <title> ToDo List: Pending Tasks </title>
</head>

<body>
  <?php #show tasks that are pending for this user
  $user = 'root';
  $pass = '';
  $db = 'todolistdb';

  $userName = $_POST['usern'];
  $password = $_POST['passn'];

  $type = $_POST['viewtasks'];

  #or die( ) terminates program if unable to connect
  $dbconn = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect to SQL Database");
  if($type == 'all')
    $sql = "SELECT * FROM `tasks` WHERE `usernm` = '$userName'";
  else $sql = "SELECT * FROM `tasks` WHERE `usernm` = '$userName'  AND `taskstatus` = '$type'";

    $result = $dbconn->query($sql);
    $id;

    if($result->num_rows > 0)
    {
      echo "Click the status to update a task<br><br>
      <table>
      <tr>
        <th>Task</th>
        <th>Status</th>
        <th>Due Date</th>
      </tr>";
      while($row = $result->fetch_assoc())
      {
        echo "<tr><td style='width:300px;'>" . $row["task"] . "</td>";

       echo '<td style="width:100px;"><a href="edit.php?id=' .$row["ID"] . '">' .  $row["taskstatus"] . '</a></td>';

        #echo '<td style ="width:200px";>' . $row["taskstatus"] . '<form action="" method="post">
        #echo '<td style ="width:500px";>'. $row["taskstatus"] .'<form action="" method="post">
      #  <input type="hidden" name="id" value="' . $row["ID"] . '"/>
    #    <input type="text" hidden name="usern" value='.$userName.'>
      #  <input type="text" hidden name="passn" value='.$password.'>
        #<input type="text" hidden name="viewtasks" value='.$type.'>
        #<select name="newetask">
        #<option value="" selected disabled hidden></option>
        #<option value="Pending">Pending</option>
        #<option value="Incomplete">Incomplete</option>
      #  <#option value="Late">Late</option>
        #<option value="Complete">Complete</option>
        #</select>
        #<input type = "submit" name="change" value ="Update">

        #</form></td>';


        echo "<td style='width:150px;'>" . $row["task_due"]  . "</td></tr>";
      }
      echo "</table>";

        $dbconn->close();
    }
    else echo "No tasks found!";

      echo "<form action='login.php' method='post' autocomplete='off'>
      <input type='text' value='$userName' hidden name='username' autocomplete='off'/>
      <input type='password' hidden value='$password' name='password'/>
      <input type='submit' value='Back'/>
      </form>";
    ?>
  </body>
  </html>
