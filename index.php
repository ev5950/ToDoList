<html>
<head>
  <title> ToDo List: Main Page </title>
</head>
  Welcome to "ToDoList", A free task tracking App!<br><br>
<body>
        Login to your account!<br>

      <form action="login.php" method="post" autocomplete="off">
        Username: <input type="text" required="required" name="username" autocomplete="off" maxlength="12" size="12"/><br>
        Password: <input type="password" required="required"  name="password" maxlength="16" size="12"/>
        <br><input type="submit" value="Login"/>
      </form>

    <br><br>
    New User? Register and use this free app to track your tasks!
    <form action="register.php" method="post" autocomplete="off">
      Desired username: <input type="text" required="required"  name="username" maxlength="12"/><br>
      Password: <input type="password" required="required"  name="password" maxlength="16" />
      <br><input type="submit" value="Register"/>
    </form>
</body>
</html>
