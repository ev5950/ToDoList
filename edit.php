<html>
<head>
  <title> ToDo List: Edit Task </title>
</head>

<body>
<form action = "" method ="post">
<input type="hidden" name="id" value="<?php echo $id;?>"/>
  <select name='viewtasks'>
  <option value='Pending'>Pending</option>
  <option value='Incomplete'>Incomplete</option>
  <option value='Late'>Late</option>
  <option value='Complete'>Complete</option>
  </select>
<input type = "submit" name="submit" value ="Update Status">

<?php
$user = 'root';
$pass = '';
$db = 'todolistdb';
$newtype = '';
$id = intval($_GET['id']);

#or die( ) terminates program if unable to connect
$dbconn = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect to SQL Database");
if(isset($_POST['submit']))
{
  $newtype = $_POST['viewtasks'];
  $sql = "UPDATE `tasks` SET `taskstatus` = '$newtype' WHERE `tasks`.`ID` = '$id'";
  $dbconn->query($sql);
  echo '<br>Value changed succesfully.
  <script type="text/javascript">
  javascript:history.go(-3);
  </script>';
}

?>

</body>
<html>
