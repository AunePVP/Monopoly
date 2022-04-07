<?php
include '../config.php';
$hname = $_GET['hname'];
$cookie_value1 = "hypothek";
$cookie_name = $hname . "H";
setcookie($cookie_name, $cookie_value1, time() - (86400 * 30), "/", $domain, 1);
?>
<title><?php echo $hname;?></title>
<html>
<meta http-equiv="refresh" content="1; URL=../index.php">
</html>
