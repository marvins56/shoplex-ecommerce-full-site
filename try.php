<h2>try page</h2>
<?php
session_start();
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
echo $_SESSION['url'];





 ?>

<br>
<a href="others.php">login.php</a>
