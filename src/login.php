<?php
session_start();
if(isset($_SESSION['usuario-'.$_SESSION['user']]) !="0") {
	// Nota: el resultado es protocolo agnostic
	$link = $_SERVER[ 'HTTP_HOST'] ;
	$escaped_link = htmlspecialchars($link, ENT_QUOTES, 'UTF-8');
	header('Location: http://'.$escaped_link.'/node_modules/startbootstrap-modern-business/dist/index.php');
}

include("./bd.php");
$user= $_POST["user"];
$pass = $_POST["pass"];


$query = mysqli_query($conn,"SELECT * FROM user WHERE User= '".$user."' and Password = '".$pass."'");
$nr = mysqli_num_rows($query);
$lim = mysqli_query($conn,"SELECT * FROM user WHERE User= '".$user."' and Password = '".$pass."'");
$fila= mysqli_fetch_array($lim);
$_SESSION['user'] = $user;
if($nr == 1)
{
	$_SESSION['usuario-'.$_SESSION['user']]=0;
	$_SESSION['Name-User']=$user;
	$_SESSION['Limit']=$fila['Lim'];
	$_SESSION['state_tuto']=$fila['tutorial'];
	echo "<script>location.replace('../node_modules/startbootstrap-modern-business/dist/index.php')</script>";
}
else if ($nr == 0) 
{
	echo "no";
}

//mysqli_close($conn);
?>