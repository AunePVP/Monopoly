<?php
include '../config.php';
$hname = $_GET['hname'];
$cookie_name = $hname . "H";
$cookie_value1 = "hypothek";
setcookie($cookie_name, $cookie_value1, time() + (86400 * 30), "/", $domain, 1);
?>
<title><?php echo $hname;?></title>
<html>
<meta http-equiv="refresh" content="1; URL=../index.php">
</html>
