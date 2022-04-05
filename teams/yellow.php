<?php
include '../config.php';
$cookie_name = "color";
$cookie_value1 = "yellow";
setcookie($cookie_name, $cookie_value1, time() + (86400 * 30), "/", $domain, 1);
setcookie("check", "1", time() + (86400 * 30), "/", $domain, 1);
?>
<!DOCTYPE html>
<html lang="eng">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../css/teams/style.css">    
<meta http-equiv="refresh" content="4; URL=../index.php">
<title></title>
  </head>
  <body>
<div id="teamy">  
<h2>TEAM GELB</h2>
<div id="card"><p>GOOD LUCK!</p></div>
</div>
</body>
</html>
