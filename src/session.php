<?php
session_start();
header("Cache-control: private");
header("Cache-control: no-cache, must-revalidate");
header("Pragma: no-cache");
if(!isset($_SESSION['usuario-'.$_SESSION['user']]) !="0") {
header('Location: http://localhost/');
}
?>