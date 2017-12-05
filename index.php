<!DOCTYPE HTML>

<?php
     session_start();

     $username = "user";
     $password = "password";

     if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
     	header("location: success.php");
     }

     if (isset($_POST['username']) && isset($_POST['password'])) {
         if ($_POST['username'] == $username && $_POST['password'] == $password)
      {

      	  $_SESSION['logged_in'] = true;
      	  header ("Location: success.php");
      }
             
     }
?>

<head>
	<title></title>
</head>
<body>
        <form method="post" action="index.php">
        	username: <input type="text" name="username"> <br>
        	password: <input type="password" name="password"> <br>
        	<input type="submit" value="login!">
        	
        </form>
</body>
</html>