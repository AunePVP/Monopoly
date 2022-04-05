<?php
$cookie_hypothek = "hypothek";
$cookie_true = "Schlossallee1";
$cookie_rot = "red";
$cookie_gruen = "green";
$cookie_blau = "blue";
$cookie_gelb = "yellow";
$cookie_dgruen = "darkgreen";
$cookie_dblau = "darkblue";
$cookie_weiss = "white";
$cookie_schwarz = "black";
$cookie_fehler = "fehler";
?>
<!DOCTYPE html>
<html>
<head>
<title>Monopoly Startseite</title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="initial-scale=1.0">
 <link rel="stylesheet" href="css/stylesheet.css">
  <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://github.com/AunePVP/Fonts/raw/main/standart.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
<?php
if(isset($_COOKIE["check"]) && $_COOKIE["check"] == "0") {
  echo "main{";
  echo "display: none;";
  echo "}";
}
?>
<?php
if(isset($_COOKIE["check"]) && $_COOKIE["check"] == "1") {
  echo "main{";
  echo "display: block;";
  echo "}";
}
?>
<?php
if(isset($_COOKIE["color"]) && $_COOKIE["color"] == $cookie_rot) {
  echo "#Farbe{";
  echo "background-color: #FF3232;";
  echo "}";
}
?>
<?php
if(isset($_COOKIE["color"]) && $_COOKIE["color"] == $cookie_gruen) {
  echo "#Farbe{";
  echo "background-color: #83FF00;";
  echo "}";
}
?>
<?php
if(isset($_COOKIE["color"]) && $_COOKIE["color"] == $cookie_blau) {
  echo "#Farbe{";
  echo "background-color: #00BEF6;";
  echo "}";
}
?>
<?php
if(isset($_COOKIE["color"]) && $_COOKIE["color"] == $cookie_gelb) {
  echo "#Farbe{";
  echo "background-color: #fdfb16;";
  echo "}";
}
?>
<?php
if(isset($_COOKIE["color"]) && $_COOKIE["color"] == $cookie_dgruen) {
  echo "#Farbe{";
  echo "background-color: #397E21;";
  echo "}";
}
?>
<?php
if(isset($_COOKIE["color"]) && $_COOKIE["color"] == $cookie_dblau) {
  echo "#Farbe{";
  echo "background-color: #23417F;";
  echo "}";
}
?>
<?php
if(isset($_COOKIE["color"]) && $_COOKIE["color"] == $cookie_weiss) {
  echo "#Farbe{";
  echo "background-color: #FFFFFF;";
  echo "}";
}
?>
<?php
if(isset($_COOKIE["color"]) && $_COOKIE["color"] == $cookie_schwarz) {
  echo "#Farbe{";
  echo "background-color: #000;";
  echo "}";
}
?>

