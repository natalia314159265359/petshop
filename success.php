<?php
    session_start();
     if (!isset($_SESSION['loggedin'])   || $_SESSION['loggedin'] == false) {
           header ("Location: index.html");
     }

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	 <h2>You have successfully logged in!<br></h2>
 <a href="sale.html">YOU MAY NOW BROWSE FOR OUR ITEMS IN SALE!!!</a>

</body>
</html>
"