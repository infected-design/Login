<?php
session_start();
	if(isset($_POST["submit"]) && !empty($_POST["submit"])) {
		$listofpasswords = array();

		$listofpasswords["demo"] = "user";
		$listofpasswords["pekka"] = "pouta";

		$username = htmlspecialchars($_POST["username"]);
		$password = htmlspecialchars($_POST["password"]);

		if(isset($listofpasswords[$username])) {
			if($listofpasswords[$username] == $password) {
				$_SESSION["user"] = $username;
				header("Location: index.php");
				die();
			} 
		} 

		header("Location: error.php");
	}

?>