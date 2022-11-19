<?php
session_start();
$_SESSION["errore_login"]=true; //se il login non viene effettuato correttamente,
$_SESSION["Erroreusr"]=false;								//questo flag permetterà di segnalare l'errore all'utente

if(isset($_POST["submit"])){

	
	require("config.php"); 
	$mydb = new mysqli(SERVER, UTENTE, PASSWORD, DATABASE);
	if ($mydb->connect_errno) {
		echo "Errore nella connessione a MySQL: (" . $mydb->connect_errno . ") " . $mydb->connect_error;
		exit();
	}

	
	$stmt = $mydb->prepare("SELECT id FROM registrati WHERE email = (?)");
    //associo il parametro col tipo (s per stringa)
    $stmt->bind_param("s", $_POST["email"]);
    //eseguo la query
    $stmt->execute();
	$stmt->bind_result($id);
    while ($stmt->fetch()) { //eseguirà solo una iterazione
        $_SESSION["Erroreusr"] =true;

    }
	
	$stmt->close();

// the message
$msg = "Clicca sul link qui sotto per recuperare la tua password\nhttps://matteogiangrossi1.altervista.org/password.php?id=".$id;

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);
$headers = array(
    'From' => 'anime@altervista.org',
    'Reply-To' => 'anime@altervista.org',
    'X-Mailer' => 'PHP/' . phpversion()
);
// send email
mail($_POST["email"],"Assistenza per recupero Password",$msg,$headers);

}

header("Location: login.php");
exit();
?>
