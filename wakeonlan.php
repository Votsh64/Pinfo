<?php

	session_start();
	if (!isset($_SESSION['user']) | empty($_SESSION['user'])) { header("Location: /?m=Vous devez être identifié pour utiliser ce script."); die(); }

	exec("<commande>"); //Commande à lancer
	header("Location: /?m=<message>"); //Message lors de la réussite

?>