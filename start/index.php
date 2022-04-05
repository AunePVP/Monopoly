<?php
include '../config.php';
setcookie("check", "1", time() + (86400 * 30), "/", $domain, 1);
?>
<html>
<meta http-equiv="refresh" content="1; URL=../index.php">
</html>