<?php
if(isset($_COOKIE["I"]) && $_COOKIE["I"] == $cookie_true) {
  echo "#I{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo ".clila{";
  echo "display: block !important;";
  echo "}";
  echo "\n";
}
else {
  echo "#I{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["IH"]) && $_COOKIE["IH"] == $cookie_hypothek) {
  echo "#IH{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo "#I{";
  echo "display: none;";
  echo "}";
}
else {
  echo "#IH{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["II"]) && $_COOKIE["II"] == $cookie_true) {
  echo "#II{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo ".clila{";
  echo "display: block !important;";
  echo "}";
  echo "\n";
}
else {
  echo "#II{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["IIH"]) && $_COOKIE["IIH"] == $cookie_hypothek) {
  echo "#IIH{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo "#II{";
  echo "display: none;";
  echo "}";
}
else {
  echo "#IIH{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["III"]) && $_COOKIE["III"] == $cookie_true) {
  echo "#III{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo ".clightblue{";
  echo "display: block !important;";
  echo "}";
  echo "\n";
}
else {
  echo "#III{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["IIIH"]) && $_COOKIE["IIIH"] == $cookie_hypothek) {
  echo "#IIIH{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo "#III{";
  echo "display: none;";
  echo "}";
}
else {
  echo "#IIIH{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["IV"]) && $_COOKIE["IV"] == $cookie_true) {
  echo "#IV{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo "\n";
  echo ".clightblue{";
  echo "display: block !important;";
  echo "}";
  echo "\n";
}
else {
  echo "#IV{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["IVH"]) && $_COOKIE["IVH"] == $cookie_hypothek) {
  echo "#IVH{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo "#IV{";
  echo "display: none;";
  echo "}";
}
else {
  echo "#IVH{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["V"]) && $_COOKIE["V"] == $cookie_true) {
  echo "#V{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo "\n";
  echo ".clightblue{";
  echo "display: block !important;";
  echo "}";
  echo "\n";
}
else {
  echo "#V{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["VH"]) && $_COOKIE["VH"] == $cookie_hypothek) {
  echo "#VH{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo "#V{";
  echo "display: none;";
  echo "}";
}
else {
  echo "#VH{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["VI"]) && $_COOKIE["VI"] == $cookie_true) {
  echo "#VI{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo ".cpink{";
  echo "display: block !important;";
  echo "}";
  echo "\n";
}
else {
  echo "#VI{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["VIH"]) && $_COOKIE["VIH"] == $cookie_hypothek) {
  echo "#VIH{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo "#VI{";
  echo "display: none;";
  echo "}";
}
else {
  echo "#VIH{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["VII"]) && $_COOKIE["VII"] == $cookie_true) {
  echo "#VII{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo ".cpink{";
  echo "display: block !important;";
  echo "}";
  echo "\n";
}
else {
  echo "#VII{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["VIIH"]) && $_COOKIE["VIIH"] == $cookie_hypothek) {
  echo "#VIIH{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo "#VII{";
  echo "display: none;";
  echo "}";
}
else {
  echo "#VIIH{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["VIII"]) && $_COOKIE["VIII"] == $cookie_true) {
  echo "#VIII{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo ".cpink{";
  echo "display: block !important;";
  echo "}";
  echo "\n";
}
else {
  echo "#VIII{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["VIIIH"]) && $_COOKIE["VIIIH"] == $cookie_hypothek) {
  echo "#VIIIH{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo "#VIII{";
  echo "display: none;";
  echo "}";
}
else {
  echo "#VIIIH{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["IX"]) && $_COOKIE["IX"] == $cookie_true) {
  echo "#IX{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo ".corange{";
  echo "display: block !important;";
  echo "}";
  echo "\n";
}
else {
  echo "#IX{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["IXH"]) && $_COOKIE["IXH"] == $cookie_hypothek) {
  echo "#IXH{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo "#IX{";
  echo "display: none;";
  echo "}";
}
else {
  echo "#IXH{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["X"]) && $_COOKIE["X"] == $cookie_true) {
  echo "#X{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo ".corange{";
  echo "display: block !important;";
  echo "}";
  echo "\n";
}
else {
  echo "#X{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["XH"]) && $_COOKIE["XH"] == $cookie_hypothek) {
  echo "#XH{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo "#X{";
  echo "display: none;";
  echo "}";
}
else {
  echo "#XH{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["XI"]) && $_COOKIE["XI"] == $cookie_true) {
  echo "#XI{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo ".corange{";
  echo "display: block !important;";
  echo "}";
  echo "\n";
}
else {
  echo "#XI{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["XIH"]) && $_COOKIE["XIH"] == $cookie_hypothek) {
  echo "#XIH{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo "#XI{";
  echo "display: none;";
  echo "}";
}
else {
  echo "#XIH{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["XII"]) && $_COOKIE["XII"] == $cookie_true) {
  echo "#XII{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo ".cred{";
  echo "display: block !important;";
  echo "}";
  echo "\n";
}
else {
  echo "#XII{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["XIIH"]) && $_COOKIE["XIIH"] == $cookie_hypothek) {
  echo "#XIIH{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo "#XII{";
  echo "display: none;";
  echo "}";
}
else {
  echo "#XIIH{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["XIII"]) && $_COOKIE["XIII"] == $cookie_true) {
  echo "#XIII{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo ".cred{";
  echo "display: block !important;";
  echo "}";
  echo "\n";
}
else {
  echo "#XIII{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["XIIIH"]) && $_COOKIE["XIIIH"] == $cookie_hypothek) {
  echo "#XIIIH{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo "#XIII{";
  echo "display: none;";
  echo "}";
}
else {
  echo "#XIIIH{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["XIV"]) && $_COOKIE["XIV"] == $cookie_true) {
  echo "#XIV{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo ".cred{";
  echo "display: block !important;";
  echo "}";
  echo "\n";
}
else {
  echo "#XIV{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["XIVH"]) && $_COOKIE["XIVH"] == $cookie_hypothek) {
  echo "#XIVH{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo "#XIV{";
  echo "display: none;";
  echo "}";
}
else {
  echo "#XIVH{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["XV"]) && $_COOKIE["XV"] == $cookie_true) {
  echo "#XV{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo ".cyellow{";
  echo "display: block !important;";
  echo "}";
  echo "\n";
}
else {
  echo "#XV{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["XVH"]) && $_COOKIE["XVH"] == $cookie_hypothek) {
  echo "#XVH{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo "#XV{";
  echo "display: none;";
  echo "}";
}
else {
  echo "#XVH{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["XVI"]) && $_COOKIE["XVI"] == $cookie_true) {
  echo "#XVI{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo ".cyellow{";
  echo "display: block !important;";
  echo "}";
  echo "\n";
}
else {
  echo "#XVI{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["XVIH"]) && $_COOKIE["XVIH"] == $cookie_hypothek) {
  echo "#XVIH{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo "#XVI{";
  echo "display: none;";
  echo "}";
}
else {
  echo "#XVIH{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["XVII"]) && $_COOKIE["XVII"] == $cookie_true) {
  echo "#XVII{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo ".cyellow{";
  echo "display: block !important;";
  echo "}";
  echo "\n";
}
else {
  echo "#XVII{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["XVIIH"]) && $_COOKIE["XVIIH"] == $cookie_hypothek) {
  echo "#XVIIH{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo "#XVII{";
  echo "display: none;";
  echo "}";
}
else {
  echo "#XVIIH{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["XVIII"]) && $_COOKIE["XVIII"] == $cookie_true) {
  echo "#XVIII{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo ".cblue{";
  echo "display: block !important;";
  echo "}";
  echo "\n";
}
else {
  echo "#XVIII{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["XVIIIH"]) && $_COOKIE["XVIIIH"] == $cookie_hypothek) {
  echo "#XVIIIH{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo "#XVIII{";
  echo "display: none;";
  echo "}";
}
else {
  echo "#XVIIIH{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["XIX"]) && $_COOKIE["XIX"] == $cookie_true) {
  echo "#XIX{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo ".cblue{";
  echo "display: block !important;";
  echo "}";
  echo "\n";
}
else {
  echo "#XIX{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["XIXH"]) && $_COOKIE["XIXH"] == $cookie_hypothek) {
  echo "#XIXH{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo "#XIX{";
  echo "display: none;";
  echo "}";
}
else {
  echo "#XIXH{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["XX"]) && $_COOKIE["XX"] == $cookie_true) {
  echo "#XX{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo ".cgrey{";
  echo "display: block !important;";
  echo "}";
  echo "\n";
}
else {
  echo "#XX{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["XXH"]) && $_COOKIE["XXH"] == $cookie_hypothek) {
  echo "#XXH{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo "#XX{";
  echo "display: none;";
  echo "}";
}
else {
  echo "#XXH{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["XXI"]) && $_COOKIE["XXI"] == $cookie_true) {
  echo "#XXI{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo ".cgrey{";
  echo "display: block !important;";
  echo "}";
  echo "\n";
}
else {
  echo "#XXI{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["XXIH"]) && $_COOKIE["XXIH"] == $cookie_hypothek) {
  echo "#XXIH{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo "#XXI{";
  echo "display: none;";
  echo "}";
}
else {
  echo "#XXIH{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["XXII"]) && $_COOKIE["XXII"] == $cookie_true) {
  echo "#XXII{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo ".cgrey{";
  echo "display: block !important;";
  echo "}";
  echo "\n";
}
else {
  echo "#XXII{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["XXIIH"]) && $_COOKIE["XXIIH"] == $cookie_hypothek) {
  echo "#XXIIH{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo "#XXII{";
  echo "display: none;";
  echo "}";
}
else {
  echo "#XXIIH{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["XXIII"]) && $_COOKIE["XXIII"] == $cookie_true) {
  echo "#XXIII{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo ".cgrey{";
  echo "display: block !important;";
  echo "}";
  echo "\n";
}
else {
  echo "#XXIII{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["XXIIIH"]) && $_COOKIE["XXIIIH"] == $cookie_hypothek) {
  echo "#XXIIIH{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo "#XXIII{";
  echo "display: none;";
  echo "}";
}
else {
  echo "#XXIIIH{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["XXIV"]) && $_COOKIE["XXIV"] == $cookie_true) {
  echo "#XXIV{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo ".cgreen{";
  echo "display: block !important;";
  echo "}";
  echo "\n";
}
else {
  echo "#XXIV{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["XXIVH"]) && $_COOKIE["XXIVH"] == $cookie_hypothek) {
  echo "#XXIVH{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo "#XXIV{";
  echo "display: none;";
  echo "}";
}
else {
  echo "#XXIVH{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["XXV"]) && $_COOKIE["XXV"] == $cookie_true) {
  echo "#XXV{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo ".cgreen{";
  echo "display: block !important;";
  echo "}";
  echo "\n";
}
else {
  echo "#XXV{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["XXVH"]) && $_COOKIE["XXVH"] == $cookie_hypothek) {
  echo "#XXVH{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo "#XXV{";
  echo "display: none;";
  echo "}";
}
else {
  echo "#XXVH{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["XXVI"]) && $_COOKIE["XXVI"] == $cookie_true) {
  echo "#XXVI{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo ".cgreen{";
  echo "display: block !important;";
  echo "}";
  echo "\n";
}
else {
  echo "#XXVI{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["XXVIH"]) && $_COOKIE["XXVIH"] == $cookie_hypothek) {
  echo "#XXVIH{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo "#XXVI{";
  echo "display: none;";
  echo "}";
}
else {
  echo "#XXVIH{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["XXVII"]) && $_COOKIE["XXVII"] == $cookie_true) {
  echo "#XXVII{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo ".cwhite{";
  echo "display: block !important;";
  echo "}";
  echo "\n";
}
else {
  echo "#XXVII{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["XXVIIH"]) && $_COOKIE["XXVIIH"] == $cookie_hypothek) {
  echo "#XXVIIH{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo "#XXVII{";
  echo "display: none;";
  echo "}";
}
else {
  echo "#XXVIIH{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["XXVIII"]) && $_COOKIE["XXVIII"] == $cookie_true) {
  echo "#XXVIII{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo ".cwhite{";
  echo "display: block !important;";
  echo "}";
  echo "\n";
}
else {
  echo "#XXVIII{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["XXVIIIH"]) && $_COOKIE["XXVIIIH"] == $cookie_hypothek) {
  echo "#XXVIIIH{";
  echo "display: block;";
  echo "}";
  echo "\n";
  echo "#XXVIII{";
  echo "display: none;";
  echo "}";
}
else {
  echo "#XXVIIIH{";
  echo "display: none;";
  echo "}";
  echo "\n";
}
?>
<?php
if(isset($_COOKIE["check"]) && $_COOKIE["check"] == "0") {
  echo "#Farbe{";
  echo "display: none";
  echo "}";
}
?>
<?php
if(isset($_COOKIE["check"]) && $_COOKIE["check"] == "0") {
  echo "main{";
  echo "display: none;";
  echo "}";
}
?>
<?php
if(isset($_COOKIE["check"]) && $_COOKIE["check"] == "1") {
  echo "#overlay{";
  echo "display: none!important;";
  echo "}";
}
?>
.clightblue{
display: none;
}
.clila{
display: none;
}
.cpink{
display: none;
}
.corange{
display: none;
}
.cred{
display: none;
}
.cyellow{
display: none;
}
.cblue{
display: none;
}
.cgrey{
display: none;
}
.cgreen{
display: none;
}
.cwhite{
display: none;
}
#overlay {
  position: fixed;
  display: block;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.5);
  z-index: 2;
  cursor: pointer;
}
#text{
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 50px;
  color: white;
  transform: translate(-50%,-50%);
  -ms-transform: translate(-50%,-50%);
}
</style>
</head>
<body>
<div id="overlay">
  <div id="text">Du musst zuerst einem Team beitreten um spielen zu können.</div>
</div>
<nav>
<ul>
	<table style="width:100%";><tbody>
		<tr>
			<td id="Monopoly";><div class="link-start"><a class="mnp" href="#">Monopoly</a></div></td>
			<td id="Value";><div class="Value"><?php echo($_COOKIE["Value"] ."$");?></div></td>
			<td id="lswitch";><div class="lang-switch">
				<form>
				<select id="lang-switch">
					<option value="en">English</option>
					<option value="de" selected>Deutsch</option>
				</select>
				</form>
				</div>
			</td>
			<td id="Team";><div class="Farbe"><a id="Farbe" style="border-radius:100px;"></a></div></td>
		</tr>
		</tbody></table></ul></nav>
<main>
<p>
    <div lang="de">
<div class="table">
	<section><section>
    <details class="clila">
    <summary class="property purple">
				<span class="eyebrow">Hamburg</span>
				LILA
			</summary>
		<div id='I'>
		<details class="card">
			<summary class="property purple">
				<span class="eyebrow">Hamburg</span>
				GROßE FREIHEIT
			</summary>
			<p class="rent">miete $2.</p>
			<div class="priceTable">
				<div class="qty">mit 1 Haus</div>
				<div class="price">$ 10</div>
				<div class="qty">mit 2 Häusern</div>
				<div class="price">30</div>
				<div class="qty">mit 3 Häusern</div>
				<div class="price">90</div>
				<div class="qty">mit 4 Häusern</div>
				<div class="price">160</div>
			</div>
			<p class="hotel">mit HOTEL $250</p>
			<p class="mortgage">Hypothekenwert $30</p>
			<p class="houses">1 Haus kostet $50</p>
			<p class="hotelCost">1 Hotel kostet $50 plus 4 Häuser</p>
			<p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br />&copy;1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=I">HYPOTHEK</a>
			<a class="verkaufen" href="/verkaufen/index.php?street=I">VERKAUFEN</a>
		</details>
		</div>
                <div id='IH'>
                <details class="card">
                        <summary class="property purple">
                                <span class="eyebrow">Hamburg</span>
                                GROßE FREIHEIT
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">BELASTET<br />MIT $ 30</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=I">AUFLÖSEN</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=I">VERKAUFEN</a>
                </details>
                </div>
		<div id='II'>
                <details class="card">
                        <summary class="property purple">
                                <span class="eyebrow">Hamburg</span>
                                REEPERBAHN
                        </summary>
                        <p class="rent">miete $4.</p>
                        <div class="priceTable">
                                <div class="qty">mit 1 Haus</div>
                                <div class="price">$ 20</div>
                                <div class="qty">mit 2 Häusern</div>
                                <div class="price">60</div>
                                <div class="qty">mit 3 Häusern</div>
                                <div class="price">180</div>
                                <div class="qty">mit 4 Häusern</div>
                                <div class="price">320</div>
                        </div>
                        <p class="hotel">mit HOTEL $450</p>
                        <p class="mortgage">Hypothekenwert $30</p>
                        <p class="houses">1 Haus kostet $50</p>
                        <p class="hotelCost">1 Hotel kostet $50 plus 4 Häuser</p>
                        <p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br>©1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=II">HYPOTHEK</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=II">VERKAUFEN</a>
		</details>
                </div>
                <div id='IIH'>
                <details class="card">
                        <summary class="property purple">
                                <span class="eyebrow">Hamburg</span>
                                REEPERBAHN
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">BELASTET<br />MIT $ 30</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=II">AUFLÖSEN</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=II">VERKAUFEN</a>
                </details>
	</section>
    
</section>
<section>
<section>
<details class="clightblue">
<summary class="property lightblue">
				<span class="eyebrow">Hamburg</span>
				BLAU
			</summary>
		<div id='III'>
		<details class="card">
			<summary class="property lightblue">
				<span class="eyebrow">Hamburg</span>
				SYLVESTERALLEE
			</summary>
			<p class="rent">miete $6.</p>
			<div class="priceTable">
				<div class="qty">mit 1 Haus</div>
				<div class="price">$ 30</div>
				<div class="qty">mit 2 Häusern</div>
				<div class="price">90</div>
				<div class="qty">mit 3 Häusern</div>
				<div class="price">270</div>
				<div class="qty">mit 4 Häusern</div>
				<div class="price">400</div>
			</div>
			<p class="hotel">mit HOTEL $550</p>
			<p class="mortgage">Hypothekenwert $50</p>
			<p class="houses">1 Haus kostet $50</p>
			<p class="hotelCost">1 Hotel kostet $50 plus 4 Häuser</p>
			<p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br />&copy;1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=III">HYPOTHEK</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=III">VERKAUFEN</a>
		</details>
		</div>
                <div id='IIIH'>
                <details class="card">
                        <summary class="property lightblue">
                                <span class="eyebrow">Hamburg</span>
                                SYLVESTERALLEE
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">BELASTET<br />MIT $ 50</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=III">AUFLÖSEN</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=III">VERKAUFEN</a>
			</details>
			</div>
		<div id='IV'>
                <details class="card">
                        <summary class="property lightblue">
                                <span class="eyebrow">Hamburg</span>
                                HINDENBURGSTRAßE
                        </summary>
                        <p class="rent">miete $6.</p>
                        <div class="priceTable">
                                <div class="qty">mit 1 Haus</div>
                                <div class="price">$ 30</div>
                                <div class="qty">mit 2 Häusern</div>
                                <div class="price">90</div>
                                <div class="qty">mit 3 Häusern</div>
                                <div class="price">270</div>
                                <div class="qty">mit 4 Häusern</div>
                                <div class="price">400</div>
                        </div>
                        <p class="hotel">mit HOTEL $550</p>
                        <p class="mortgage">Hypothekenwert $50</p>
                        <p class="houses">1 Haus kostet $50</p>
                        <p class="hotelCost">1 Hotel kostet $50 plus 4 Häuser</p>
                        <p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br>©1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=IV">HYPOTHEK</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=IV">VERKAUFEN</a>
                </details>
                </div>
		<div id='IVH'>
                <details class="card">
                        <summary class="property lightblue">
                                <span class="eyebrow">Hamburg</span>
                                HINDENBURGSTRAßE
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">BELASTET<br />MIT $ 50</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=IV">AUFLÖSEN</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=IV">VERKAUFEN</a>
                        </details>
                        </div>
		<div id='V'>
                <details class="card">
                        <summary class="property lightblue">
                                <span class="eyebrow">Hamburg</span>
                                HAGENBECK
                        </summary>
                        <p class="rent">miete $8.</p>
                        <div class="priceTable">
                                <div class="qty">mit 1 Haus</div>
                                <div class="price">$ 40</div>
                                <div class="qty">mit 2 Häusern</div>
                                <div class="price">100</div>
                                <div class="qty">mit 3 Häusern</div>
                                <div class="price">300</div>
                                <div class="qty">mit 4 Häusern</div>
                                <div class="price">450</div>
                        </div>
                        <p class="hotel">mit HOTEL $600</p>
                        <p class="mortgage">Hypothekenwert $60</p>
                        <p class="houses">1 Haus kostet $50</p>
                        <p class="hotelCost">1 Hotel kostet $50 plus 4 Häuser</p>
                        <p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br>©1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=V">HYPOTHEK</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=V">VERKAUFEN</a>
                </details>
                </div>
                <div id='VH'>
                <details class="card">
                        <summary class="property lightblue">
                                <span class="eyebrow">Hamburg</span>
                                HAGENBECK
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">BELASTET<br />MIT $ 60</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=V">AUFLÖSEN</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=V">VERKAUFEN</a>
                </details>
		</div>
	</section>
	</section>
</div>
<div class="table">
<section>
<section>
<details class="cpink">
<summary class="property pink">
				<span class="eyebrow">Hamburg</span>
				PINK
			</summary>
		<div id='VI'>
		<details class="card">
			<summary class="property pink">
				<span class="eyebrow">Hamburg</span>
				Deichstraße
			</summary>
			<p class="rent">miete $10.</p>
			<div class="priceTable">
				<div class="qty">mit 1 Haus</div>
				<div class="price">$ 50</div>
				<div class="qty">mit 2 Häusern</div>
				<div class="price">150</div>
				<div class="qty">mit 3 Häusern</div>
				<div class="price">450</div>
				<div class="qty">mit 4 Häusern</div>
				<div class="price">625</div>
			</div>
			<p class="hotel">mit HOTEL $750</p>
			<p class="mortgage">Hypothekenwert $70</p>
			<p class="houses">1 Haus kostet $100</p>
			<p class="hotelCost">1 Hotel kostet $100 plus 4 Häuser</p>
			<p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br />&copy;1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=VI">HYPOTHEK</a>
<a class="verkaufen" href="/verkaufen/index.php?street=VI">VERKAUFEN</a>
		</details>
		</div>
		<div id='VIH'>
                <details class="card">
                        <summary class="property pink">
                                <span class="eyebrow">Hamburg</span>
                                DEICHSTRAßE
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">BELASTET<br />MIT $ 70</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=VI">AUFLÖSEN</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=VI">VERKAUFEN</a>
                </details>
                </div>
		<div id='VII'>
                <details class="card">
                        <summary class="property pink">
                                <span class="eyebrow">Hamburg</span>
                                Heiligengeistfeld
                        </summary>
                        <p class="rent">miete $10.</p>
                        <div class="priceTable">
                                <div class="qty">mit 1 Haus</div>
                                <div class="price">$ 50</div>
                                <div class="qty">mit 2 Häusern</div>
                                <div class="price">150</div>
                                <div class="qty">mit 3 Häusern</div>
                                <div class="price">450</div>
                                <div class="qty">mit 4 Häusern</div>
                                <div class="price">625</div>
                        </div>
                        <p class="hotel">mit HOTEL $750</p>
                        <p class="mortgage">Hypothekenwert $70</p>
                        <p class="houses">1 Haus kostet $100</p>
                        <p class="hotelCost">1 Hotel kostet $100 plus 4 Häuser</p>
                        <p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br />&copy;1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=VII">HYPOTHEK</a>
<a class="verkaufen" href="/verkaufen/index.php?street=VII">VERKAUFEN</a>
                </details>
                </div>
		<div id='VIIH'>
                <details class="card">
                        <summary class="property pink">
                                <span class="eyebrow">Hamburg</span>
                                HEILIGENGEISTFELD
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">BELASTET<br />MIT $ 70</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=VII">AUFLÖSEN</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=VII">VERKAUFEN</a>
                </details>
                </div>
		<div id='VIII'>
                <details class="card">
                        <summary class="property pink">
                                <span class="eyebrow">Hamburg</span>
                                Große Elbstraße
                        </summary>
                        <p class="rent">miete $12.</p>
                        <div class="priceTable">
                                <div class="qty">mit 1 Haus</div>
                                <div class="price">$ 60</div>
                                <div class="qty">mit 2 Häusern</div>
                                <div class="price">180</div>
                                <div class="qty">mit 3 Häusern</div>
                                <div class="price">500</div>
                                <div class="qty">mit 4 Häusern</div>
                                <div class="price">700</div>
                        </div>
                        <p class="hotel">mit HOTEL $900</p>
                        <p class="mortgage">Hypothekenwert $80</p>
                        <p class="houses">1 Haus kostet $100</p>
                        <p class="hotelCost">1 Hotel kostet $100 plus 4 Häuser</p>
                        <p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br />&copy;1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=VIII">HYPOTHEK</a>			
<a class="verkaufen" href="/verkaufen/index.php?street=VIII">VERKAUFEN</a>
                </details>
                </div>
		<div id='VIIIH'>
                <details class="card">
                        <summary class="property pink">
                                <span class="eyebrow">Hamburg</span>
                                GROßE ELBSTRAßE
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">BELASTET<br />MIT $ 80</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=VIII">AUFLÖSEN</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=VIII">VERKAUFEN</a>
                </details>
                </div>
	</details>
	</section>
	</section>
<section>
<section>
<details class="corange">
<summary class="property orange">
				<span class="eyebrow">Hamburg</span>
				ORANGE
			</summary>
	<div id='IX'>
		<details class="card">
			<summary class="property orange">
				<span class="eyebrow">Hamburg</span>
				Kehrwieder
			</summary>
			<p class="rent">miete $14.</p>
			<div class="priceTable">
				<div class="qty">mit 1 Haus</div>
				<div class="price">$ 70</div>
				<div class="qty">mit 2 Häusern</div>
				<div class="price">200</div>
				<div class="qty">mit 3 Häusern</div>
				<div class="price">550</div>
				<div class="qty">mit 4 Häusern</div>
				<div class="price">750</div>
			</div>
			<p class="hotel">mit HOTEL $950</p>
			<p class="mortgage">Hypothekenwert $90</p>
			<p class="houses">1 Haus kostet $100</p>
			<p class="hotelCost">1 Hotel kostet $100 plus 4 Häuser</p>
			<p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br />&copy;1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=IX">HYPOTHEK</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=IX">VERKAUFEN</a>
		</details>
		</div>
		<div id='IXH'>
                <details class="card">
                        <summary class="property orange">
                                <span class="eyebrow">Hamburg</span>
                                KEHRWIEDER
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">BELASTET<br />MIT $ 90</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=IX">AUFLÖSEN</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=IX">VERKAUFEN</a>
                </details>
                </div>
		<div id='X'>
                <details class="card">
                        <summary class="property orange">
                                <span class="eyebrow">Hamburg</span>
                                Krayenkamp
                        </summary>
                        <p class="rent">miete $14.</p>
                        <div class="priceTable">
                                <div class="qty">mit 1 Haus</div>
                                <div class="price">$ 70</div>
                                <div class="qty">mit 2 Häusern</div>
                                <div class="price">200</div>
                                <div class="qty">mit 3 Häusern</div>
                                <div class="price">550</div>
                                <div class="qty">mit 4 Häusern</div>
                                <div class="price">750</div>
                        </div>
                        <p class="hotel">mit HOTEL $950</p>
                        <p class="mortgage">Hypothekenwert $90</p>
                        <p class="houses">1 Haus kostet $100</p>
                        <p class="hotelCost">1 Hotel kostet $100 plus 4 Häuser</p>
                        <p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br />&copy;1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=X">HYPOTHEK</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=X">VERKAUFEN</a>
                </details>
                </div>
		<div id='XH'>
                <details class="card">
                        <summary class="property orange">
                                <span class="eyebrow">Hamburg</span>
                                KRAYENKAMP
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">BELASTET<br />MIT $ 90</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=X">AUFLÖSEN</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=X">VERKAUFEN</a>
                </details>
                </div>
		<div id='XI'>
                <details class="card">
                        <summary class="property orange">
                                <span class="eyebrow">Hamburg</span>
                                Magellanterassen
                        </summary>
                        <p class="rent">miete $16.</p>
                        <div class="priceTable">
                                <div class="qty">mit 1 Haus</div>
                                <div class="price">$ 80</div>
                                <div class="qty">mit 2 Häusern</div>
                                <div class="price">220</div>
                                <div class="qty">mit 3 Häusern</div>
                                <div class="price">600</div>
                                <div class="qty">mit 4 Häusern</div>
                                <div class="price">800</div>
                        </div>
                        <p class="hotel">mit HOTEL $1000</p>
                        <p class="mortgage">Hypothekenwert $100</p>
                        <p class="houses">1 Haus kostet $100</p>
                        <p class="hotelCost">1 Hotel kostet $100 plus 4 Häuser</p>
                        <p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br />&copy;1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=XI">HYPOTHEK</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XI">VERKAUFEN</a>
                </details>
                </div>
                <div id='XIH'>
                <details class="card">
                        <summary class="property orange">
                                <span class="eyebrow">Hamburg</span>
                                MAGELLANTERRASSEN
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">BELASTET<br />MIT $ 100</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=XI">AUFLÖSEN</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XI">VERKAUFEN</a>
                </details>
                </div>
	</details>
	</section>
	</section>
</div>
<div class="table">
<section>
<section>
<details class="cred">
<summary class="property red">
				<span class="eyebrow">Hamburg</span>
				ROT
			</summary>
		<div id='XII'>
		<details class="card">
			<summary class="property red">
				<span class="eyebrow">Hamburg</span>
				Rothenbaumchaussee
			</summary>
			<p class="rent">miete $18.</p>
			<div class="priceTable">
				<div class="qty">mit 1 Haus</div>
				<div class="price">$ 90</div>
				<div class="qty">mit 2 Häusern</div>
				<div class="price">250</div>
				<div class="qty">mit 3 Häusern</div>
				<div class="price">700</div>
				<div class="qty">mit 4 Häusern</div>
				<div class="price">875</div>
			</div>
			<p class="hotel">mit HOTEL $1050</p>
			<p class="mortgage">Hypothekenwert $110</p>
			<p class="houses">1 Haus kostet $150</p>
			<p class="hotelCost">1 Hotel kostet $150 plus 4 Häuser</p>
			<p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br />&copy;1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=XII">HYPOTHEK</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XII">VERKAUFEN</a>
		</details>
		</div>
                <div id='XIIH'>
                <details class="card">
                        <summary class="property red">
                                <span class="eyebrow">Hamburg</span>
                                Rothenbaumchaussee
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">BELASTET<br />MIT $ 110</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=XII">AUFLÖSEN</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XII">VERKAUFEN</a>
                </details>
                </div>
		<div id='XIII'>
                <details class="card">
                        <summary class="property red">
                                <span class="eyebrow">Hamburg</span>
                                GÄNSEMARKT
                        </summary>
                        <p class="rent">miete $18.</p>
                        <div class="priceTable">
                                <div class="qty">mit 1 Haus</div>
                                <div class="price">$ 90</div>
                                <div class="qty">mit 2 Häusern</div>
                                <div class="price">250</div>
                                <div class="qty">mit 3 Häusern</div>
                                <div class="price">700</div>
                                <div class="qty">mit 4 Häusern</div>
                                <div class="price">875</div>
                        </div>
                        <p class="hotel">mit HOTEL $1050</p>
                        <p class="mortgage">Hypothekenwert $110</p>
                        <p class="houses">1 Haus kostet $150</p>
                        <p class="hotelCost">1 Hotel kostet $150 plus 4 Häuser</p>
                        <p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br />&copy;1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=XIII">HYPOTHEK</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XIII">VERKAUFEN</a>
                </details>
                </div>
                <div id='XIIIH'>
                <details class="card">
                        <summary class="property red">
                                <span class="eyebrow">Hamburg</span>
                                GÄNSEMARKT
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">BELASTET<br />MIT $ 110</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=XIII">AUFLÖSEN</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XIII">VERKAUFEN</a>
                </details>
                </div>
		<div id='XIV'>
                <details class="card">
                        <summary class="property red">
                                <span class="eyebrow">Hamburg</span>
                                MÖNCKEBERGSTRAßE
                        </summary>
                        <p class="rent">miete $20.</p>
                        <div class="priceTable">
                                <div class="qty">mit 1 Haus</div>
                                <div class="price">$ 100</div>
                                <div class="qty">mit 2 Häusern</div>
                                <div class="price">300</div>
                                <div class="qty">mit 3 Häusern</div>
                                <div class="price">750</div>
                                <div class="qty">mit 4 Häusern</div>
                                <div class="price">925</div>
                        </div>
                        <p class="hotel">mit HOTEL $1100</p>
                        <p class="mortgage">Hypothekenwert $120</p>
                        <p class="houses">1 Haus kostet $150</p>
                        <p class="hotelCost">1 Hotel kostet $150 plus 4 Häuser</p>
                        <p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br />&copy;1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=XIV">HYPOTHEK</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XIV">VERKAUFEN</a>
                </details>
                </div>
                <div id='XIVH'>
                <details class="card">
                        <summary class="property red">
                                <span class="eyebrow">Hamburg</span>
                                MÖNCKEBERGSTRAßE 
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">BELASTET<br />MIT $ 120</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=XIV">AUFLÖSEN</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XIV">VERKAUFEN</a>
                </details>
                </div>
	</details>
	</section>
	</section>
<section>
<section>
<details class="cyellow">
<summary class="property yellow">
				<span class="eyebrow">Hamburg</span>
				GELB
			</summary>
		<div id='XV'>
		<details class="card">
			<summary class="property yellow">
				<span class="eyebrow">Hamburg</span>
				GROßE BLEICHEN
			</summary>
			<p class="rent">miete $22.</p>
			<div class="priceTable">
				<div class="qty">mit 1 Haus</div>
				<div class="price">$ 110</div>
				<div class="qty">mit 2 Häusern</div>
				<div class="price">330</div>
				<div class="qty">mit 3 Häusern</div>
				<div class="price">800</div>
				<div class="qty">mit 4 Häusern</div>
				<div class="price">975</div>
			</div>
			<p class="hotel">mit HOTEL $1150</p>
			<p class="mortgage">Hypothekenwert $130</p>
			<p class="houses">1 Haus kostet $150</p>
			<p class="hotelCost">1 Hotel kostet $150 plus 4 Häuser</p>
			<p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br />&copy;1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=XV">HYPOTHEK</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XV">VERKAUFEN</a>
		</details>
		</div>
                <div id='XVH'>
                <details class="card">
                        <summary class="property yellow">
                                <span class="eyebrow">Hamburg</span>
                                GROßE BLEICHEN
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">BELASTET<br />MIT $ 130</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=XV">AUFLÖSEN</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XV">VERKAUFEN</a>
                </details>
                </div>
		<div id='XVI'>
                <details class="card">
                        <summary class="property yellow">
                                <span class="eyebrow">Hamburg</span>
                                Neuer Wall
                        </summary>
                        <p class="rent">miete $22.</p>
                        <div class="priceTable">
                                <div class="qty">mit 1 Haus</div>
                                <div class="price">$ 110</div>
                                <div class="qty">mit 2 Häusern</div>
                                <div class="price">330</div>
                                <div class="qty">mit 3 Häusern</div>
                                <div class="price">800</div>
                                <div class="qty">mit 4 Häusern</div>
                                <div class="price">975</div>
                        </div>
                        <p class="hotel">mit HOTEL $1150</p>
                        <p class="mortgage">Hypothekenwert $130</p>
                        <p class="houses">1 Haus kostet $150</p>
                        <p class="hotelCost">1 Hotel kostet $150 plus 4 Häuser</p>
                        <p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br />&copy;1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=XVI">HYPOTHEK</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XVI">VERKAUFEN</a>
                </details>
                </div>
                <div id='XVIH'>
                <details class="card">
                        <summary class="property yellow">
                                <span class="eyebrow">Hamburg</span>
                                NEUER WALL
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">BELASTET<br />MIT $ 130</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=XVI">AUFLÖSEN</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XVI">VERKAUFEN</a>
                </details>
                </div>
		<div id='XVII'>
                <details class="card">
                        <summary class="property yellow">
                                <span class="eyebrow">Hamburg</span>
                                Ballindamm
                        </summary>
                        <p class="rent">miete $24.</p>
                        <div class="priceTable">
                                <div class="qty">mit 1 Haus</div>
                                <div class="price">$ 120</div>
                                <div class="qty">mit 2 Häusern</div>
                                <div class="price">360</div>
                                <div class="qty">mit 3 Häusern</div>
                                <div class="price">850</div>
                                <div class="qty">mit 4 Häusern</div>
                                <div class="price">1025</div>
                        </div>
                        <p class="hotel">mit HOTEL $1200</p>
                        <p class="mortgage">Hypothekenwert $140</p>
                        <p class="houses">1 Haus kostet $150</p>
                        <p class="hotelCost">1 Hotel kostet $150 plus 4 Häuser</p>
                        <p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br />&copy;1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=XVII">HYPOTHEK</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XVII">VERKAUFEN</a>
                </details>
                </div>
                <div id='XVIIH'>
                <details class="card">
                        <summary class="property yellow">
                                <span class="eyebrow">Hamburg</span>
                                BALLINDAMM
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">BELASTET<br />MIT $ 140</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=XVII">AUFLÖSEN</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XVII">VERKAUFEN</a>
                </details>
                </div>
	</details>
	</section>
	</section>
</div>
<div class="table">
<section>
<section>
<details class="cgreen">
<summary class="property green">
				<span class="eyebrow">Hamburg</span>
				GRÜN
			</summary>
		<div id='XXIV'>
		<details class="card">
			<summary class="property green">
				<span class="eyebrow">Hamburg</span>
				RATHAUSMARKT
			</summary>
			<p class="rent">miete $26.</p>
			<div class="priceTable">
				<div class="qty">mit 1 Haus</div>
				<div class="price">$ 130</div>
				<div class="qty">mit 2 Häusern</div>
				<div class="price">390</div>
				<div class="qty">mit 3 Häusern</div>
				<div class="price">900</div>
				<div class="qty">mit 4 Häusern</div>
				<div class="price">1100</div>
			</div>
			<p class="hotel">mit HOTEL $1275</p>
			<p class="mortgage">Hypothekenwert $150</p>
			<p class="houses">1 Haus kostet $200</p>
			<p class="hotelCost">1 Hotel kostet $200 plus 4 Häuser</p>
			<p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br />&copy;1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=XXIV">HYPOTHEK</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XXIV">VERKAUFEN</a>
		</details>
		</div>
                <div id='XXIVH'>
                <details class="card">
                        <summary class="property green">
                                <span class="eyebrow">Hamburg</span>
                                RATHAUSMARKT
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">BELASTET<br />MIT $ 150</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=XXIV">AUFLÖSEN</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XXIV">VERKAUFEN</a>
                </details>
                </div>
		<div id='XXV'>
                <details class="card">
                        <summary class="property green">
                                <span class="eyebrow">Hamburg</span>
                                ALSTERARKADEN
                        </summary>
                        <p class="rent">miete $26.</p>
                        <div class="priceTable">
                                <div class="qty">mit 1 Haus</div>
                                <div class="price">$ 130</div>
                                <div class="qty">mit 2 Häusern</div>
                                <div class="price">390</div>
                                <div class="qty">mit 3 Häusern</div>
                                <div class="price">900</div>
                                <div class="qty">mit 4 Häusern</div>
                                <div class="price">1100</div>
                        </div>
                        <p class="hotel">mit HOTEL $1275</p>
                        <p class="mortgage">Hypothekenwert $150</p>
                        <p class="houses">1 Haus kostet $200</p>
                        <p class="hotelCost">1 Hotel kostet $200 plus 4 Häuser</p>
                        <p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br />&copy;1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=XXV">HYPOTHEK</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XXV">VERKAUFEN</a>
                </details>
                </div>
                <div id='XXVH'>
                <details class="card">
                        <summary class="property green">
                                <span class="eyebrow">Hamburg</span>
                                ALSTERARKADEN
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">BELASTET<br />MIT $ 150</p>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XXV">VERKAUFEN</a>
                </details>
                </div>
		<div id='XXVI'>
                <details class="card">
                        <summary class="property green">
                                <span class="eyebrow">Hamburg</span>
                                JUNGFERNSTIEG
                        </summary>
                        <p class="rent">miete $28.</p>
                        <div class="priceTable">
                                <div class="qty">mit 1 Haus</div>
                                <div class="price">$ 150</div>
                                <div class="qty">mit 2 Häusern</div>
                                <div class="price">450</div>
                                <div class="qty">mit 3 Häusern</div>
                                <div class="price">1000</div>
                                <div class="qty">mit 4 Häusern</div>
                                <div class="price">1200</div>
                        </div>
                        <p class="hotel">mit HOTEL $1400</p>
                        <p class="mortgage">Hypothekenwert $160</p>
                        <p class="houses">1 Haus kostet $200</p>
                        <p class="hotelCost">1 Hotel kostet $200 plus 4 Häuser</p>
                        <p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br />&copy;1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=XXVI">HYPOTHEK</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XXVI">VERKAUFEN</a>
                </details>
                </div>
                <div id='XXVIH'>
                <details class="card">
                        <summary class="property green">
                                <span class="eyebrow">Hamburg</span>
                                JUNGFERNSTIEG
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">BELASTET<br />MIT $ 160</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=XXVI">AUFLÖSEN</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XXVI">VERKAUFEN</a>
                </details>
                </div>
	</details>
	</section>
	</section>
	<section>
	<section>
	<details class="cblue">
	<summary class="property blue">
				<span class="eyebrow">Hamburg</span>
				BLAU
			</summary>
		<div id='XVIII'>
		<details class="card">
			<summary class="property blue">
				<span class="eyebrow">Hamburg</span>
				SCHÖNE AUSSICHT
			</summary>
			<p class="rent">miete $35.</p>
			<div class="priceTable">
				<div class="qty">mit 1 Haus</div>
				<div class="price">$ 175</div>
				<div class="qty">mit 2 Häusern</div>
				<div class="price">500</div>
				<div class="qty">mit 3 Häusern</div>
				<div class="price">1100</div>
				<div class="qty">mit 4 Häusern</div>
				<div class="price">1300</div>
			</div>
			<p class="hotel">mit HOTEL $1500</p>
			<p class="mortgage">Hypothekenwert $175</p>
			<p class="houses">1 Haus kostet $200</p>
			<p class="hotelCost">1 Hotel kostet $200 plus 4 Häuser</p>
			<p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br />&copy;1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=XVIII">HYPOTHEK</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XVIII">VERKAUFEN</a>
		</details>
		</div>
                <div id='XVIIIH'>
                <details class="card">
                        <summary class="property blue">
                                <span class="eyebrow">Hamburg</span>
                                SCHÖNE AUSSICHT
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">BELASTET<br />MIT $ 175</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=XVIII">AUFLÖSEN</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XVIII">VERKAUFEN</a>
                </details>
                </div>
		<div id='XIX'>
                <details class="card">
                        <summary class="property blue">
                                <span class="eyebrow">Hamburg</span>
                                ELBCHAUSSEE
                        </summary>
                        <p class="rent">miete $50.</p>
                        <div class="priceTable">
                                <div class="qty">mit 1 Haus</div>
                                <div class="price">$ 200</div>
                                <div class="qty">mit 2 Häusern</div>
                                <div class="price">600</div>
                                <div class="qty">mit 3 Häusern</div>
                                <div class="price">1400</div>
                                <div class="qty">mit 4 Häusern</div>
                                <div class="price">1700</div>
                        </div>
                        <p class="hotel">mit HOTEL $2000</p>
                        <p class="mortgage">Hypothekenwert $200</p>
                        <p class="houses">1 Haus kostet $200</p>
                        <p class="hotelCost">1 Hotel kostet $200 plus 4 Häuser</p>
                        <p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br>©1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=XIX">HYPOTHEK</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XIX">VERKAUFEN</a>
                </details>
                </div>
                <div id='XIXH'>
                <details class="card">
                        <summary class="property blue">
                                <span class="eyebrow">Hamburg</span>
                                ELBCHAUSSEE
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">BELASTET<br />MIT $ 200</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=XIX">AUFLÖSEN</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XIX">VERKAUFEN</a>
                </details>
                </div>
	</details>
	</section>
	</section>
</div>

<div class="table">
	<section>
	<section>
	<details class="cgrey">
	<summary class="property grey">
				<span class="eyebrow">Hamburg</span>
				VERKEHRSMITTEL
			</summary>
		<div id='XX'>
		<details class="card">
			<summary class="property grey">
				<span class="eyebrow">Hamburg</span>
				HAUPTBAHNHOF
			</summary>
			<p class="rent"></p>
			<div class="priceTable" style="width: 95%;">
				<div class="qtyg" style="margin-bottom: 4%;">Miete</div>
				<div class="priceg" style="margin-bottom: 4%;">$ 25</div>
				<div class="qtyg" style="margin-bottom: 2%;">Wenn man 2 Verkehrsmittel besitzt</div>
				<div class="priceg" style="margin-bottom: 2%;">$ 50</div>
				<div class="qtyg" style="margin-bottom: 2%;">Wenn man 3 Verkehrsmittel besitzt</div>
				<div class="priceg" style="margin-bottom: 2%;">$ 100</div>
				<div class="qtyg" style="margin-bottom: 2%;">Wenn man 4 Verkehrsmittel besitzt</div>
				<div class="priceg" style="margin-bottom: 2%;">$ 200</div>
			</div>
			<p class="mortgagew">Hypothekenwert $100</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=XX">HYPOTHEK</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XX">VERKAUFEN</a>
		</details>
		</div>
                <div id='XXH'>
                <details class="card">
                        <summary class="property grey">
                                <span class="eyebrow">Hamburg</span>
                                HAUPTBAHNHOF
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">BELASTET<br />MIT $ 100</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=XX">AUFLÖSEN</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XX">VERKAUFEN</a>
                </details>
                </div>
		<div id='XXI'>
                <details class="card">
                        <summary class="property grey">
                                <span class="eyebrow">Hamburg</span>
                                HAMBURG AIRPORT
                        </summary>
                        <p class="rent"></p>
<div class="priceTable" style="width: 95%;">
                                <div class="qtyg" style="margin-bottom: 4%;">Miete</div>
                                <div class="priceg" style="margin-bottom: 4%;">$ 25</div>
                                <div class="qtyg" style="margin-bottom: 2%;">Wenn man 2 Verkehrsmittel besitzt</div>
                                <div class="priceg" style="margin-bottom: 2%;">$ 50</div>
                                <div class="qtyg" style="margin-bottom: 2%;">Wenn man 3 Verkehrsmittel besitzt</div>
                                <div class="priceg" style="margin-bottom: 2%;">$ 100</div>
                                <div class="qtyg" style="margin-bottom: 2%;">Wenn man 4 Verkehrsmittel besitzt</div>
                                <div class="priceg" style="margin-bottom: 2%;">$ 200</div>
                        </div>
                        <p class="mortgagew">Hypothekenwert $100</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=XXI">HYPOTHEK</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XXI">VERKAUFEN</a>
                </details>
</div>
                <div id='XXIH'>
                <details class="card">
                        <summary class="property grey">
                                <span class="eyebrow">Hamburg</span>
                                HAMBURG AIRPORT
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">BELASTET<br />MIT $ 100</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=XXI">AUFLÖSEN</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XXI">VERKAUFEN</a>
                </details>
                </div>
		<div id='XXII'>
                <details class="card">
                        <summary class="property grey">
                                <span class="eyebrow">Hamburg</span>
                                HAMBURG DAMMTOR
                        </summary>
                        <p class="rent"></p>
<div class="priceTable" style="width: 95%;">
                                <div class="qtyg" style="margin-bottom: 4%;">Miete</div>
                                <div class="priceg" style="margin-bottom: 4%;">$ 25</div>
                                <div class="qtyg" style="margin-bottom: 2%;">Wenn man 2 Verkehrsmittel besitzt</div>
                                <div class="priceg" style="margin-bottom: 2%;">$ 50</div>
                                <div class="qtyg" style="margin-bottom: 2%;">Wenn man 3 Verkehrsmittel besitzt</div>
                                <div class="priceg" style="margin-bottom: 2%;">$ 100</div>
                                <div class="qtyg" style="margin-bottom: 2%;">Wenn man 4 Verkehrsmittel besitzt</div>
                                <div class="priceg" style="margin-bottom: 2%;">$ 200</div>
                        </div>
                        <p class="mortgagew">Hypothekenwert $100</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=XXII">HYPOTHEK</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XXII">VERKAUFEN</a>
                </details>
                </div>
                <div id='XXIIH'>
                <details class="card">
                        <summary class="property grey">
                                <span class="eyebrow">Hamburg</span>
                                HAMBURG DAMMTOR
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">BELASTET<br />MIT $ 100</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=XXII">AUFLÖSEN</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XXII">VERKAUFEN</a>
                </details>
                </div>
	<div id='XXIII'>
                <details class="card">
                        <summary class="property grey">
                                <span class="eyebrow">Hamburg</span>
                                ZOB HAMBURG
                        </summary>
                        <p class="rent"></p>
<div class="priceTable" style="width: 95%;">
                                <div class="qtyg" style="margin-bottom: 4%;">Miete</div>
                                <div class="priceg" style="margin-bottom: 4%;">$ 25</div>
                                <div class="qtyg" style="margin-bottom: 2%;">Wenn man 2 Verkehrsmittel besitzt</div>
                                <div class="priceg" style="margin-bottom: 2%;">$ 50</div>
                                <div class="qtyg" style="margin-bottom: 2%;">Wenn man 3 Verkehrsmittel besitzt</div>
                                <div class="priceg" style="margin-bottom: 2%;">$ 100</div>
                                <div class="qtyg" style="margin-bottom: 2%;">Wenn man 4 Verkehrsmittel besitzt</div>
                                <div class="priceg" style="margin-bottom: 2%;">$ 200</div>
                        </div>
                        <p class="mortgagew">Hypothekenwert $100</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=XXIII">HYPOTHEK</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XXIII">VERKAUFEN</a>
                </details>
</div>
                <div id='XXIIIH'>
                <details class="card">
                        <summary class="property grey">
                                <span class="eyebrow">Hamburg</span>
                                ZOB HAMBURG
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">BELASTET<br />MIT $ 100</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=XXIII">AUFLÖSEN</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XXIII">VERKAUFEN</a>
                </details>
                </div>
	</details>
	</section>
	</section>
<section>
        <section>
        <details class="cwhite">
        <summary class="property white">
                                <span class="eyebrow">Hamburg</span>
                                VERSORGUNGSWERK
                        </summary>
                <div id='XXVII'>
                <details class="card">
                        <summary class="property white">
                                <span class="eyebrow">Hamburg</span>
                                HAMBURG WASSER
                        </summary>
                        <p class="rent"></p>
                        <div class="priceTable"></div>
                        <p class="Versorgungswerk"><br />Wenn man ein Versorgungswerk<br />besitzt, ist die Miete 4-mal so hoch<br />wie der Würfelwurf Augen hat.<br /> <br />Wenn man beide Versorgungswerke<br />besitzt, ist die Miete 10-mal so hoch<br />wie der Würfelwurf Augen hat.</p><br />
                        <p class="mortgagew">Hypothekenwert $75</p><br />
                        <a class="verkaufenh" href="/hypothek/index.php?hname=XXVII">HYPOTHEK</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XXVII">VERKAUFEN</a>
                </details>
                </div>
		<div id='XXVIIH'>
                <details class="card">
                        <summary class="property white">
                                <span class="eyebrow">Hamburg</span>
                                HAMBURG WASSER
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">BELASTET<br />MIT $ 75</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=XXVII">AUFLÖSEN</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XXVII">VERKAUFEN</a>
                </details>
                </div>
<div id='XXVIII'>
                <details class="card">
                        <summary class="property white">
                                <span class="eyebrow">Hamburg</span>
                                HAMBURG ENERGIE
                        </summary>
                        <p class="rent"></p>
                        <div class="priceTable"></div>
                        <p class="Versorgungswerk"><br />Wenn man ein Versorgungswerk<br />besitzt, ist die Miete 4-mal so hoch<br />wie der Würfelwurf Augen hat.<br /> <br />Wenn man beide Versorgungswerke<br />besitzt, ist die Miete 10-mal so hoch<br />wie der Würfelwurf Augen hat.</p><br />
                        <p class="mortgagew">Hypothekenwert $75</p><br />
                        <a class="verkaufenh" href="/hypothek/index.php?hname=XXVIII">HYPOTHEK</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XXVIII">VERKAUFEN</a>
                </details>
                </div>
                <div id='XXVIIIH'>
                <details class="card">
                        <summary class="property white">
                                <span class="eyebrow">Hamburg</span>
                                HAMBURG ENERGIE
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">BELASTET<br />MIT $ 75</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=XXVIII">AUFLÖSEN</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XXVIII">VERKAUFEN</a>
                </details>
                </div>
        </details>
        </section>
        </section>
</div>
		</div>
    <div lang="en">
		<!-- <div class="Value"><?php echo("You have " . $_COOKIE["Value"] . "$");?></div> -->
<div class="table">
	<section><section>
    <details class="clila">
    <summary class="property purple">
				<span class="eyebrow">Hamburg</span>
				PURPLE
			</summary>
		<div id='I'>
		<details class="card">
			<summary class="property purple">
				<span class="eyebrow">Hamburg</span>
				GROßE FREIHEIT
			</summary>
			<p class="rent">rent $2.</p>
			<div class="priceTable">
				<div class="qty">with 1 House</div>
				<div class="price">$ 10</div>
				<div class="qty">with 2 Houses</div>
				<div class="price">30</div>
				<div class="qty">with 3 Houses</div>
				<div class="price">90</div>
				<div class="qty">with 4 Houses</div>
				<div class="price">160</div>
			</div>
			<p class="hotel">With HOTEL $250.</p>
			<p class="mortgage">Mortage Value $30.</p>
			<p class="houses">Houses cost $50. each</p>
			<p class="hotelCost">Hotels, $50. plus 4 houses</p>
			<p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br />&copy;1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=I">MORTAGE</a>
			<a class="verkaufen" href="/verkaufen/index.php?street=I">SELL</a>
		</details>
		</div>
                <div id='IH'>
                <details class="card">
                        <summary class="property purple">
                                <span class="eyebrow">Hamburg</span>
                                GROßE FREIHEIT
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">MORTAGED<br />FOR $ 30</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=I">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=I">SELL</a>
                </details>
                </div>
		<div id='II'>
                <details class="card">
                        <summary class="property purple">
                                <span class="eyebrow">Hamburg</span>
                                REEPERBAHN
                        </summary>
                        <p class="rent">rent $4.</p>
                        <div class="priceTable">
                                <div class="qty">with 1 house</div>
                                <div class="price">$ 20</div>
                                <div class="qty">with 2 houses</div>
                                <div class="price">60</div>
                                <div class="qty">with 3 houses</div>
                                <div class="price">180</div>
                                <div class="qty">with 4 houses</div>
                                <div class="price">320</div>
                        </div>
                        <p class="hotel">With HOTEL $450</p>
                        <p class="mortgage">Mortage Value $30.</p>
                        <p class="houses">Houses cost $50. each</p>
                        <p class="hotelCost">Hotels, $50 plus 4 houses</p>
                        <p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br>©1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=II">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=II">SELL</a>
		</details>
                </div>
                <div id='IIH'>
                <details class="card">
                        <summary class="property purple">
                                <span class="eyebrow">Hamburg</span>
                                REEPERBAHN
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">MORTAGED<br />FOR $ 30</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=II">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=II">SELL</a>
                </details>
	</section>
    
</section>
<section>
<section>
<details class="clightblue">
<summary class="property lightblue">
				<span class="eyebrow">Hamburg</span>
				LIGHTBLUE
			</summary>
		<div id='III'>
		<details class="card">
			<summary class="property lightblue">
				<span class="eyebrow">Hamburg</span>
				SYLVESTERALLEE
			</summary>
			<p class="rent">rent $6.</p>
			<div class="priceTable">
				<div class="qty">with 1 House</div>
				<div class="price">$ 30</div>
				<div class="qty">with 2 Houses</div>
				<div class="price">90</div>
				<div class="qty">with 3 Houses</div>
				<div class="price">270</div>
				<div class="qty">with 4 Houses</div>
				<div class="price">400</div>
			</div>
			<p class="hotel">With HOTEL $550.</p>
			<p class="mortgage">Mortgage value $50.</p>
			<p class="houses">Houses cost $50. each</p>
			<p class="hotelCost">Hotels, $50. plus 4 houses</p>
			<p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br />&copy;1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=III">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=III">SELL</a>
		</details>
		</div>
                <div id='IIIH'>
                <details class="card">
                        <summary class="property lightblue">
                                <span class="eyebrow">Hamburg</span>
                                SYLVESTERALLEE
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">MORTAGED<br />FOR $ 50</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=III">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=III">SELL</a>
			</details>
			</div>
		<div id='IV'>
                <details class="card">
                        <summary class="property lightblue">
                                <span class="eyebrow">Hamburg</span>
                                HINDENBURGSTRAßE
                        </summary>
                        <p class="rent">rent $6.</p>
                        <div class="priceTable">
                                <div class="qty">with 1 House</div>
                                <div class="price">$ 30</div>
                                <div class="qty">with 2 Houses</div>
                                <div class="price">90</div>
                                <div class="qty">with 3 Houses</div>
                                <div class="price">270</div>
                                <div class="qty">with 4 Houses</div>
                                <div class="price">400</div>
                        </div>
                        <p class="hotel">With HOTEL $550.</p>
                        <p class="mortgage">Mortgage value $50.</p>
                        <p class="houses">Houses cost $50. each</p>
                        <p class="hotelCost">Hotels, $50. plus 4 houses</p>
                        <p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br>©1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=IV">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=IV">SELL</a>
                </details>
                </div>
		<div id='IVH'>
                <details class="card">
                        <summary class="property lightblue">
                                <span class="eyebrow">Hamburg</span>
                                HINDENBURGSTRAßE
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">MORTAGED<br />FOR $ 50</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=IV">AUFLÖSEN</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=IV">VERKAUFEN</a>
                        </details>
                        </div>
		<div id='V'>
                <details class="card">
                        <summary class="property lightblue">
                                <span class="eyebrow">Hamburg</span>
                                HAGENBECK
                        </summary>
                        <p class="rent">rent $8.</p>
                        <div class="priceTable">
                                <div class="qty">with 1 House</div>
                                <div class="price">$ 40</div>
                                <div class="qty">with 2 Houses</div>
                                <div class="price">100</div>
                                <div class="qty">with 3 Houses</div>
                                <div class="price">300</div>
                                <div class="qty">with 4 Houses</div>
                                <div class="price">450</div>
                        </div>
                        <p class="hotel">mit HOTEL $600</p>
                        <p class="mortgage">Mortgage value $60.</p>
                        <p class="houses">Houses cost $50. each</p>
                        <p class="hotelCost">Hotels, $50. plus 4 houses</p>
                        <p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br>©1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=V">MORTAGE</a>
<a class="verkaufen" href="/verkaufen/index.php?street=V">SELL</a>
                </details>
                </div>
                <div id='VH'>
                <details class="card">
                        <summary class="property lightblue">
                                <span class="eyebrow">Hamburg</span>
                                HAGENBECK
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">MORTAGED<br />FOR $ 60</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=V">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=V">SELL</a>
                </details>
		</div>
	</section>
	</section>
</div>
<div class="table">
<section>
<section>
<details class="cpink">
<summary class="property pink">
				<span class="eyebrow">Hamburg</span>
				PINK
			</summary>
		<div id='VI'>
		<details class="card">
			<summary class="property pink">
				<span class="eyebrow">Hamburg</span>
				Deichstraße
			</summary>
			<p class="rent">rent $10.</p>
			<div class="priceTable">
				<div class="qty">with 1 House</div>
				<div class="price">$ 50</div>
				<div class="qty">with 2 Houses</div>
				<div class="price">150</div>
				<div class="qty">with 3 Houses</div>
				<div class="price">450</div>
				<div class="qty">with 4 Houses</div>
				<div class="price">625</div>
			</div>
			<p class="hotel">With HOTEL $750.</p>
			<p class="mortgage">Mortgage value $70.</p>
			<p class="houses">Houses cost $100. each</p>
			<p class="hotelCost">Hotels, $100. plus 4 houses</p>
			<p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br />&copy;1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=VI">MORTAGE</a>
<a class="verkaufen" href="/verkaufen/index.php?street=VI">SELL</a>
		</details>
		</div>
		<div id='VIH'>
                <details class="card">
                        <summary class="property pink">
                                <span class="eyebrow">Hamburg</span>
                                DEICHSTRAßE
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">MORTAGED<br />FOR $ 70</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=VI">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=VI">SELL</a>
                </details>
                </div>
		<div id='VII'>
                <details class="card">
                        <summary class="property pink">
                                <span class="eyebrow">Hamburg</span>
                                Heiligengeistfeld
                        </summary>
                        <p class="rent">rent $10.</p>
                        <div class="priceTable">
                                <div class="qty">with 1 House</div>
                                <div class="price">$ 50</div>
                                <div class="qty">with 2 Houses</div>
                                <div class="price">150</div>
                                <div class="qty">with 3 Houses</div>
                                <div class="price">450</div>
                                <div class="qty">with 4 Houses</div>
                                <div class="price">625</div>
                        </div>
                        <p class="hotel">With HOTEL $750.</p>
                        <p class="mortgage">Mortgage value $70.</p>
                        <p class="houses">Houses cost $100. each</p>
                        <p class="hotelCost">Hotels, $100. plus 4 houses</p>
                        <p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br />&copy;1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=VII">MORTAGE</a>
<a class="verkaufen" href="/verkaufen/index.php?street=VII">SELL</a>
                </details>
                </div>
		<div id='VIIH'>
                <details class="card">
                        <summary class="property pink">
                                <span class="eyebrow">Hamburg</span>
                                HEILIGENGEISTFELD
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">MORTAGED<br />FOR $ 70</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=VII">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=VII">SELL</a>
                </details>
                </div>
		<div id='VIII'>
                <details class="card">
                        <summary class="property pink">
                                <span class="eyebrow">Hamburg</span>
                                Große Elbstraße
                        </summary>
                        <p class="rent">rent $12.</p>
                        <div class="priceTable">
                                <div class="qty">with 1 House</div>
                                <div class="price">$ 60</div>
                                <div class="qty">with 2 Houses</div>
                                <div class="price">180</div>
                                <div class="qty">with 3 Houses</div>
                                <div class="price">500</div>
                                <div class="qty">with 4 Houses</div>
                                <div class="price">700</div>
                        </div>
                        <p class="hotel">With HOTEL $900.</p>
                        <p class="mortgage">Mortgage value $80.</p>
                        <p class="houses">Houses cost $100. each</p>
                        <p class="hotelCost">Hotels, $100. plus 4 houses</p>
                        <p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br />&copy;1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=VIII">MORTAGE</a>			
<a class="verkaufen" href="/verkaufen/index.php?street=VIII">SELL</a>
                </details>
                </div>
		<div id='VIIIH'>
                <details class="card">
                        <summary class="property pink">
                                <span class="eyebrow">Hamburg</span>
                                GROßE ELBSTRAßE
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">MORTAGED<br />FOR $ 80</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=VIII">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=VIII">SELL</a>
                </details>
                </div>
	</details>
	</section>
	</section>
<section>
<section>
<details class="corange">
<summary class="property orange">
				<span class="eyebrow">Hamburg</span>
				ORANGE
			</summary>
	<div id='IX'>
		<details class="card">
			<summary class="property orange">
				<span class="eyebrow">Hamburg</span>
				Kehrwieder
			</summary>
			<p class="rent">rent $14.</p>
			<div class="priceTable">
				<div class="qty">with 1 House</div>
				<div class="price">$ 70</div>
				<div class="qty">with 2 Houses</div>
				<div class="price">200</div>
				<div class="qty">with 3 Houses</div>
				<div class="price">550</div>
				<div class="qty">with 4 Houses</div>
				<div class="price">750</div>
			</div>
			<p class="hotel">With HOTEL $950.</p>
			<p class="mortgage">Mortgage value $90.</p>
			<p class="houses">Houses cost $100. each</p>
			<p class="hotelCost">Hotels, $100. plus 4 houses</p>
			<p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br />&copy;1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=IX">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=IX">SELL</a>
		</details>
		</div>
		<div id='IXH'>
                <details class="card">
                        <summary class="property orange">
                                <span class="eyebrow">Hamburg</span>
                                KEHRWIEDER
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">MORTAGED<br />FOR $ 90</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=IX">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=IX">SELL</a>
                </details>
                </div>
		<div id='X'>
                <details class="card">
                        <summary class="property orange">
                                <span class="eyebrow">Hamburg</span>
                                Krayenkamp
                        </summary>
                        <p class="rent">rent $14.</p>
                        <div class="priceTable">
                                <div class="qty">with 1 House</div>
                                <div class="price">$ 70</div>
                                <div class="qty">with 2 Houses</div>
                                <div class="price">200</div>
                                <div class="qty">with 3 Houses</div>
                                <div class="price">550</div>
                                <div class="qty">with 4 Houses</div>
                                <div class="price">750</div>
                        </div>
                        <p class="hotel">With HOTEL $950.</p>
                        <p class="mortgage">Mortgage value $90.</p>
                        <p class="houses">Houses cost $100. each</p>
                        <p class="hotelCost">Hotels, $100. plus 4 houses</p>
                        <p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br />&copy;1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=X">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=X">SELL</a>
                </details>
                </div>
		<div id='XH'>
                <details class="card">
                        <summary class="property orange">
                                <span class="eyebrow">Hamburg</span>
                                KRAYENKAMP
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">MORTAGED<br />FOR $ 90</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=X">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=X">SELL</a>
                </details>
                </div>
		<div id='XI'>
                <details class="card">
                        <summary class="property orange">
                                <span class="eyebrow">Hamburg</span>
                                Magellanterassen
                        </summary>
                        <p class="rent">rent $16.</p>
                        <div class="priceTable">
                                <div class="qty">with 1 House</div>
                                <div class="price">$ 80</div>
                                <div class="qty">with 2 Houses</div>
                                <div class="price">220</div>
                                <div class="qty">with 3 Houses</div>
                                <div class="price">600</div>
                                <div class="qty">with 4 Houses</div>
                                <div class="price">800</div>
                        </div>
                        <p class="hotel">With HOTEL $1000.</p>
                        <p class="mortgage">Mortgage value $100.</p>
                        <p class="houses">Houses cost $100. each</p>
                        <p class="hotelCost">Hotels, $100. plus 4 houses</p>
                        <p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br />&copy;1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=XI">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XI">SELL</a>
                </details>
                </div>
                <div id='XIH'>
                <details class="card">
                        <summary class="property orange">
                                <span class="eyebrow">Hamburg</span>
                                MAGELLANTERRASSEN
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">MORTAGED<br />FOR $ 100</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=XI">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XI">SELL</a>
                </details>
                </div>
	</details>
	</section>
	</section>
</div>
<div class="table">
<section>
<section>
<details class="cred">
<summary class="property red">
				<span class="eyebrow">Hamburg</span>
				RED
			</summary>
		<div id='XII'>
		<details class="card">
			<summary class="property red">
				<span class="eyebrow">Hamburg</span>
				Rothenbaumchaussee
			</summary>
			<p class="rent">rent $18.</p>
			<div class="priceTable">
				<div class="qty">with 1 House</div>
				<div class="price">$ 90</div>
				<div class="qty">with 2 Houses</div>
				<div class="price">250</div>
				<div class="qty">with 3 Houses</div>
				<div class="price">700</div>
				<div class="qty">with 4 Houses</div>
				<div class="price">875</div>
			</div>
			<p class="hotel">With HOTEL $1050.</p>
			<p class="mortgage">Mortgage value $110.</p>
			<p class="houses">Houses cost $150. each</p>
			<p class="hotelCost">Hotels, $150. plus 4 houses</p>
			<p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br />&copy;1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=XII">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XII">SELL</a>
		</details>
		</div>
                <div id='XIIH'>
                <details class="card">
                        <summary class="property red">
                                <span class="eyebrow">Hamburg</span>
                                Rothenbaumchaussee
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">MORTAGED<br />FOR $ 110</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=XII">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XII">SELL</a>
                </details>
                </div>
		<div id='XIII'>
                <details class="card">
                        <summary class="property red">
                                <span class="eyebrow">Hamburg</span>
                                GÄNSEMARKT
                        </summary>
                        <p class="rent">rent $18.</p>
                        <div class="priceTable">
                                <div class="qty">with 1 House</div>
                                <div class="price">$ 90</div>
                                <div class="qty">with 2 Houses</div>
                                <div class="price">250</div>
                                <div class="qty">with 3 Houses</div>
                                <div class="price">700</div>
                                <div class="qty">with 4 Houses</div>
                                <div class="price">875</div>
                        </div>
                        <p class="hotel">With HOTEL $1050.</p>
                        <p class="mortgage">Mortage Value $110.</p>
                        <p class="houses">Hotels, $150. plus 4 houses</p>
                        <p class="hotelCost">1 Hotel kostet $150 plus 4 Häuser</p>
                        <p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br />&copy;1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=XIII">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XIII">DELL</a>
                </details>
                </div>
                <div id='XIIIH'>
                <details class="card">
                        <summary class="property red">
                                <span class="eyebrow">Hamburg</span>
                                GÄNSEMARKT
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">MORTAGED<br />FOR $ 110</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=XIII">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XIII">SELL</a>
                </details>
                </div>
		<div id='XIV'>
                <details class="card">
                        <summary class="property red">
                                <span class="eyebrow">Hamburg</span>
                                MÖNCKEBERGSTRAßE
                        </summary>
                        <p class="rent">rent $20.</p>
                        <div class="priceTable">
                                <div class="qty">with 1 House</div>
                                <div class="price">$ 100</div>
                                <div class="qty">with 2 Houses</div>
                                <div class="price">300</div>
                                <div class="qty">with 3 Houses</div>
                                <div class="price">750</div>
                                <div class="qty">with 4 Houses</div>
                                <div class="price">925</div>
                        </div>
                        <p class="hotel">With HOTEL $1100.</p>
                        <p class="mortgage">Mortage Value $120.</p>
                        <p class="houses">Houses cost $150. each</p>
                        <p class="hotelCost">Hotels, $150. plus 4 houses</p>
                        <p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br />&copy;1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=XIV">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XIV">SELL</a>
                </details>
                </div>
                <div id='XIVH'>
                <details class="card">
                        <summary class="property red">
                                <span class="eyebrow">Hamburg</span>
                                MÖNCKEBERGSTRAßE 
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">MORTAGED<br />FOR $ 120</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=XIV">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XIV">SELL</a>
                </details>
                </div>
	</details>
	</section>
	</section>
<section>
<section>
<details class="cyellow">
<summary class="property yellow">
				<span class="eyebrow">Hamburg</span>
				YELLOW
			</summary>
		<div id='XV'>
		<details class="card">
			<summary class="property yellow">
				<span class="eyebrow">Hamburg</span>
				GROßE BLEICHEN
			</summary>
			<p class="rent">rent $22.</p>
			<div class="priceTable">
				<div class="qty">with 1 House</div>
				<div class="price">$ 110</div>
				<div class="qty">with 2 Houses</div>
				<div class="price">330</div>
				<div class="qty">with 3 Houses</div>
				<div class="price">800</div>
				<div class="qty">with 4 Houses</div>
				<div class="price">975</div>
			</div>
			<p class="hotel">With HOTEL $1150.</p>
			<p class="mortgage">Mortage Value $130.</p>
			<p class="houses">Houses cost $150. each</p>
			<p class="hotelCost">Hotels, $150. plus 4 houses</p>
			<p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br />&copy;1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=XV">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XV">SELL</a>
		</details>
		</div>
                <div id='XVH'>
                <details class="card">
                        <summary class="property yellow">
                                <span class="eyebrow">Hamburg</span>
                                GROßE BLEICHEN
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">MORTAGED<br />FOR $ 130</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=XV">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XV">SELL</a>
                </details>
                </div>
		<div id='XVI'>
                <details class="card">
                        <summary class="property yellow">
                                <span class="eyebrow">Hamburg</span>
                                Neuer Wall
                        </summary>
                        <p class="rent">rent $22.</p>
                        <div class="priceTable">
                                <div class="qty">with 1 House</div>
                                <div class="price">$ 110</div>
                                <div class="qty">with 2 Houses</div>
                                <div class="price">330</div>
                                <div class="qty">with 3 Houses</div>
                                <div class="price">800</div>
                                <div class="qty">with 4 Houses</div>
                                <div class="price">975</div>
                        </div>
                        <p class="hotel">With HOTEL $1150.</p>
                        <p class="mortgage">Mortage Value $130.</p>
                        <p class="houses">Houses cost $150. each</p>
                        <p class="hotelCost">Hotels, $150. plus 4 houses</p>
                        <p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br />&copy;1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=XVI">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XVI">SELL</a>
                </details>
                </div>
                <div id='XVIH'>
                <details class="card">
                        <summary class="property yellow">
                                <span class="eyebrow">Hamburg</span>
                                NEUER WALL
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">MORTAGED<br />FOR $ 130</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=XVI">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XVI">SELL</a>
                </details>
                </div>
		<div id='XVII'>
                <details class="card">
                        <summary class="property yellow">
                                <span class="eyebrow">Hamburg</span>
                                Ballindamm
                        </summary>
                        <p class="rent">rent $24.</p>
                        <div class="priceTable">
                                <div class="qty">with 1 House</div>
                                <div class="price">$ 120</div>
                                <div class="qty">with 2 Houses</div>
                                <div class="price">360</div>
                                <div class="qty">with 3 Houses</div>
                                <div class="price">850</div>
                                <div class="qty">with 4 Houses</div>
                                <div class="price">1025</div>
                        </div>
                        <p class="hotel">With HOTEL $1200.</p>
                        <p class="mortgage">Mortage Value $140.</p>
                        <p class="houses">Houses cost $150. each</p>
                        <p class="hotelCost">Hotels, $150. plus 4 houses</p>
                        <p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br />&copy;1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=XVII">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XVII">SELL</a>
                </details>
                </div>
                <div id='XVIIH'>
                <details class="card">
                        <summary class="property yellow">
                                <span class="eyebrow">Hamburg</span>
                                BALLINDAMM
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">MORTAGED<br />FOR $ 140</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=XVII">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XVII">SELL</a>
                </details>
                </div>
	</details>
	</section>
	</section>
</div>
<div class="table">
<section>
<section>
<details class="cgreen">
<summary class="property green">
				<span class="eyebrow">Hamburg</span>
                GREEN
			</summary>
		<div id='XXIV'>
		<details class="card">
			<summary class="property green">
				<span class="eyebrow">Hamburg</span>
				RATHAUSMARKT
			</summary>
			<p class="rent">rent $26.</p>
			<div class="priceTable">
				<div class="qty">with 1 House</div>
				<div class="price">$ 130</div>
				<div class="qty">with 2 Houses</div>
				<div class="price">390</div>
				<div class="qty">with 3 Houses</div>
				<div class="price">900</div>
				<div class="qty">with 4 Houses</div>
				<div class="price">1100</div>
			</div>
			<p class="hotel">With HOTEL $1275.</p>
			<p class="mortgage">Mortage Value $150.</p>
			<p class="houses">Houses cost $200. each</p>
			<p class="hotelCost">Hotels, $200. plus 4 houses</p>
			<p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br />&copy;1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=XXIV">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XXIV">SELL</a>
		</details>
		</div>
                <div id='XXIVH'>
                <details class="card">
                        <summary class="property green">
                                <span class="eyebrow">Hamburg</span>
                                RATHAUSMARKT
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">MORTAGED<br />FOR $ 150</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=XXIV">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XXIV">SELL</a>
                </details>
                </div>
		<div id='XXV'>
                <details class="card">
                        <summary class="property green">
                                <span class="eyebrow">Hamburg</span>
                                ALSTERARKADEN
                        </summary>
                        <p class="rent">rent $26.</p>
                        <div class="priceTable">
                                <div class="qty">with 1 House</div>
                                <div class="price">$ 130</div>
                                <div class="qty">with 2 Houses</div>
                                <div class="price">390</div>
                                <div class="qty">with 3 Houses</div>
                                <div class="price">900</div>
                                <div class="qty">with 4 Houses</div>
                                <div class="price">1100</div>
                        </div>
                        <p class="hotel">With HOTEL $1275.</p>
                        <p class="mortgage">Mortage Value $150.</p>
                        <p class="houses">Houses cost $200. each</p>
                        <p class="hotelCost">Hotels, $200. plus 4 houses</p>
                        <p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br />&copy;1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=XXV">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XXV">SELL</a>
                </details>
                </div>
                <div id='XXVH'>
                <details class="card">
                        <summary class="property green">
                                <span class="eyebrow">Hamburg</span>
                                ALSTERARKADEN
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">MORTAGED<br />FOR $ 150</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=XXV">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XXV">SELL</a>
                </details>
                </div>
		<div id='XXVI'>
                <details class="card">
                        <summary class="property green">
                                <span class="eyebrow">Hamburg</span>
                                JUNGFERNSTIEG
                        </summary>
                        <p class="rent">rent $28.</p>
                        <div class="priceTable">
                                <div class="qty">with 1 House</div>
                                <div class="price">$ 150</div>
                                <div class="qty">with 2 Houses</div>
                                <div class="price">450</div>
                                <div class="qty">with 3 Houses</div>
                                <div class="price">1000</div>
                                <div class="qty">with 4 Houses</div>
                                <div class="price">1200</div>
                        </div>
                        <p class="hotel">With HOTEL $1400.</p>
                        <p class="mortgage">Mortage Value $160.</p>
                        <p class="houses">Houses cost $200. each</p>
                        <p class="hotelCost">Hotels, $200. plus 4 houses</p>
                        <p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br />&copy;1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=XXVI">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XXVI">SELL</a>
                </details>
                </div>
                <div id='XXVIH'>
                <details class="card">
                        <summary class="property green">
                                <span class="eyebrow">Hamburg</span>
                                JUNGFERNSTIEG
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">MORTAGED<br />FOR $ 160</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=XXVI">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XXVI">SELL</a>
                </details>
                </div>
	</details>
	</section>
	</section>
	<section>
	<section>
	<details class="cblue">
	<summary class="property blue">
				<span class="eyebrow">Hamburg</span>
				BLUE
			</summary>
		<div id='XVIII'>
		<details class="card">
			<summary class="property blue">
				<span class="eyebrow">Hamburg</span>
				SCHÖNE AUSSICHT
			</summary>
			<p class="rent">rent $35.</p>
			<div class="priceTable">
				<div class="qty">with 1 House</div>
				<div class="price">$ 175</div>
				<div class="qty">with 2 Houses</div>
				<div class="price">500</div>
				<div class="qty">with 3 Houses</div>
				<div class="price">1100</div>
				<div class="qty">with 4 Houses</div>
				<div class="price">1300</div>
			</div>
			<p class="hotel">With HOTEL $1500.</p>
			<p class="mortgage">Mortage Value $175.</p>
			<p class="houses">Houses cost $200. each</p>
			<p class="hotelCost">Hotels, $200. plus 4 houses</p>
			<p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br />&copy;1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=XVIII">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XVIII">SELL</a>
		</details>
		</div>
                <div id='XVIIIH'>
                <details class="card">
                        <summary class="property blue">
                                <span class="eyebrow">Hamburg</span>
                                SCHÖNE AUSSICHT
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">MORTAGED<br />FOR $ 175</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=XVIII">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XVIII">SELL</a>
                </details>
                </div>
		<div id='XIX'>
                <details class="card">
                        <summary class="property blue">
                                <span class="eyebrow">Hamburg</span>
                                ELBCHAUSSEE
                        </summary>
                        <p class="rent">rent $50.</p>
                        <div class="priceTable">
                                <div class="qty">with 1 House</div>
                                <div class="price">$ 200</div>
                                <div class="qty">with 2 Houses</div>
                                <div class="price">600</div>
                                <div class="qty">with 3 Houses</div>
                                <div class="price">1400</div>
                                <div class="qty">with 4 Houses</div>
                                <div class="price">1700</div>
                        </div>
                        <p class="hotel">With HOTEL $2000.</p>
                        <p class="mortgage">Mortage Value $200.</p>
                        <p class="houses">Houses cost $200. each</p>
                        <p class="hotelCost">Hotels, $200. plus 4 houses</p>
                        <p class="disclaimer">If a player owns ALL the Lots of any Color-Group, the<br />rent is Doubled on Unimproved Lots in that group.<br>©1935 Hasbro, Inc.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=XIX">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XIX">SELL</a>
                </details>
                </div>
                <div id='XIXH'>
                <details class="card">
                        <summary class="property blue">
                                <span class="eyebrow">Hamburg</span>
                                ELBCHAUSSEE
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">MORTAGED<br />FOR $ 200</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=XIX">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XIX">SELL</a>
                </details>
                </div>
	</details>
	</section>
	</section>
</div>

<div class="table">
	<section>
	<section>
	<details class="cgrey">
	<summary class="property grey">
				<span class="eyebrow">Hamburg</span>
				RAILROADS
			</summary>
		<div id='XX'>
		<details class="card">
			<summary class="property grey">
				<span class="eyebrow">Hamburg</span>
				HAUPTBAHNHOF
			</summary>
			<p class="rent"></p>
			<div class="priceTable" style="width: 95%;">
				<div class="qtyg" style="margin-bottom: 4%;">Rent</div>
				<div class="priceg" style="margin-bottom: 4%;">$ 25</div>
				<div class="qtyg" style="margin-bottom: 2%;">If 2 railroads are owned</div>
				<div class="priceg" style="margin-bottom: 2%;">$ 50</div>
				<div class="qtyg" style="margin-bottom: 2%;">If 3 railroads are owned</div>
				<div class="priceg" style="margin-bottom: 2%;">$ 100</div>
				<div class="qtyg" style="margin-bottom: 2%;">If 4 railroads are owned</div>
				<div class="priceg" style="margin-bottom: 2%;">$ 200</div>
                        	</div>
			<p class="mortgagew">Mortage Value $100.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=XX">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XX">SELL</a>
		</details>
		</div>
                <div id='XXH'>
                <details class="card">
                        <summary class="property grey">
                                <span class="eyebrow">Hamburg</span>
                                HAUPTBAHNHOF
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">MORTAGED<br />FOR $ 100</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=XX">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XX">SELL</a>
                </details>
                </div>
		<div id='XXI'>
                <details class="card">
                        <summary class="property grey">
                                <span class="eyebrow">Hamburg</span>
                                HAMBURG AIRPORT
                        </summary>
                        <p class="rent"></p>
<div class="priceTable" style="width: 95%;">
                                <div class="qtyg" style="margin-bottom: 4%;">Rent</div>
                                <div class="priceg" style="margin-bottom: 4%;">$ 25</div>
                                <div class="qtyg" style="margin-bottom: 2%;">If 2 railroads are owned</div>
                                <div class="priceg" style="margin-bottom: 2%;">$ 50</div>
                                <div class="qtyg" style="margin-bottom: 2%;">If 3 railroads are owned</div>
                                <div class="priceg" style="margin-bottom: 2%;">$ 100</div>
                                <div class="qtyg" style="margin-bottom: 2%;">If 4 railroads are ownedt</div>
                                <div class="priceg" style="margin-bottom: 2%;">$ 200</div>
                        </div>
                        <p class="mortgagew">Mortage Value $100.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=XXI">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XXI">SELL</a>
                </details>
</div>
                <div id='XXIH'>
                <details class="card">
                        <summary class="property grey">
                                <span class="eyebrow">Hamburg</span>
                                HAMBURG AIRPORT
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">MORTAGED<br />FOR $ 100</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=XXI">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XXI">SELL</a>
                </details>
                </div>
		<div id='XXII'>
                <details class="card">
                        <summary class="property grey">
                                <span class="eyebrow">Hamburg</span>
                                HAMBURG DAMMTOR
                        </summary>
                        <p class="rent"></p>
<div class="priceTable" style="width: 95%;">
                                <div class="qtyg" style="margin-bottom: 4%;">Rent</div>
                                <div class="priceg" style="margin-bottom: 4%;">$ 25</div>
                                <div class="qtyg" style="margin-bottom: 2%;">If 2 railroads are owned</div>
                                <div class="priceg" style="margin-bottom: 2%;">$ 50</div>
                                <div class="qtyg" style="margin-bottom: 2%;">If 3 railroads are owned</div>
                                <div class="priceg" style="margin-bottom: 2%;">$ 100</div>
                                <div class="qtyg" style="margin-bottom: 2%;">If 4 railroads are owned</div>
                                <div class="priceg" style="margin-bottom: 2%;">$ 200</div>
                        </div>
                        <p class="mortgagew">Mortage Value $100.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=XXII">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XXII">sell</a>
                </details>
                </div>
                <div id='XXIIH'>
                <details class="card">
                        <summary class="property grey">
                                <span class="eyebrow">Hamburg</span>
                                HAMBURG DAMMTOR
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">MORTAGED<br />FOR $ 100</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=XXII">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XXII">SELL</a>
                </details>
                </div>
	<div id='XXIII'>
                <details class="card">
                        <summary class="property grey">
                                <span class="eyebrow">Hamburg</span>
                                ZOB HAMBURG
                        </summary>
                        <p class="rent"></p>
<div class="priceTable" style="width: 95%;">
                                <div class="qtyg" style="margin-bottom: 4%;">Rent</div>
                                <div class="priceg" style="margin-bottom: 4%;">$ 25</div>
                                <div class="qtyg" style="margin-bottom: 2%;">If 2 railroads are owned</div>
                                <div class="priceg" style="margin-bottom: 2%;">$ 50</div>
                                <div class="qtyg" style="margin-bottom: 2%;">If 3 railroads are owned</div>
                                <div class="priceg" style="margin-bottom: 2%;">$ 100</div>
                                <div class="qtyg" style="margin-bottom: 2%;">If 4 railroads are owned</div>
                                <div class="priceg" style="margin-bottom: 2%;">$ 200</div>
                        </div>
                        <p class="mortgagew">Mortage Value $100.</p>
                        <a class="verkaufenh" href="/hypothek/index.php?hname=XXIII">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XXIII">SELL</a>
                </details>
</div>
                <div id='XXIIIH'>
                <details class="card">
                        <summary class="property grey">
                                <span class="eyebrow">Hamburg</span>
                                ZOB HAMBURG
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">MORTAGED<br />FOR $ 100</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=XXIII">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XXIII">SELL</a>
                </details>
                </div>
	</details>
	</section>
	</section>
<section>
        <section>
        <details class="cwhite">
        <summary class="property white">
                                <span class="eyebrow">Hamburg</span>
                                UTILITY
                        </summary>
                <div id='XXVII'>
                <details class="card">
                        <summary class="property white">
                                <span class="eyebrow">Hamburg</span>
                                HAMBURG WASSER
                        </summary>
                        <p class="rent"></p>
                        <div class="priceTable"></div>
                        <p class="Versorgungswerk"><br />If one Utility is owned,<br />rent is 4 times amount<br />shown on dice.<br /> <br />If both Utilities are owned,<br />rent is 10 times amount<br />shown on dice.</p><br />
                        <p class="mortgagew">Mortage Value $75.</p><br />
                        <a class="verkaufenh" href="/hypothek/index.php?hname=XXVII">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XXVII">SELL</a>
                </details>
                </div>
		<div id='XXVIIH'>
                <details class="card">
                        <summary class="property white">
                                <span class="eyebrow">Hamburg</span>
                                HAMBURG WASSER
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">MORTAGED<br />FOR $ 75</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=XXVII">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XXVII">SELL</a>
                </details>
                </div>
<div id='XXVIII'>
                <details class="card">
                        <summary class="property white">
                                <span class="eyebrow">Hamburg</span>
                                HAMBURG ENERGIE
                        </summary>
                        <p class="rent"></p>
                        <div class="priceTable"></div>
                        <p class="Versorgungswerk"><br />If one Utility is owned,<br />rent is 4 times amount<br />shown on dice.<br /> <br />If both Utilities are owned,<br />rent is 10 times amount<br />shown on dice.</p><br />
                        <p class="mortgagew">Mortage Value $75.</p><br />
                        <a class="verkaufenh" href="/hypothek/index.php?hname=XXVIII">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XXVIII">SELL</a>
                </details>
                </div>
                <div id='XXVIIIH'>
                <details class="card">
                        <summary class="property white">
                                <span class="eyebrow">Hamburg</span>
                                HAMBURG ENERGIE
                        </summary>
                        <div class="priceTable"></div>
                        <p class="hypothek">MORTAGED<br />FOR $ 75</p>
                        <a class="verkaufenh" href="/hypothek2/index.php?hname=XXVIII">MORTAGE</a>
                        <a class="verkaufen" href="/verkaufen/index.php?street=XXVIII">SELL</a>
                </details>
                </div>
        </details>
        </section>
        </section>
</div>
</div>
</div>
<script type="text/javascript">
var langStr;

    $('div[lang]').hide();
    if (document.cookie.indexOf("lang=") >= 0) {
        langStr = document.cookie.indexOf("lang=");
        langStr = document.cookie.substring(langStr + 5, langStr + 7);
        $('#lang-switch option')
            .removeAttr('selected')
            .filter('[value=' + langStr + ']')
            .attr('selected', true);
        langStr = '[lang="' + langStr + '"]';
        console.log(langStr);
        $(langStr).show();
    } else {
        // No cookie - show default language
        $("[lang='de']").show();
    }

    $('#lang-switch').change(function () {
        var CookieDate = new Date, tmp;
        CookieDate.setFullYear(CookieDate.getFullYear() +10);
        var lang = $(this).val();
        switch (lang) {
            case 'en':
                $('div[lang]').hide();
                $('div[lang="en"]').show();
                document.cookie = "lang=en; expires=" + CookieDate.toUTCString() + "; path=/";
                break;
            default:
                $('div[lang]').hide();
                $('div[lang="de"]').show();
                document.cookie = "lang=de; expires=" + CookieDate.toUTCString() + ";path=/";
        }
    });
</script>
</main>
</body>
</html>
