<?php
include '../config.php';
$cookie_value1 = "Schlossallee1";
$street = $_GET['street'];
setcookie($street, $cookie_value1, time() + (86400 * 30), "/", $domain, 1);
?>

<title><?php echo $street;?></title>
<html>
<meta http-equiv="refresh" content="1; URL=../index.php">
</html>