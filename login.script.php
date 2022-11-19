<?php
session_start();
$_SESSION["errore_login"]=true; //se il login non viene effettuato correttamente,
								//questo flag permetterà di segnalare l'errore all'utente

if(isset($_POST["submit"])){

	
	require("config.php"); 
	$mydb = new mysqli(SERVER, UTENTE, PASSWORD, DATABASE);
	if ($mydb->connect_errno) {
		echo "Errore nella connessione a MySQL: (" . $mydb->connect_errno . ") " . $mydb->connect_error;
		exit();
	}

	
	$stmt = $mydb->prepare("SELECT id, nomeUtente, hash FROM login WHERE nomeUtente = (?)");
	
	$stmt->bind_param("s", $_POST["utente"]);
	
	$stmt->execute();
	
	$stmt->bind_result($id, $nome, $hash);
	
	while ($stmt->fetch()) { 
		echo password_hash($_POST["pwd"], PASSWORD_DEFAULT);
		echo "<br>" ;
		if(password_verify($_POST["pwd"], $hash)){
			
			unset($_SESSION["errore_login"]);
			$_SESSION["nome"] = $nome;
			$_SESSION["id"] = $id;
		}
	}
	
	echo $hash;
	$stmt->close();
}

header("Location: login.php");
exit();
?>
