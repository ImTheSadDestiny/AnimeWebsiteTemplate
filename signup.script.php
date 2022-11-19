<?php
session_start();
$_SESSION["errore_login"]=true;
$_SESSION["Erroreusr"]=false;
$_SESSION["Errorpwd"]=false;

if(isset($_POST["submit"])){
if($_POST["pwd"] == $_POST["pwd2"]){
	require("config.php"); 
	$mydb = new mysqli(SERVER, UTENTE, PASSWORD, DATABASE);
	if ($mydb->connect_errno) {
		echo "Errore nella connessione a MySQL: (" . $mydb->connect_errno . ") " . $mydb->connect_error;
		exit();
	}
	$stmt = $mydb->prepare("SELECT * FROM registrati WHERE nomeUtente = (?) OR email = (?)");
    //associo il parametro col tipo (s per stringa)
    $stmt->bind_param("ss", $_POST["usr"], $_POST["email"]);
    //eseguo la query
    $stmt->execute();

    while ($stmt->fetch()) { //eseguirà solo una iterazione
        $_SESSION["Erroreusr"] =true;

    }
	if($_SESSION["Erroreusr"] ==false){
	$stmt = $mydb->prepare("INSERT INTO registrati (nomeUtente,email,hash) VALUES (?,?,?)");
	$hash = password_hash($_POST["pwd"],PASSWORD_DEFAULT);
	$stmt->bind_param("sss", $_POST["utente"], $_POST["email"], $hash);
	
	$stmt->execute();
    
	$stmt = $mydb->prepare("INSERT INTO login (nomeUtente,hash) VALUES (?,?)");
	$hash = password_hash($_POST["pwd"],PASSWORD_DEFAULT);
	$stmt->bind_param("ss", $_POST["utente"], $hash);
	
	$stmt->execute();

	unset($_SESSION["errore_login"]);
			$_SESSION["nome"] = $nome;
	
	$stmt->close();
	}else{
		$_SESSION["Erroreusr"]=true;
		header("Location: signup.php");
		exit();
	}
}else{
	$_SESSION["Errorpwd"]=true;
	header("Location: signup.php");
	exit();
}
}
header("Location: login.php");
exit();

?>
