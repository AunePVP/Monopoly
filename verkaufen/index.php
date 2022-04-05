<?php
include '../config.php';
$street = $_GET['street'];
$sellstreet = $street . "H";
setcookie($street, "1", time() - (86400 * 30), "/", $domain, 1);
setcookie($sellstreet, "1", time() - (86400 * 30), "/", $domain, 1);
?>
<html>
<meta http-equiv="refresh" content="1; URL=../index.php">
</html>
