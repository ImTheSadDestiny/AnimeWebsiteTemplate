<?php
session_start();
$_SESSION["errore_login"]=true;
$id= $_GET["id"];

if(isset($_POST["submit"])){

	require("config.php"); 
	$mydb = new mysqli(SERVER, UTENTE, PASSWORD, DATABASE);
	if ($mydb->connect_errno) {
		echo "Errore nella connessione a MySQL: (" . $mydb->connect_errno . ") " . $mydb->connect_error;
		exit();
	}
	
	$stmt = $mydb->prepare("INSERT INTO commento (commento,nome,data,fkSerie) VALUES (?,?,NOW(),?)");

	$stmt->bind_param("sss", $_POST["commento"] ,$_SESSION["nome"],  $id);
	
	$stmt->execute();
	
	$stmt->close();
}

header("Location: anime-watching.php?id=".$id."");
exit();
?>
