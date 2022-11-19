<?php
session_start();
$_SESSION["errore_login"]=true;
$_SESSION["Errorpwd"]=false;

if(isset($_POST["submit"])){
if($_POST["pwd"] == $_POST["pwd2"]){
	require("config.php"); 
	$mydb = new mysqli(SERVER, UTENTE, PASSWORD, DATABASE);
	if ($mydb->connect_errno) {
		echo "Errore nella connessione a MySQL: (" . $mydb->connect_errno . ") " . $mydb->connect_error;
		exit();
	}
	
	$stmt = $mydb->prepare("UPDATE registrati SET hash = (?) WHERE id = ?");
	$hash = password_hash($_POST["pwd"],PASSWORD_DEFAULT);
	$stmt->bind_param("si", $hash, $_GET["id"]);
	
	$stmt->execute();

	unset($_SESSION["errore_login"]);
			$_SESSION["nome"] = $nome;
	
	$stmt->close();
}else{
	$_SESSION["Errorpwd"]=true;
	header("Location: password.php");
	exit();
}
}

header("Location: login.php");
exit();
?>
